<h2><?php echo $post['title']; ?></h2>
	<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
	<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">

<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-info">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>

<hr>

<h3>Add Comment</h3>

