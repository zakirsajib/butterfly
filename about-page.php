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
        <div id="content" class="site-content container-fluid">
        	<div class="greatmanagersmake">Great managers make<br />great teams!</div>
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
	                <li class="active"><a data-toggle="tab" href="#collapseOne"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-gelogo-1.svg" class="svg" alt=""/></a></li>
	                <li><a data-toggle="tab" href="#collapseTwo"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-cocacolalogo.svg" class="cocacolalogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseThree"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ticketmasterlogo-1.svg" class="ticketmasterlogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseFour"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-dentsulogo.svg" class="dentsulogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseFive"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ogilvylogo.svg" class="ogilvylogo svg"/></a></li>
	                <li><a data-toggle="tab" href="#collapseSix"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-livenation-1@2x.png" class="livenation svg"/></a></li>
	              </ul>
	            </div>
	            <div class="seperatorvertical">
	                <div class="rectangle"></div>
	            </div>
	            <div class="customer-testimonials">
		            <div class="tab-content">
		            	<div id="collapseOne" class="tab-pane active">
		            	<div class="u201cbutterflypowerrea">
		                “Butterfly power real time management with constant insight into my team’s mood and engagement. I can turn potential challenges into motivational moments”
						</div>
						<div class="benjaminsnyers">Benjamin Snyers<br/>Managing Director at Ogilvy</div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseTwo" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “This is Cocacola statements”
						</div>
						<div class="benjaminsnyers">Cocacola<br/>Managing Director at Cocacola</div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseThree" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “Ticketmaster Statements”
						</div>
						<div class="benjaminsnyers">Benjamin Snyers<br/>Managing Director at Ticketmaster</div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseFour" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “Dentsu statements”
						</div>
						<div class="benjaminsnyers">Benjamin Snyers<br/>Managing Director at Dentsu</div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseFive" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “Ogilvy”
						</div>
						<div class="benjaminsnyers">Benjamin Snyers<br/>Managing Director at Ogilvy</div>
						<!-- <div class="managingd irectorat"></div> -->
		            </div>
						<div id="collapseSix" class="tab-pane">
		            	<div class="u201cbutterflypowerrea">
		                “Live Nation Statements”
						</div>
						<div class="benjaminsnyers">Benjamin Snyers<br/>Managing Director at Live Nation Statements</div>
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
        	<div class="group21 group col-md-3">
            <div class="viewcasestudy">
                <a data-toggle="modal" data-target="#caseStudyOne">View case study</a>
            </div>
            <div class="iconsarrow"><a data-toggle="modal" data-target="#caseStudyOne">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></a>
            </div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div><a data-toggle="modal" data-target="#caseStudyOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/></a></div>
			<div class="group1 group col-md-3">
            <div class="viewcasestudy">
                <a data-toggle="modal" data-target="#caseStudyOne">View case study</a>
            </div>
            <div class="iconsarrow"><a data-toggle="modal" data-target="#caseStudyOne">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></a>
            </div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div><a data-toggle="modal" data-target="#caseStudyOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/></a></div>
			<div class="group2 group col-md-3">
            <div class="viewcasestudy">
                <a data-toggle="modal" data-target="#caseStudyOne">View case study</a>
            </div>
            <div class="iconsarrow"><a data-toggle="modal" data-target="#caseStudyOne">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></a>
            </div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div><a data-toggle="modal" data-target="#caseStudyOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/></a></div>
			<div class="group2 group col-md-3">
            <div class="viewcasestudy">
                <a data-toggle="modal" data-target="#caseStudyOne">View case study</a>
            </div>
            <div class="iconsarrow"><a data-toggle="modal" data-target="#caseStudyOne">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></a>
            </div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div><a data-toggle="modal" data-target="#caseStudyOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/></a></div>
			<div class="group2 group col-md-3">
            <div class="viewcasestudy">
                <a data-toggle="modal" data-target="#caseStudyOne">View case study</a>
            </div>
            <div class="iconsarrow"><a data-toggle="modal" data-target="#caseStudyOne">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></a>
            </div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div><a data-toggle="modal" data-target="#caseStudyOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/></a></div>
			<div class="group2 group col-md-3">
            <div class="viewcasestudy">
                <a data-toggle="modal" data-target="#caseStudyOne">View case study</a>
            </div>
            <div class="iconsarrow"><a data-toggle="modal" data-target="#caseStudyOne">
            	<div class="background"></div><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-arrow.svg" class="arrow"/></a>
            </div>
            <div class="loremipsumdolorsi"><a data-toggle="modal" data-target="#caseStudyOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div><a data-toggle="modal" data-target="#caseStudyOne"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-tmklogo.svg" class="tmklogo svg"/></a></div>
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
            	<div class="weworkwithtopsch">
                We work with top schools and universities around the world to research the workplace and find ways to best improve employee wellbeing, which improves productivity.
            </div>
				<div class="meetouracademicpa">
                Meet our academic partners
            </div>
				<div class="logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-gelogo-1.svg" class="gelogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-cocacolalogo.svg" class="cocacolalogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ticketmasterlogo-1.svg" class="ticketmasterlogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-dentsulogo.svg" class="dentsulogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ogilvylogo.svg" class="ogilvylogo svg" />
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-livenation-1@2x.png" class="livenation"/>
            </div>
            </div>
            <div class="fade" role="tabpanel" id="experts">
	            <div class="weworkwithtopsch">
                We work with top schools and universities around the world to research the workplace and find ways to best improve employee wellbeing, which improves productivity.
            </div>
				<div class="meetouracademicpa">
                Meet our expert partners
            </div>
				<div class="logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-gelogo-1.svg" class="gelogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-cocacolalogo.svg" class="cocacolalogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ticketmasterlogo-1.svg" class="ticketmasterlogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-dentsulogo.svg" class="dentsulogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ogilvylogo.svg" class="ogilvylogo svg"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-livenation-1@2x.png" class="livenation svg"/>
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
            	<div class="group2"></div>
	            <div class="group1"></div>
            </div>
            <div class="fade" role="tabpanel" id="byus">
	            <div class="group2">
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-rectangle-7.png" class="rectangle"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-rectangle-8.png" class="rectangle1"/>
                <div class="getpdf">
                    Get PDF
                </div>
                <div class="iconsarrow">
                    <div class="background">
                    </div>
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-arrow.svg" class="arrow"/>
                </div>
                <div class="getourebookhowt">
                    <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3">How to Become a Better Manager in 50 Days</span>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-screenshot-2019-01-15-at-194659@2x.png" class="screenshot20190115at194659"/>
            </div>
				<div class="group21">
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-rectangle-9.png" class="rectangle"/>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-rectangle-10.png" class="rectangle1"/>
                <div class="downloadebook">
                    Download e-book
                </div>
                <div class="getourebookhowt">
                    <span class="span1">Get our e-book</span><span class="span2"> <br /></span><span class="span3">How to Become a Better Manager in 50 Days</span>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-screenshot-2019-01-15-at-194659@2x.png" class="screenshot20190115at194659"/>
            </div>
            </div>
        </div>
        	<div class="company" id="company">
            	<div class="company-section affix-company hidden-md hidden-sm hidden-xs" data-spy="affix">
            		<div class="headerpartners">
                <div class="company1">Company</div>
                <div class="separatorhorizontal">
                    <div class="bg1"></div>
                </div>
            </div>
					<div class="hourlyemployeesmak">
                Hourly employees make up 68% of the national workforce in the U.S. Knowing this, we thought: how can we help companies better engage these indispensable team members?<br /><br />We created Butterfly to refocus teams on engagement. We wanted to give every employee a way to voice feedback confidently, and provide every manager with the tools to turn that feedback into action.<br /><br />Butterfly’s tools are the ones we wished we had when we became managers. Our pulse surveys were designed in partnership with leading researchers and industry leaders to drive effective results. Our managerial tools were developed using artificial intelligence and machine learning to seamlessly become a tool that teams would love.<br /><br />We hope Butterfly will help spark meaningful engagement to strengthen your team.<br /><br /><br />David, Marcus &amp; Simon<br />Co-founders of Butterfly
            </div>
					<div class="ourstory">Our story.</div>
            	</div> 
            	<div class="company-section hidden-lg">
            		<div class="headerpartners">
                <div class="company1">Company</div>
                <div class="separatorhorizontal">
                    <div class="bg1"></div>
                </div>
            </div>
					<div class="hourlyemployeesmak">
                Hourly employees make up 68% of the national workforce in the U.S. Knowing this, we thought: how can we help companies better engage these indispensable team members?<br /><br />We created Butterfly to refocus teams on engagement. We wanted to give every employee a way to voice feedback confidently, and provide every manager with the tools to turn that feedback into action.<br /><br />Butterfly’s tools are the ones we wished we had when we became managers. Our pulse surveys were designed in partnership with leading researchers and industry leaders to drive effective results. Our managerial tools were developed using artificial intelligence and machine learning to seamlessly become a tool that teams would love.<br /><br />We hope Butterfly will help spark meaningful engagement to strengthen your team.<br /><br /><br />David, Marcus &amp; Simon<br />Co-founders of Butterfly
            </div>
					<div class="ourstory">Our story.</div>
            	</div>            
				<div class="tt">
            		<div class="group">
                <div class="davidrollover200x300">
                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png" class="davidrollover200x3001"/></a>
                </div>
                <div class="davidmendlewicz">
                    David Mendlewicz
                </div>
                <div class="cofounderceo">
                    Co-Founder, CEO
                </div>
            </div>
					<div class="group1">
                <div class="davidrollover200x300">
                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png" class="davidrollover200x3001"/></a>
                </div>
                <div class="davidmendlewicz">
                    David Mendlewicz
                </div>
                <div class="cofounderceo">
                    Co-Founder, CEO
                </div>
            </div>
					<div class="group2">
                <div class="davidrollover200x300">
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png" class="davidrollover200x3001"/>
                </div>
                <div class="davidmendlewicz">
                    David Mendlewicz
                </div>
                <div class="cofounderceo">
                    Co-Founder, CEO
                </div>
            </div>
					<div class="group3">
                <div class="davidrollover200x300">
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png" class="davidrollover200x3001"/>
                </div>
                <div class="davidmendlewicz">
                    David Mendlewicz
                </div>
                <div class="cofounderceo">
                    Co-Founder, CEO
                </div>
            </div>
					<div class="group4">
                <div class="davidrollover200x300">
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png" class="davidrollover200x3001"/>
                </div>
                <div class="davidmendlewicz">
                    David Mendlewicz
                </div>
                <div class="cofounderceo">
                    Co-Founder, CEO
                </div>
            </div>
					<div class="group5">
                <div class="davidrollover200x300">
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-davidrollover-200x300-4@2x.png" class="davidrollover200x3001"/>
                </div>
                <div class="davidmendlewicz">
                    David Mendlewicz
                </div>
                <div class="cofounderceo">
                    Co-Founder, CEO
                </div>
            </div>
				</div>
			</div>			
		</div>
	
		<div class="map">
			<div class="contact" id="contact">
            <div class="group3">
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-rectangle-6.png" class="rectangle"/>
                <div class="a67weststreetsui">
                    <span class="span1">67 West Street - Suite 324<br />Brooklyn, NY 11222<br />USA<br /><br /></span><span class="span2">hello@butterfly.ai</span>
                </div>
                <div class="appynestinc">
                    Appynest Inc.
                </div>
                <div class="brandingbutterflyround">
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-oval@2x.png" class="oval"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-butterfly@2x.png" class="butterfly"/>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-triangle@2x.png" class="triangle"/>
            </div>
            <div class="headerpartners">
                <div class="contact1">
                    Contact
                </div>
                <div class="separatorhorizontal">
                    <div class="bg1">
                    </div>
                </div>
            </div>
        </div>
		</div>        
        
	</div>	<!-- End site-content -->
<?php get_template_part( 'inc/before', 'footer' );?>
<div class="modal" id="caseStudyOne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-tmklogo@2x.png" class="tmklogo"/>
                        <div class="u201courceolivesandb">
                            “Our CEO lives and breathes Butterfly, he immerses himself in it. He responds to every chat he receives”
                        </div>
                        <div class="challenges">
                            Challenges
                        </div>
                        <div class="loremipsumdolorsi">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac pellentesque mauris. Cras tempor, diam a suscipit malesuada, arcu leo commodo mauris, eget imperdiet tortor nulla at felis. Proin tincidunt et libero quis euismod. Sed fermentum dignissim viverra.<br /><br />Aenean aliquet eget libero auctor auctor. Morbi eget quam dolor. Fusce et turpis elementum eros faucibus pellentesque vitae et diam. Curabitur sagittis diam non urna maximus semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-screenshot-2019-01-22-at-111104.svg" class="screenshot20190122at111104"/>
                        <div class="solutions">
                            Solutions
                        </div>
                        <div class="loremipsumdolorsi1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac pellentesque mauris. Cras tempor, diam a suscipit malesuada, arcu leo commodo mauris, eget imperdiet tortor nulla at felis. Proin tincidunt et libero quis euismod. Sed fermentum dignissim viverra.<br /><br />Aenean aliquet eget libero auctor auctor. Morbi eget quam dolor. Fusce et turpis elementum eros faucibus pellentesque vitae et diam. Curabitur sagittis diam non urna maximus semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-product.svg" class="product"/>
                        <div class="seperatorvertical">
                            <div class="rectangle">
                            </div>
                        </div>
                        <div class="anonymouspulsesurv">
                            Anonymous Pulse Surveys
                        </div>
                        <div class="ouracademicallybac">
                            Our academically backed survey methodology ensures that you get the most effective feedback from employees.
                        </div>
                        <div class="results">
                            Results
                        </div>
                        <div class="loremipsumdolorsi2">
                            <span class="span1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac pellentesque mauris. Cras tempor, diam a suscipit malesuada, arcu leo commodo mauris, eget imperdiet tortor nulla at felis.</span><span class="span2"> <br /><br />Proin tincidunt et libero quis euismod. Sed fermentum dignissim viverra.<br /><br />Aenean aliquet eget libero auctor auctor. Morbi eget quam dolor. Fusce et turpis elementum eros faucibus pellentesque vitae et diam. Curabitur sagittis diam non urna maximus semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br /><br /><br /><br /></span><span class="span3">Other changes have followed:</span>
                        </div>
                        <div class="loremipsumdolorsi3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br />Sed ac pellentesque mauris.<br /><br />Cras tempor, diam a suscipit malesuada, arcu leo commodo mauris.
                        </div>
                        <div class="iconscheck">
                            <div class="background">
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-check-2.svg" class="check"/>
                        </div>
                        <div class="iconscheck1">
                            <div class="background">
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-check-2.svg" class="check"/>
                        </div>
                        <div class="iconscheck2">
                            <div class="background">
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-check-2.svg" class="check"/>
                        </div>
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
                            The Media Kitchen (TMK) is an agency with a digital core, providing cloud-based solutions for collecting and protecting media assets and data
                        </div>
                        <div class="separatorhorizontal">
                            <div class="bg1">
                            </div>
                        </div>
                        <div class="industryadvertising">
                            <span class="span1">INDUSTRY</span><span class="span2"><br /></span><span class="span3">Advertising</span>
                        </div>
                        <div class="separatorhorizontal1">
                            <div class="bg1">
                            </div>
                        </div>
                        <div class="hqnyc">
                            <span class="span1">HQ</span><span class="span2"><br /></span><span class="span3">NYC</span>
                        </div>
                        <div class="separatorhorizontal2">
                            <div class="bg1">
                            </div>
                        </div>
                        <div class="employees90">
                            <span class="span1">EMPLOYEES</span><span class="span2"><br /></span><span class="span3">90</span>
                        </div>
                        <div class="separatorhorizontal3">
                            <div class="bg1">
                            </div>
                        </div>
                        <div class="highestdriverteamw">
                            <span class="span1">HIGHEST DRIVER</span><span class="span2"><br /></span><span class="span3">Teamwork</span>
                        </div>
                        <div class="separatorhorizontal4">
                            <div class="bg1">
                            </div>
                        </div>
                        <div class="share">
                            SHARE
                        </div>
                        <div class="share1">
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-facebook.svg" class="facebook"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-instagram.svg" class="instagram"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-link.svg" class="link"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-linkedin.svg" class="linkedin"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-twitter.svg" class="twitter"/>
                        </div>
                        <div class="nextbutton">
                        <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-rectangle@2x.png" class="rectangle"/>
                        <div class="iconsarrow">
                            <div class="background">
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/casestudy/img/butterflycasestudy-arrow.svg" class="arrow"/>
                        </div>
                        <div class="nextcasestudytick">
                            <span class="span1">NEXT CASE STUDY</span><span class="span2"><br /></span><span class="span3">Ticketmaster</span>
                        </div>
                    </div>
                    </div>
                    
                </div>
     </div>
  </div>
</div>
<?php
get_footer();
