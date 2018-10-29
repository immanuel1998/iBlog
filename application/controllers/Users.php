<?php 
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		// Register User
		public function register()
		{
			# code...
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required|is_unique[users.name]');
			$this->form_validation->set_rules('username', 'Username', 'trim|min_length[3]|required|max_length[15]|is_unique[users.username]', array('is_unique' => 'This username already exists in our records.'));
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required|is_unique[users.password]');
			$this->form_validation->set_rules('passwordconfirm', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) 
			{
				# code...
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');

			} else
			{
				// Encrypt password
				$enc_password = md5($this->input->post('password'));
				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered','You are now registered and can login.');

				redirect('posts');
			}

		
		}

		// Login User

		public function login()
		{
			# code...
			$data['title'] = 'Sign In';

		
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		

			if ($this->form_validation->run() === FALSE) 
			{
				# code...
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');

			} else
			{
				// Get username
				$username = $this->input->post('username');
				// Get & encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				if ($user_id)
				{
					# code...
					// Create session
					$user_data = array 
					(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);
					// Set message
				$this->session->set_flashdata('user_loggedin','You are now logged in.');

				redirect('posts');

				} else {


				// Set message
				$this->session->set_flashdata('login_failed','Login is invalid.');

				redirect('users/login');
				}
			}

		
		}

			// Log user out
		public function logout()
		{
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out.');

			redirect('users/login');
		}
	}