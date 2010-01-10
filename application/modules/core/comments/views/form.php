<?php
	$this->lang->load('comments/comments');
	$comment = $this->session->flashdata('comment');
?>

<?php echo form_open('comments/create/'.$module.'/'.$id); ?>
	<?php echo form_hidden('redirect_to', $this->uri->uri_string()); ?>
	
	<div id="commentform">
		<?php if(!$this->session->userdata('user_id')): ?>
		<p>
			<label for="name"><?php echo lang('comments.name_label');?>:</label><br />
			<input type="text" name="name" id="name" maxlength="40" value="<?php echo $comment['name'] ?>" />
		</p>
		
		<p>
			<label for="email"><?php echo lang('comments.email_label');?>:</label><br />
			<input type="text" name="email" id="email" maxlength="40" value="<?php echo $comment['email'] ?>" />
		</p>
		<?php endif; ?>
		
		<p>
			<label for="message"><?php echo lang('comments.message_label');?>:</label><br />
			<textarea name="body" id="body" rows="5" cols="30" class="width-full"><?php echo $comment['body'] ?></textarea>
		</p>
		
		<p><?php echo form_submit('btnSend', lang('comments.send_label'));?></p>
	</div>
<?php echo form_close(); ?>
