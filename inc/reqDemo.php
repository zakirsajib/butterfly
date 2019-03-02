<div class="modal" id="reqDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyrequestdemoform">
            <div class="tryfree">
                    <div class="bg"></div>
                    <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle.png" class="rectangle"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-1.png" class="rectangle1"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-2.png" class="rectangle2"/>
                    <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-butterfly@2x.png" class="butterfly"/>
                    </div>
                    <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/img/combined-shapeX.svg" class="hidden-lg mobile-icon-close"/></a>
                    <div class="form animated slideInLeft">
                        <div class="our-demo-form">
                        	<?php echo do_shortcode('[ninja_form id=1]')?>
                        	
                        </div>
                    </div>
                    <div class="right animated slideInRight hidden-xs hidden-sm">
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg-1.png" class="bg1"/>
                        <div class="iconclose">
                            <div class="background">
                            </div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                        <div class="separatorhorizontal">
                            <div class="bg2">
                            </div>
                        </div>
                        <div class="u201cbutterflypowerrea">
                            “Butterfly power real time management with constant insight into my team’s mood and engagement. I can turn potential challenges into motivational moments”
                        </div>
                        <div class="benjaminsnyers">
                            Benjamin Snyers
                        </div>
                        <div class="managingdirectorat">
                            Managing Director at Ogilvy
                        </div>
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-gelogo.svg" class="gelogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-cocacolalogo.svg" class="cocacolalogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ticketmasterlogo.svg" class="ticketmasterlogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-dentsulogo.svg" class="dentsulogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ogilvylogo.svg" class="ogilvylogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-livenation@2x.png" class="livenation"/>
                        </div>
                        <div class="wealreadyworkwith">
                            We already work with the<br />following companies:
                        </div>
                    </div>
                </div>
		</div>
	</div>
</div>
<script>
	$ = jQuery.noConflict();
	$(function ($) {
		$('#reqDemoBtn').on("click", function(){
			var demoRequestForm = document.getElementById('nf-field-2');
			demoRequestForm.value = $.trim($(".section-one input[name='email']").val());
		});
		$('#reqDemoBtn2').on("click", function(){
			var demoRequestForm = document.getElementById('nf-field-2');
			demoRequestForm.value = $.trim($(".home-footer input[name='email']").val());
		});
		$('#reqDemoBtn3').on("click", function(){
			var demoRequestForm = document.getElementById('nf-field-2');
			demoRequestForm.value = $.trim($(".header-signin input[name='email']").val());
		});
		$('#reqDemoBtn4').on("click", function(){
			var demoRequestForm = document.getElementById('nf-field-2');
			demoRequestForm.value = $.trim($(".mega-menu input[name='email']").val());
		});
	});
</script>