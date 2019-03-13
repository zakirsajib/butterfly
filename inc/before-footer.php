<div class="home-footer">
	<div class="demo-area">
		<div class="demo-form-box">
			<?php $get_started_now = fw_get_db_settings_option('get_started_now');
				$request_a_demo = fw_get_db_settings_option('request_a_demo');?>
			<h4><?php echo $get_started_now ?></h4>
			<div class="input-group"><input type="email" class="form-control demo-input" placeholder="Your work email" name="email"><span class="input-group-btn"><button class="btn btn-default" id="reqDemoBtn2" type="button" data-toggle="modal" data-target="#reqDemo"><?php echo $request_a_demo ?></button></span></div>
		</div>
		<div class="latest-blog-one">
		<?php include( get_template_directory() . '/inc/megamenu-blog.php');?>
		</div>
	</div>
</div>