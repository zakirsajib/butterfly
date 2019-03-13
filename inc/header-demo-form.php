<?php $request_a_demo = fw_get_db_settings_option('request_a_demo');?>
<div class="demo-form-box" style="display: none">
	<div class="input-group"><input type="email" class="form-control demo-input" placeholder="Your work email" name="email"><span class="input-group-btn"><button class="btn btn-default" id="reqDemoBtn3" type="button" data-toggle="modal" data-target="#reqDemo"><?php echo $request_a_demo ?></button></span></div>
</div>