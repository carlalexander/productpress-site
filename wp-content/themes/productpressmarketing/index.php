<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<!-- Title -->
<title>ProductPress | Sell your WordPress content on Gumroad</title>

<!-- Character set -->
<meta charset="UTF-8">

<!-- Configure viewport for mobile / tabled devices -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Define keywords for search engines -->
<meta name="keywords" content="Gumroad, WordPress, Membership">

<!-- Define a description of your web page -->
<meta name="description" content="Turn WordPress into a membership site using Gumroad">

<!-- Shorcut icon -->
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">

<!-- Apple Touch Icon  -->
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-precomposed.png">

<!-- Call Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/style.css" />

<!-- Additional color variations ( uncomment to acitvate ) -->
<!-- YOUR CUSTOM STYLES: <link rel="stylesheet" type="text/css" href="style/customize.css" /> -->
<!-- MING: <link rel="stylesheet" type="text/css" href="style/colors/ming.css" /> -->
<!-- LYNCH: <link rel="stylesheet" type="text/css" href="style/colors/lynch.css" /> -->
<!-- POMEGRANATE: <link rel="stylesheet" type="text/css" href="style/colors/pomegranate.css" /> -->
<!-- LIGHT SEE GREEN: <link rel="stylesheet" type="text/css" href="style/colors/lightseagreen.css" /> -->
<!-- BLACK AND WHITE: <link rel="stylesheet" type="text/css" href="style/colors/black-white.css" />
<!-- ROSE: <link rel="stylesheet" type="text/css" href="style/colors/rose.css" /> -->
<!-- SANDSTORM: <link rel="stylesheet" type="text/css" href="style/colors/sandstorm.css" /> -->
<!-- AQUAMARINE: <link rel="stylesheet" type="text/css" href="style/colors/aquamarine.css" /> -->
<!-- WHITE: <link rel="stylesheet" type="text/css" href="style/colors/white.css" /> -->
<!-- DARK: <link rel="stylesheet" type="text/css" href="style/colors/dark.css" /> -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- TOP NAV -->
<div id="top-nav" class="scrollto">
     <div class="helper">
          <nav>
               <a href="#home">Home</a>
               <a href="#features1">Features</a>
               <a href="#video-tour">Video Tour</a>
               <a href="#screenshots1">The Story</a>
               <a href="#about">Our People</a>
               <a href="#pricing">Pricing</a>
               <a href="#contact">Contact</a>
          </nav>
     </div>
</div>

<!-- OVERLAY NAV -->
<div class="overlay-menu">
     <button type="button" class="overlay-menu-close">X</button>
     <nav>
          <ul>
              <li><a href="#home" class="scroll">Home</a></li>
              <li><a href="#features1" class="scroll">Features</a></li>
              <li><a href="#screenshots1" class="scroll">The Story</a></li>
              <li><a href="#pricing" class="scroll">Pricing</a></li>
              <li><a href="#contact" class="scroll">Contact</a></li>
          </ul>
     </nav>
</div>

<!-- HOME -->
<div id="home" class="home1 solid-background">

     <!-- Content -->
     <div id="home_content">

          <!-- Header -->
          <div id="header">

               <!-- Logo Image
               <div id="logo">
                    <img src="images/logo.png" width="98" height="28" alt="" />
               </div>
               -->

               <!-- Logo text -->
               <div id="logo-text">
                    <a href="#home" class="scroll">ProductPress</a>
               </div>

               <!-- Menu button -->
               <div class="menu-button" id="open-overlay">
                  <span class="menu-label">MENU</span>
                  <div class="menu-lines">
                       <span class="menu-line"></span>
                       <span class="menu-line"></span>
                       <span class="menu-line"></span>
                  </div>
               </div>

          <div class="clear"></div>
          </div>
          <!-- End: Header -->

          <!-- Intro -->
          <div id="intro">
               <h1>
               Combine WordPress + Gumroad to create a supercharged membership site.
               </h1>
          </div>

          <!-- Call to action buttons -->
          <div id="call-to-action">
               <div class="helper">
                    <ul>
                        <li><a href="https://gum.co/productpress?wanted=true" class="call-to-button">Download Now</a></li>
                        <li><a href="#features1" class="call-to-button-transparent scroll">Learn more</a></li>
                    </ul>
               </div>
          </div>

     </div>
     <!-- End: Content -->


<div class="border-bottom"></div>
</div>
<!-- END: HOME -->

<!-- FEATURES -->
<div id="features1">

     <!-- Feature 1 -->
     <div class="feature odd">

          <!-- Feature content -->
          <div class="feature_content">

                <!-- Details -->
                <div class="feature-details wow slideInLeft">

                     <h2>Connect Gumroad to your WordPress site</h2>
                     <div class="title-separator"></div>
                          <div class="feature-text">
                          <p>
                          Installation is done in three steps. First install the plugin. Next, create an "application" on Gumroad. And finally, connect the two using the ProductPress plugin.
                          </p>
                     </div>

                </div>

                <!-- Image -->
                <div class="feature-image wow fadeInUp">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature1.png" alt="" />
                </div>

          <div class="clear"></div>
          </div>
          <!-- End: Feature content -->

     </div>
     <!-- End: Feature 1 -->

     <!-- Feature 2 -->
     <div class="feature even">

          <!-- Feature content -->
          <div class="feature_content">

                <!-- Details -->
                <div class="feature-details wow slideInRight">

                     <h2>Create your content in WordPress</h2>
                     <div class="title-separator"></div>
                          <div class="feature-text">
                          <p>
                          What content would you like your Gumroad customers to have exclusive access to?</p>
                          <p>Write pages and posts (featuring text, video, images, and sound) and then link them to whichever Gumroad products you'd like.</p>
                          <p>Only your Gumroad customers will have access to that content!</p>
                     </div>

                </div>

                <!-- Image -->
                <div class="feature-image wow fadeInUp">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature2.png" alt="" />
                </div>

          <div class="clear"></div>
          </div>
          <!-- End: Feature content -->

     <div class="clear"></div>
     </div>
     <!-- End: Feature 2 -->

     <!-- Feature 3 -->
     <div class="feature full">

          <!-- Feature content -->
          <div class="feature_content">

                <!-- Details -->
                <div class="feature-details wow fadeIn">

                     <h2>Sell your online content using Gumroad</h2>
                     <div class="title-separator"></div>
                          <div class="feature-text">
                          <p>
                          Now you can sell the online course, membership site, or private blog you're hosting on WordPress with Gumroad! When your customers buy on Gumroad, they'll automatically be added to your WordPress site as a user (they'll receive their login info via email).</p>
                     </div>

                </div>

                <!-- Image -->
                <div class="feature-image wow fadeInUp" data-wow-delay="1s">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature3.png" alt="" />
                </div>

          <div class="clear"></div>
          </div>
          <!-- End: Feature content -->

     <div class="clear"></div>
     </div>
     <!-- End: Feature 3 -->

</div>
<!-- END: FEATURES -->

<!-- VIDEO TOUR -->
<div id="video-tour">
     <div class="border-top"></div>


     <!-- Title -->
     <div class="section_title">
          <h2>VIDEO TOUR</h2>
          <div class="title_border"></div>
     </div>

     <!-- Section Intro -->
     <div class="section_intro">
          <p>
          Love selling on Gumroad? Want to create your own WordPress membership site? See how you can do it!
          </p>
     </div>

     <!-- Video -->
     <div id="video-container">
          <div class="responsive-video">
               <iframe width="500" height="375" src="https://www.youtube.com/embed/5N9EfUd5JHU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
     </div>


     <div class="border-bottom"></div>
</div>
<!-- END: VIDEO TOUR -->

<!-- THE STORY -->
<div id="screenshots1">

     <!-- Title -->
     <div class="section_title">
          <h2>THE STORY</h2>
          <div class="title_border"></div>
     </div>

     <!-- Section Intro -->
     <div class="section_intro">
       <p>The inspiration for this project came in August, after I launched <a href="http://justinjackson.ca/audiencecourse/?utm_source=podcast">my course</a>. The course platform I was using was expensive. I was being charged $130 / month + 4% of course sales + transaction fees! Since August I've had to pay $1,288.00 to that service. If I'd used Productify, I would have paid only $39.</p>
       <p>What I really wanted was to host my course myself on WordPress, but sell it using <a href="http://gumroad.com/?utm_source=justinjackson">Gumroad</a>.</p>
       <p>When I shared the idea with <a href="http://carlalexander.ca/?utm_source=justinjackson">Carl Alexander</a> he had an idea of how he could build it (without using a SaaS backend). So we did!</p>
       <p>&nbsp;</p>
       <p>Cheers, Justin Jackson</p>

     </div>

</div>
<!-- END: THE STORY -->

<!-- SUBSCRIBE -->
<div id="subscribe">
     <div class="border-top"></div>

     <!-- Parallax Image -->
     <div class="parallax" data-background="<?php echo esc_url( get_template_directory_uri() ); ?>/images/subscribe-bg.jpg"></div>

     <!-- Subscribe form -->
     <div id="subscribe-form" class="wow fadeIn">

          <!-- Mailchimp form -->
          <div id="magna-mailchimp">
               <!-- Begin MailChimp Signup Form -->
               <div id="mc_embed_signup">
               <form action="http://bizbox.us1.list-manage.com/subscribe/post?u=8cb83b3f841a6035fab28a85e&amp;id=678a83d1bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
               <div id="mc_embed_signup_scroll">
	       <h2 style="font-size:24px;">LEARN HOW TO CREATE AN ONLINE COURSE</h2>
               <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
               <div class="mc-field-group">
	       <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
               </label>
	       <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
               </div>
               <div class="mc-field-group">
	       <label for="mce-FNAME">First Name </label>
	       <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
               </div>
               <div class="mc-field-group">
	       <label for="mce-LNAME">Last Name </label>
	       <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
               </div>
	       <div id="mce-responses" class="clear">
               <div class="response" id="mce-error-response" style="display:none"></div>
               <div class="response" id="mce-success-response" style="display:none"></div>
	       </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
               <div style="position: absolute; left: -5000px;"><input type="text" name="b_72b08078dc7c92c94c5ddf664_09326adca2" tabindex="-1" value=""></div>
               <div class="clear"><input type="submit" value="SUBSCRIBE NOW" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
               </div>
               </form>
               </div>
               <!--End mc_embed_signup-->
         </div>
         <!--End: Mailchimp form-->

     <div class="clear"></div>
     </div>

     <div class="border-bottom"></div>
</div>
<!-- END: SUBSCRIBE -->

<!-- Separator Line -->
<div class="separator-line"></div>

<!-- QUOTE -->
<div id="quote">
     <div class="border-top"></div>

     <div class="quote-elements">

          <!-- Sign -->
          <div class="quote-sign wow fadeIn">
               <span>,,</span>
          </div>

          <!-- Quote -->
          <div class="quote-content wow fadeIn">
             <p>
             "Huge No-brainer: I just bought ProductPress to sell my WordPress content using Gumroad."
             <p>
          </div>

          <!-- Quote Author -->
          <div class="quote-author wow fadeIn">
             <div class="author-avatar">
                  <img src="https://pbs.twimg.com/profile_images/568754137207021568/vkhkluSN.jpeg" alt="" />
             </div>
             <p>
             - Ken Wallace
             </p>
          </div>

     </div>

     <div class="border-bottom"></div>
</div>
<!-- QUOTE -->

<!-- PRICING TABLE SECTION -->
<div id="pricing">

     <!-- Title -->
     <div class="section_title">
          <h2>PRICING</h2>
          <div class="title_border"></div>
     </div>

     <!-- Section Intro ( Uncomment to show )
     <div class="section_intro">
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor sollicitudin ligula,
          imperdiet pulvinar nibh fringilla non. Integer odio metus, sollicitudin sed neque eu,
          feugiat aliquam tortor.
          </p>
     </div>
     -->

     <!-- Pricing Table -->
     <div class="pricing-table plans3">

                <!-- 1st Column -->
                <div class="pricing-column wow fadeInLeft">
                     <ul>
                         <li class="plan-title">PERSONAL</li>
                         <li class="plan-price">
                             <span class="price">$39</span><span class="period"></span>

                   </li>
                         <li class="plan-row"><strong>1 SITE LICENSE</strong></li>
                         <li class="plan-row">CORE FEATURES</li>
                         <li class="plan-row">1 YEAR OF SUPPORT + FREE UPDATES</li>

                         <li class="signup-button"><a href="https://gum.co/productpress?wanted=true">GET IT NOW</a></li>
                     </ul>
</div>

                <!-- 2nd Column -->
                <div class="pricing-column wow fadeInUp">
                     <ul>
                         <li class="plan-title">BUSINESS</li>
                         <li class="plan-price">
                             <span class="price">$99</span>
                   </li>
                         <li class="plan-row"><strong>3 SITE LICENSES</strong></li>
                         <li class="plan-row">CORE FEATURES</li>
                         <li class="plan-row">1 YEAR OF SUPPORT  + FREE UPDATES</li>

                         <li class="signup-button"><a href="https://gum.co/productpress?wanted=true">GET IT NOW</a></li>
                     </ul>
</div>

                <!-- 3rd Column -->
                <div class="pricing-column wow fadeInRight">
                     <ul>
                         <li class="plan-title">DEVELOPER</li>
                         <li class="plan-price">
                             <span class="price">$199</span><span class="period"></span>

                   </li>
                         <li class="plan-row"><strong>UNLIMITED SITE LICENSES</strong></li>
                         <li class="plan-row">CORE FEATURES</li>
                         <li class="plan-row">1 YEAR OF SUPPORT + FREE UPDATES</li>

                         <li class="signup-button"><a href="https://gum.co/productpress?wanted=true">GET IT NOW</a></li>
                     </ul>
                </div>

     <div class="clear"></div>
     </div>
     <!-- End: Pricing Table -->

</div>
<!-- END: PRICING TABLE SECTION -->

<!-- DOWNLOAD -->
<div id="download-section">
     <div class="border-top"></div>

     <!-- Text -->
     <div id="download-text" class="wow fadeIn">
          <p>
          Not quite ready? Take our email course on building profitable courses:
          </p>
     </div>

     <!-- Download buttons -->
     <div id="download-buttons">
          <div class="helper">
               <ul>
                   <li class="wow fadeInLeft">
                       <a href="" class="call-to-button">Coming Soon</a>
                   </li>

               </ul>
          </div>
     </div>

     <div class="border-bottom"></div>
</div>
<!-- END: DOWNLOAD -->

<!-- CONTACT -->
<div id="contact">

     <!-- Title -->
     <div class="section_title">
          <h2>SEND US A MESSAGE</h2>
          <div class="title_border"></div>
     </div>


     <div class="section_intro">
          <p>
          You can email Carl and Justin here: productpresswp@gmail.com
          </p>
     </div>



</div>
<!-- END: CONTACT -->

<?php get_footer(); ?>
