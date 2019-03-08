<div class="modal" id="reqDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyrequestdemoform">
            <div class="tryfree">
                    <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-butterfly@2x.png" class="butterfly"/>
                    </div>
                    <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/img/combined-shapeX.svg" class="mobile-icon-close"/></a>
                    <div class="form animated slideInLeft">
                        <div class="our-demo-form">
                        	<?php echo do_shortcode('[caldera_form id="CF5c79f4c063e8b"]')?>
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
                    <div class="tab-content">    
	                     <div id="collapseOne" class="tab-pane active">
		                     <div class="u201cbutterflypowerrea">
			                     “<?php the_field('client_statements_one',13)?>”
			                </div>
							<div class="benjaminsnyers">
								<?php the_field('position_and_company_name',13)?>
							</div>
	                     </div>
	                     <div id="collapseTwo" class="tab-pane">
		                     <div class="u201cbutterflypowerrea">
			                     “<?php the_field('client_statements_two',13)?>”
			                </div>
							<div class="benjaminsnyers">
								<?php the_field('position_and_company_name_two',13)?>
							</div>
	                     </div>
	                     <div id="collapseThree" class="tab-pane">
		                     <div class="u201cbutterflypowerrea">
			                     “<?php the_field('client_statements_three',13)?>”
			                </div>
							<div class="benjaminsnyers">
								<?php the_field('position_and_company_name_three',13)?>
							</div>
	                     </div>
	                     <div id="collapseFour" class="tab-pane">
		                     <div class="u201cbutterflypowerrea">
			                     “<?php the_field('client_statements_four',13)?>”
			                </div>
							<div class="benjaminsnyers">
								<?php the_field('position_and_company_name_four',13)?>
							</div>
	                     </div>
	                     <div id="collapseFive" class="tab-pane">
		                     <div class="u201cbutterflypowerrea">
			                     “<?php the_field('client_statements_five',13)?>”
			                </div>
							<div class="benjaminsnyers">
								<?php the_field('position_and_company_name_five',13)?>
							</div>
	                     </div>
	                     <div id="collapseSix" class="tab-pane">
		                     <div class="u201cbutterflypowerrea">
			                     “<?php the_field('client_statements_six',13)?>”
			                </div>
							<div class="benjaminsnyers">
								<?php the_field('position_and_company_name_six',13)?>
							</div>
	                     </div>
                    </div>
                        <div class="logo">
                            <ul>  
				                <li class="active"><a data-toggle="tab" href="#collapseOne"><img src="<?php the_field('client_logo_#1',13)?>" class="svg" alt=""/></a></li>
				                <li><a data-toggle="tab" href="#collapseTwo"><img src="<?php the_field('client_logo_#2',13)?>" class="cocacolalogo svg"/></a></li>
				                <li><a data-toggle="tab" href="#collapseThree"><img src="<?php the_field('client_logo_#3',13)?>" class="ticketmasterlogo svg"/></a></li>
				                <li><a data-toggle="tab" href="#collapseFour"><img src="<?php the_field('client_logo_#4',13)?>" class="dentsulogo svg"/></a></li>
				                <li><a data-toggle="tab" href="#collapseFive"><img src="<?php the_field('client_logo_#5',13)?>" class="ogilvylogo svg"/></a></li>
				                <li><a data-toggle="tab" href="#collapseSix"><img src="<?php the_field('client_logo_#6',13)?>" class="livenation svg"/></a></li>
				              </ul>
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
			var demoRequestForm = document.getElementById('fld_7317306_1');
			demoRequestForm.value = $.trim($(".section-one input[name='email']").val());
		});
		$('#reqDemoBtn2').on("click", function(){
			var demoRequestForm = document.getElementById('fld_7317306_1');
			demoRequestForm.value = $.trim($(".home-footer input[name='email']").val());
		});
		$('#reqDemoBtn3').on("click", function(){
			var demoRequestForm = document.getElementById('fld_7317306_1');
			demoRequestForm.value = $.trim($(".header-signin input[name='email']").val());
		});
		$('#reqDemoBtn4').on("click", function(){
			var demoRequestForm = document.getElementById('fld_7317306_1');
			demoRequestForm.value = $.trim($(".mega-menu input[name='email']").val());
		});
	});
</script>