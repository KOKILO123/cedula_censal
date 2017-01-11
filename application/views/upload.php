<?php echo isset($error) ? $error : ''; ?>

<?php echo form_open_multipart(base_url().'index.php/marcoController/do_upload'); ?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

