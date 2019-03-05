<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

?>
<div class="butterflywebsiteresources">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle.png" class="rectangle"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle-1.png" class="rectangle1"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle-2.png" class="rectangle2"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle.png" class="rectangle3"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle-1.png" class="rectangle4"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle-2.png" class="rectangle5"/>
    </div>    
    <div class="wehelporganization"><?php if(get_field('heading_title_resources')):?><?php the_field('heading_title_resources');?><?php else:?>We Help Organizations Make Exceptional Managers<?php endif;?></div>
    <div class="blog" id="blog">
        <div class="headercustomers row">
            <div class="freshfromourblog"><?php if(get_field('heading_title_blog')):?><?php the_field('heading_title_blog');?><?php else:?>Fresh from our blog<?php endif;?></div>
            <div class="separatorhorizontal"><div class="bg2"></div></div>
        </div>
        <div class="blog-container">
	        <?php 
			   	$args = new WP_Query(array(
			    	'post_type' => 'post', 
					'posts_per_page' => -1
			    ));?>			    
			    <?php while ( $args->have_posts() ) : $args->the_post();?>
					<div class="group21 group col-md-3">
						<?php if(has_post_thumbnail()):?>
							<?php the_post_thumbnail( array(320, 231), array( 'class' => 'lisbon' ) );?>
						<?php else:?>
							<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-lisbon-1.svg" class="lisbon"/></a>
						<?php endif;?>
						<div class="readarticle">
						<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal">Read Article</a></div>
						<div class="theremoteworkinge"><a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><?php echo wp_trim_words( get_the_title(), 8 ); ?></a></div>
						<img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-iconsarrow.svg" class="iconsarrow1"/>
					</div>					
				<?php endwhile;wp_reset_postdata();?>
        </div>
        <div class="bg1"></div>
		<div class="viewfullblog"><a href="<?php echo get_site_url()?>/blog">VIEW FULL BLOG</a></div>
    </div>
    <div class="casestudies" id="casestudies">
        <div class="headercustomers row">
            <div class="ourcustomercasest"><?php if(get_field('heading_title_case_studies')):?><?php the_field('heading_title_case_studies');?><?php else:?>Our customer case studies<?php endif;?></div>
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
				<?php endwhile;wp_reset_postdata();?>
        </div>
    </div> <! -- end case studies -->
    <div class="downloads" id="downloads">
	    <div class="headercustomers row">
	        <div class="downloadsgoodies">
	            <?php if(get_field('heading_title_downloads')):?><?php the_field('heading_title_downloads');?><?php else:?>Downloads &amp; goodies<?php endif;?>
	        </div>
	        <div class="separatorhorizontal">
	            <div class="bg1">
	            </div>
	        </div>
	    </div>
	    <div class="downloads-studies-container">
	    	<div class="group2 group col-md-3">
	        <div class="downloadebook">
	            <a href="#" target="_blank">Download e-book</a>
	        </div>
	        <div class="iconsarrow">
	            <div class="background">
	            </div>
	            <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/>
	        </div>
	        <div class="getourebookhowt">
	            <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3">How to Become a Better Manager in 50 Days</span>
	        </div>
	        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-screenshot-2019-01-15-at-194659.svg" class="screenshot20190115at194659"/>
	    </div>
			<div class="group2 group col-md-3">
	        <div class="downloadebook">
	            <a href="#" target="_blank">Download e-book</a>
	        </div>
	        <div class="iconsarrow">
	            <div class="background">
	            </div>
	            <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/>
	        </div>
	        <div class="getourebookhowt">
	            <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3">How to Become a Better Manager in 50 Days</span>
	        </div>
	        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-screenshot-2019-01-15-at-194659.svg" class="screenshot20190115at194659"/>
	    </div>
			<div class="group2 group col-md-3">
	        <div class="downloadebook">
	            <a href="#" target="_blank">Download e-book</a>
	        </div>
	        <div class="iconsarrow">
	            <div class="background">
	            </div>
	            <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/>
	        </div>
	        <div class="getourebookhowt">
	            <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3">How to Become a Better Manager in 50 Days</span>
	        </div>
	        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-screenshot-2019-01-15-at-194659.svg" class="screenshot20190115at194659"/>
	    </div>
			<div class="group2 group col-md-3">
	        <div class="downloadebook">
	            <a href="#" target="_blank">Download e-book</a>
	        </div>
	        <div class="iconsarrow">
	            <div class="background">
	            </div>
	            <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/>
	        </div>
	        <div class="getourebookhowt">
	            <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3">How to Become a Better Manager in 50 Days</span>
	        </div>
	        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-screenshot-2019-01-15-at-194659.svg" class="screenshot20190115at194659"/>
	    </div>
	    </div>
	</div> <! -- end downloads -->
    <div class="faq" id="faq">
        <div class="headerpartners">
            <div class="faq1">FAQ</div>
            <div class="separatorhorizontal"><div class="bg1"></div></div>
        </div>
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		 	<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-add-remove-1.svg" class="more-less removeIcon svg"/> <?php if(get_field('question_faq_one')):?><?php the_field('question_faq_one');?><?php else:?>Question that needs an answer? #1<?php endif;?></a>
			      </h4>
			    </div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body"><?php if(get_field('answer_faq_one')):?><?php the_field('answer_faq_one');?><?php else:?>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<?php endif;?>
					</div>
				</div>
			</div>
	<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-add-remove-1.svg" class="svg more-less addIcon"/> <?php if(get_field('question_faq_two')):?><?php the_field('question_faq_two');?><?php else:?>Question that needs an answer? #2<?php endif;?></a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php if(get_field('answer_faq_two')):?><?php the_field('answer_faq_two');?><?php else:?>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<?php endif;?>
      </div>
    </div>
  </div>
	<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-add-remove-1.svg" class="more-less addIcon svg"/> <?php if(get_field('question_faq_three')):?><?php the_field('question_faq_three');?><?php else:?>Question that needs an answer? #3<?php endif;?></a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php if(get_field('answer_faq_three')):?><?php the_field('answer_faq_three');?><?php else:?>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<?php endif;?>
      </div>
    </div>
  </div>
		 </div>   
    </div> <! -- end faqs -->
</div>

<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1));
while ( $args->have_posts() ) : $args->the_post();?>
<div class="modal blogDetailsOne" id="blogDetailsOne-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyblogpost">
            <div class="casestudy">
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
                                <a data-dismiss="modal" data-target="#blogDetailsOne-<?php echo $next_post_id;?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a data-dismiss="modal" data-target="#blogDetailsOne-<?php echo $next_post_id;?>" data-toggle="modal"><?php echo esc_attr( $next_post->post_title ); ?></a></span>
                            </div>
                        </div>
						<?php endif;?>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>


<?php $caseargs = new WP_Query(array('post_type' => 'b_casestudy', 'posts_per_page' => -1));
while ( $caseargs->have_posts() ) : $caseargs->the_post();?>
<div class="modal caseStudyOne" id="caseStudyOne-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="butterflycasestudy">
        <div class="casestudy">
            <!-- <div class="bg"></div> -->
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
<?php endwhile;wp_reset_postdata();?>