<?php
/**
 *  Template Name: About Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

get_header('about');
?>
     <div class="butterflywebsiteabout">	   
        <div id="content" class="site-content container">
        	<div class="greatmanagersmake"><?php the_field('heading_title_about')?></div>
        	<div class="customers" id="customers">
            <div class="headercustomers">
                <div class="customers1">Customers</div>
                <ul class="clientlistcasestu nav nav-tabs" role="tablist">
                    <li class="active"><span role="presentation" class="span1"><a href="#clientList" aria-controls="clientList" role="tab" data-toggle="tab">Client list</a></span></li>
                    <li><span role="presentation" class="span2"><a href="#caseStudies" aria-controls="caseStudies" role="tab" data-toggle="tab">Case studies</a></span></li>
                </ul>
                <div class="separatorhorizontal">
                    <div class="bg1"></div>
                </div>
                
            </div>
            <div class="fade in active" role="tabpanel" id="clientList">
	            <div class="logo">
	              <ul>  
	                <li class="active"><a data-toggle="tab" href="#collapseOne"><img src="<?php the_field('client_logo_#1')?>" class="svg" alt=""/></a></li>
	                <li><a data-toggle="tab" href="#collapseTwo"><img src="<?php the_field('client_logo_#2')?>" class="cocacolalogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseThree"><img src="<?php the_field('client_logo_#3')?>" class="ticketmasterlogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseFour"><img src="<?php the_field('client_logo_#4')?>" class="dentsulogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseFive"><img src="<?php the_field('client_logo_#5')?>" class="ogilvylogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseSix"><img src="<?php the_field('client_logo_#6')?>" class="livenation svg"/></a></li>
	              </ul>
	            </div>
	            <div class="seperatorvertical">
	                <div class="rectangle"></div>
	            </div>
	            <div class="customer-testimonials">
		            <div class="tab-content">
		            	<div id="collapseOne" class="tab-pane active">
		            	<div class="u201cbutterflypowerrea">
		                “<?php the_field('client_statements_one')?>”
						</div>
						<div class="benjaminsnyers"><?php the_field('position_and_company_name')?></div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseTwo" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “<?php the_field('client_statements_two')?>”
						</div>
						<div class="benjaminsnyers"><?php the_field('position_and_company_name_two')?></div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseThree" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “<?php the_field('client_statements_three')?>”
						</div>
						<div class="benjaminsnyers"><?php the_field('position_and_company_name_three')?></div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseFour" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “<?php the_field('client_statements_four')?>”
						</div>
						<div class="benjaminsnyers"><?php the_field('position_and_company_name_four')?></div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseFive" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “<?php the_field('client_statements_five')?>”
						</div>
						<div class="benjaminsnyers"><?php the_field('position_and_company_name_five')?></div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseSix" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “<?php the_field('client_statements_six')?>”
						</div>
						<div class="benjaminsnyers"><?php the_field('position_and_company_name_six')?></div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
		            </div>
		        </div>
			</div>
            <div class="fade" role="tabpanel" id="caseStudies">
	            <div class="casestudies">
	            	<div class="casestudies-details">
						<div class="ourcustomercasest">Our customer case studies</div>
						<div class="separatorhorizontal"><div class="bg1"></div></div>
					</div>
					<div class="case-studies-container">
						<?php 
			   	$caseargs = new WP_Query(array(
			    	'post_type' => 'b_casestudy', 
					'posts_per_page' => -1
			    ));
			    while ( $caseargs->have_posts() ) : $caseargs->the_post();?>
					<div class="group21 group col-md-3">
            			<div class="viewcasestudy"><a data-toggle="modal" data-target="#caseStudyOne-<?php the_ID();?>">View case study</a></div>
            <div class="iconsarrow">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne-<?php the_ID();?>"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a></div><a data-toggle="modal" data-target="#caseStudyOne-<?php the_ID();?>"><?php if(get_field('case_study_company_logo')):?><img class="tmklogo svg" src="<?php the_field('case_study_company_logo')?>" alt="<?php the_title()?>"><?php else:?><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/><?php endif;?></a></div>
				<?php endwhile; wp_reset_postdata();?>
					</div>
	            </div>
            </div>
        </div>
        	<div class="partners" id="partners">
            <div class="headerpartners">
                <div class="partners1">Partners</div>
                <ul class="academicexperts nav nav-tabs" role="tablist">
                    <li class="active"><span role="presentation" class="span1"><a href="#academic" aria-controls="academic" role="tab" data-toggle="tab">Academic</a></span>
                    <li><span role="presentation" class="span2"><a href="#experts" aria-controls="experts" role="tab" data-toggle="tab">Experts</a></span>
                </ul>
                <div class="separatorhorizontal">
                    <div class="bg1"></div>
                </div>
            </div>
            <div class="fade in active" role="tabpanel" id="academic">
            	<div class="meetouracademicpa"><?php the_field('academic_heading')?></div>
            	<div class="weworkwithtopsch"><?php the_field('academic_descriptions')?></div>
				<div class="logo">
                	<?php if( have_rows('academic_logos') ):
					    while ( have_rows('academic_logos') ) : the_row();?>
					       <a href="<?php the_sub_field('logo_url')?>" target="_blank"><img src="<?php the_sub_field('logo_upload')?>" class="svg <?php the_sub_field('logo_name')?>"/></a>
					    <?php endwhile;
					endif;?>
            </div>
            </div>
            <div class="fade" role="tabpanel" id="experts">
	            <div class="meetouracademicpa"><?php the_field('experts_heading')?></div>
	            <div class="weworkwithtopsch"><?php the_field('experts_descriptions')?></div>
				<div class="logo">
                	<?php if( have_rows('experts_logos') ):
					    while ( have_rows('experts_logos') ) : the_row();?>
					       <a href="<?php the_sub_field('logo_url')?>" target="_blank"><img src="<?php the_sub_field('logo_upload')?>" class="svg <?php the_sub_field('logo_name')?>"/></a>
					    <?php endwhile;
					endif;?>
				</div>
            </div>
        </div>
        	<div class="downloads" id="downloads">
            <div class="headercustomers">
                <div class="media">Media</div>
                <ul class="aboutusbyus nav nav-tabs" role="tablist">
                    <li class="active"><span role="presentation" class="span1"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About us</a></span></li>
                    <li><span role="presentation" class="span2"><a href="#byus" aria-controls="byus" role="tab" data-toggle="tab">By us</a></span></li>
                </ul>
                <div class="separatorhorizontal">
                    <div class="bg1"></div>
                </div>
            </div>
            <div class="fade in active" role="tabpanel" id="about">
            	<div class="group2 col-lg-8 col-md-10 col-sm-10 col-xs-11"><?php the_field('about_us_contents')?></div>
            </div>
            <div class="fade" role="tabpanel" id="byus">
	            <div class="downloads-studies-container">
					<?php if( have_rows('by_us') ):
					    while ( have_rows('by_us') ) : the_row();?>
							<div class="group2 group col-md-3">
	        <div class="downloadebook">
	            <a href="<?php the_sub_field('ebook_pdf_url')?>" target="_blank">Download e-book</a>
	        </div>
	        <div class="iconsarrow">
	            <div class="background">
	            </div>
	            <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/>
	        </div>
	        <div class="getourebookhowt">
	            <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3"><?php the_sub_field('ebook_title')?></span>
	        </div>
	        <img src="<?php the_sub_field('ebook_pdf_thumbnail')?>" class="screenshot20190115at194659"/>
	    </div>
						<?php endwhile;endif;?>
				</div>
            </div>
        </div>
        	<div class="company col-lg-11 col-md-12 col-xs-12" id="company">
            	<div class="company-section affix-company col-lg-6 hidden-md hidden-sm hidden-xs" data-spy="affix">
            		<div class="headerpartners"><div class="company1">Company</div>
						<div class="separatorhorizontal"><div class="bg1"></div></div>
					</div>
					<?php the_field('company_descriptions');?>
            	</div> 
            	<div class="company-section hidden-lg">
            		<div class="headerpartners">
                <div class="company1">Company</div>
                <div class="separatorhorizontal"><div class="bg1"></div></div>
            </div>
					<?php the_field('company_descriptions');?>
            	</div>            
				<div class="tt col-lg-6 col-md-10 col-xs-10">
            		<?php if( have_rows('person_details') ):
					    while ( have_rows('person_details') ) : the_row();?>
					       <div class="group col-lg-4 col-md-3 col-sm-4 col-xs-6">
				                <div class="davidrollover200x300">
				                    <?php if(get_sub_field('person_image')):?>
				                    <img src="<?php the_sub_field('person_image')?>" alt="<?php the_sub_field('person_name')?>">
				                    <?php else:?>
				                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png"/>
				                    <?php endif;?>
				                </div>
				                <div class="davidmendlewicz"><?php the_sub_field('person_name')?></div>
				                <div class="cofounderceo"><?php the_sub_field('person_position')?></div>
				            </div>
					    <?php endwhile;
					endif;?>
				</div>
			</div>			
		</div>
	
		<div class="map">
			<div class="contact" id="contact">
            <div class="group3">
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-rectangle-6.png" class="rectangle"/>
                <div class="appynestinc"><?php the_field('contact_company_name')?></div>
                <div class="a67weststreetsui"><?php the_field('contact_details')?></div>
                <div class="brandingbutterflyround">
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-oval@2x.png" class="oval"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-butterfly@2x.png" class="butterfly"/>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-triangle@2x.png" class="triangle"/>
            </div>
            <div class="headerpartners container">
                <div class="contact1">Contact</div>
                <div class="separatorhorizontal">
                    <div class="bg1"></div>
                </div>
            </div>
        </div>
		</div>        
        
	</div>	<!-- End site-content -->
<?php get_template_part( 'inc/before', 'footer' );?>

<?php $caseargs = new WP_Query(array('post_type' => 'b_casestudy', 'posts_per_page' => -1));
while ( $caseargs->have_posts() ) : $caseargs->the_post();?>
<div class="modal caseStudyOne" id="caseStudyOne-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="butterflycasestudy">
        <div class="casestudy">
            <div class="bg"></div>
            <div class="brandingbutterflyicon">
                        <a href="<?php echo get_site_url()?>"><img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-bg@2x.png" class="bg1"/></a>
                        <a href="<?php echo get_site_url()?>"><img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-butterfly@2x.png" class="butterfly"/></a>
                    </div>
            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-heart@2x.png" class="heart"/>
            <div class="content animated slideInLeft">
                <?php if(get_field('case_study_company_logo')):?><img class="tmklogo" src="<?php the_field('case_study_company_logo')?>" alt="<?php the_title()?>"><?php else:?><img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-tmklogo@2x.png" class="tmklogo"/>
                <?php endif;?>
                <div class="post-contents"><?php the_content()?></div>       
            </div>
            <div class="right animated slideInRight">
                        <div class="groupdiversepeopleworkingoffice43962189">
                            <div class="rightDiv"></div>
                        </div>
                        <div class="iconclose">
                            <div class="background">
                            </div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                        <div class="themediakitchent">
                            <?php if(get_field('case_study_company_description')):?>
                            	<?php the_field('case_study_company_description')?>
                            <?php else:?>Company descriptions comes here!<?php endif?>
                        </div>
                        <div class="separatorhorizontal">
                            <div class="bg1"></div>
                        </div>
                        <div class="industryadvertising">
                            <span class="span1">INDUSTRY</span><span class="span2"><br /></span><span class="span3"><?php if(get_field('case_study_industry')):?><?php the_field('case_study_industry')?><?php else:?>industry name!<?php endif?></span>
                        </div>
                        <div class="separatorhorizontal1">
                            <div class="bg1"></div>
                        </div>
                        <div class="hqnyc">
                            <span class="span1">HQ</span><span class="span2"><br /></span><span class="span3"><?php if(get_field('case_study_hq')):?><?php the_field('case_study_hq')?><?php else:?>HQ name!<?php endif?></span>
                        </div>
                        <div class="separatorhorizontal2">
                            <div class="bg1"></div>
                        </div>
                        <div class="employees90">
                            <span class="span1">EMPLOYEES</span><span class="span2"><br /></span><span class="span3"><?php if(get_field('case_study_employees')):?><?php the_field('case_study_employees')?><?php else:?>Employees number!<?php endif?></span>
                        </div>
                        <div class="separatorhorizontal3">
                            <div class="bg1"></div>
                        </div>
                        <div class="highestdriverteamw">
                            <span class="span1">HIGHEST DRIVER</span><span class="span2"><br /></span><span class="span3"><?php if(get_field('case_study_highest_driver')):?><?php the_field('case_study_highest_driver')?><?php else:?>Driver data<?php endif?></span>
                        </div>
                        <div class="separatorhorizontal4">
                            <div class="bg1"></div>
                        </div>
                        <div class="share">
                            SHARE
                        </div>
                        <div class="share1">
                            <?php include( get_template_directory() . '/inc/share.php');?>
                        </div>
                        
                        <?php $next_post = get_next_post();
		                if (!empty( $next_post )): 
						$next_post_id = $next_post->ID;?>
                        	<div class="nextbutton">
                        <div class="iconsarrow"><div class="background"></div>
                            <a data-dismiss="modal" data-target="#caseStudyOne-<?php echo $next_post_id;?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-arrow.svg" class="arrow"/></a>
                        </div>
                        <div class="nextcasestudytick">
                            <span class="span1">NEXT CASE STUDY</span><span class="span2"><br /></span><span class="span3"><a data-dismiss="modal" data-target="#caseStudyOne-<?php echo $next_post_id;?>" data-toggle="modal"><?php echo esc_attr( $next_post->post_title ); ?></a></span>
                        </div>
                    </div>
                        <?php endif;?>
                    </div>
        </div>
     </div>
  </div>
</div>

<style>
	<?php if( get_field('background_image_casestudy') ):?>
#caseStudyOne-<?php the_ID();?> .butterflycasestudy .casestudy .right .groupdiversepeopleworkingoffice43962189{
			background-image: url('<?php the_field('background_image_casestudy')?>');
		}
	<?php endif;?>
	<?php if( get_field('company_color_code') && get_field('opacity_number') ):?>
#caseStudyOne-<?php the_ID();?> .butterflycasestudy .casestudy .right .groupdiversepeopleworkingoffice43962189 .rightDiv{
		background-color: <?php the_field('company_color_code')?>;
		opacity: <?php the_field('opacity_number')?>;
	}
	<?php endif;?>
</style>
<?php endwhile; wp_reset_postdata();?>


<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1,'order'=>'DESC','orderby'=> 'post_date'));
while ( $args->have_posts() ) : $args->the_post();?>
<div class="modal blogDetailsTwo" id="blogDetailsTwo-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyblogpost">
            <div class="casestudy">
                <div class="bg"></div>
                <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-butterfly@2x.png" class="butterfly"/>
                    </div>
                <div class="content animated slideInLeft">
                        <div class="workroam">
                            <?php butterfly_get_current_post_categories();?>
                        </div>
                        <div class="theremoteworkinge">
                            <?php the_title();?>
                        </div>
                        <?php if ( has_excerpt() ):?>
                        	<div class="inournewseriesw"><?php the_excerpt();?></div>
                        <?php else:?>
                        <div class="inournewseriesw">
                            In our new series, Work &amp; Roam, we’ll be following our Product and Solutions Analyst John Williams as he travels the world, working remotely from 5 countries. Tune in to see what worked (and what didn’t) for John during each stop, and to dig into how working remotely affects both the worker and the team back home.
                        </div>
                        <?php endif;?>
                        <div class="lisbon featured-img">
	                        <?php if(has_post_thumbnail()):?>
	                        	<?php the_post_thumbnail('full', array( 'class' => 'lisbon1' )); ?>
	                        <?php else:?>
								<img data-src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-lisbon.svg" class="lisbon1 lazyload"/>
							<?php endif;?>
                        </div>
                        
                        <div class="post-contents">
                        	<?php the_content()?>
                        </div>
                        
                    </div>
                <div class="right animated slideInRight">
                    <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-mask-1.png" class="mask"/>
                    <div class="iconclose">
                        <div class="background"></div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                    <div class="date12142018">
                            <span class="span1">DATE</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_date(); ?></span>
                        </div>
                    <div class="separatorhorizontal"><div class="bg1"></div></div>
                    <?php if(has_category()):?>
                    <div class="categoryworkroam">
                            <span class="span1">CATEGORY</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_categories_sidebar();?></span>
                        </div>
                    <div class="separatorhorizontal1"><div class="bg1"></div></div><?php endif;?>
                    <?php if(has_tag()):?>
                    <div class="tagsworklifebalan">
                            <span class="span1">TAGS</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_tags()?></span>
                    </div>
					<div class="separatorhorizontal2"><div class="bg1"></div></div><?php endif;?>
                    <div class="authorjohnwilliams">
                            <span class="span1">AUTHOR</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_author(); ?> </span>
                        </div>
                    <div class="separatorhorizontal3"><div class="bg1"></div></div>
					<div class="share">SHARE</div>
                    <div class="share1">
                    <?php include( get_template_directory() . '/inc/share.php');?>
                    </div>
                    <?php $next_post = get_next_post();
		                if (!empty( $next_post )): 
							$next_post_id = $next_post->ID;?>
						<div class="nextbutton">
                            <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-rectangle@2x.png" class="rectangle"/>
                            <div class="iconsarrow"><div class="background"></div>
                                <a data-dismiss="modal" data-target="#blogDetailsTwo-<?php echo $next_post_id;?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a data-dismiss="modal" data-target="#blogDetailsTwo-<?php echo $next_post_id;?>" data-toggle="modal"><?php echo esc_attr( $next_post->post_title ); ?></a></span>
                            </div>
                        </div>
						<?php endif;?>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>

<?php
get_footer();
