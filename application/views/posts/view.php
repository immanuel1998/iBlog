<br>
<h2><?php echo $post['title'];?></h2>


<div class="post-body">

		<small class="post-date">Posted on: <?php echo $post['created_at'];?></small>

		<img class="img-responsive" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'];?> ">
	<?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
		<hr>
		<div class="clearfix">
		<?php echo form_open('posts/delete/'.$post['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger float-left  ">
		</form>

		<a class="btn btn-primary mx-2" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">Edit</a>
<?php endif; ?>

 <hr>
 	<h3>Comments</h3>
 	<?php if ($comments):?>
 		<?php foreach($comments as $comment) : ?>

 			<div class="sample">

 			<h5><?php echo $comment['body']; ?> [by <strong> <?php echo $comment['name']; ?></strong>] </h5>

 			</div>

 		<?php endforeach; ?>
 	<?php else : ?>
 		<p>No Comments To Display</p>
 	<?php endif; ?>

 <hr>
 <h3>Add Comments</h3>

 <?php echo validation_errors(); ?>

 	<?php echo form_open('comments/create/'.$post['id']); ?>
 		<div class="form-group">
 			<label>Name</label>
 			<input type="text" name="name" class="form-control" required="">
 		</div>
 		<div class="form-group">
 			<label>Email</label>
 			<input type="text" name="email" class="form-control" required="">
 		</div>
 		<div class="form-group">
 			<label>Body</label>
 			<textarea name="body" class="form-control" required=""></textarea>
 		</div>
 		<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
 		<button class="btn btn-primary">Submit</button>
 	</form>