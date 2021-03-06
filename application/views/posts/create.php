<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" rows="10" cols="80" class="form-control" name="body" placeholder="Add Body"></textarea>
    <br>
  <div class="form-group">
  	<select name="category_id" class="form-control">
  		<?php foreach ($categories as $category): ?>
  			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
  		<?php endforeach; ?>
  	</select>
  </div>
  <div class="form-group">
  	<label>Upload image</label><br>
  	<input type="file" name="userfile" size-"20">
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>