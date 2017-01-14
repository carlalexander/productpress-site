<?php
get_header(); ?>

        <!-- PRELOADER ( uncomment to activate )
<div id="preloader"></div>
-->
        <!-- TOP NAV -->
        <div id="top-nav" class="scrollto" data-pg-collapsed>
            <div class="helper">
                <nav>
                    <a href="#home">
                        <?php _e( 'Home', 'productpress' ); ?>
                    </a>
                    <a href="#features1">
                        <?php _e( 'Features', 'productpress' ); ?>
                    </a>
                    <a href="#video-tour">
                        <?php _e( 'Video Tour', 'productpress' ); ?>
                    </a>
                    <a href="#screenshots1">
                        <?php _e( 'The Story', 'productpress' ); ?>
                    </a>
                    <a href="#about">
                        <?php _e( 'Our People', 'productpress' ); ?>
                    </a>
                    <a href="#pricing">
                        <?php _e( 'Pricing', 'productpress' ); ?>
                    </a>
                    <a href="#contact">
                        <?php _e( 'Contact', 'productpress' ); ?>
                    </a>
                </nav>
            </div>
        </div>
        <!-- OVERLAY NAV -->
        <div class="overlay-menu" data-pg-collapsed>
            <button type="button" class="overlay-menu-close">
                <?php _e( 'X', 'productpress' ); ?>
            </button>
            <nav>
                <ul>
                    <li>
                        <a href="#home" class="scroll">
                            <?php _e( 'Home', 'productpress' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#features1" class="scroll">
                            <?php _e( 'Features', 'productpress' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#screenshots1" class="scroll">
                            <?php _e( 'The Story', 'productpress' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#pricing" class="scroll">
                            <?php _e( 'Pricing', 'productpress' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="scroll">
                            <?php _e( 'Contact', 'productpress' ); ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- HOME -->
        <?php wp_title(); ?>
        <!-- END: HOME -->
        <!-- FEATURES -->
        <div id="features1" data-pg-collapsed>
            <!-- Feature 1 -->
            <div class="feature odd">
                <!-- Feature content -->
                <div class="feature_content">
                    <!-- Details -->
                    <div class="feature-details wow slideInLeft">
                        <h2><?php _e( 'Connect Gumroad to your WordPress site', 'productpress' ); ?></h2>
                        <div class="title-separator"></div>
                        <div class="feature-text">
                            <p><?php _e( 'Installation is done in three steps. First install the plugin. Next, create an "application" on Gumroad. And finally, connect the two using the ProductPress plugin.', 'productpress' ); ?></p>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="feature-image wow fadeInUp">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature1.png" alt=""/>
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
                        <h2><?php _e( 'Create your content in WordPress', 'productpress' ); ?></h2>
                        <div class="title-separator"></div>
                        <div class="feature-text">
                            <p><?php _e( 'What content would you like your Gumroad customers to have exclusive access to?', 'productpress' ); ?></p>
                            <p><?php _e( 'Write pages and posts (featuring text, video, images, and sound) and then link them to whichever Gumroad products you\'d like.', 'productpress' ); ?></p>
                            <p><?php _e( 'Only your Gumroad customers will have access to that content!', 'productpress' ); ?></p>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="feature-image wow fadeInUp">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature2.png" alt=""/>
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
                        <h2><?php _e( 'Sell your online content using Gumroad', 'productpress' ); ?></h2>
                        <div class="title-separator"></div>
                        <div class="feature-text">
                            <p><?php _e( 'Now you can sell the online course, membership site, or private blog you\'re hosting on WordPress with Gumroad! When your customers buy on Gumroad, they\'ll automatically be added to your WordPress site as a user (they\'ll receive their login info via email).', 'productpress' ); ?></p>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="feature-image wow fadeInUp" data-wow-delay="1s">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature3.png" alt=""/>
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
        <div id="video-tour" data-pg-collapsed>
            <div class="border-top"></div>
            <!-- Title -->
            <div class="section_title">
                <h2><?php _e( 'VIDEO TOUR', 'productpress' ); ?></h2>
                <div class="title_border"></div>
            </div>
            <!-- Section Intro -->
            <div class="section_intro">
                <p><?php _e( 'Love selling on Gumroad? Want to create your own WordPress membership site? See how you can do it!', 'productpress' ); ?></p>
            </div>
            <!-- Video -->
            <div id="video-container">
                <div class="responsive-video">
                    <iframe width="500" height="375" src="https://www.youtube.com/embed/5N9EfUd5JHU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
        <div id="screenshots1" data-pg-collapsed>
            <!-- Title -->
            <div class="section_title">
                <h2><?php _e( 'THE STORY', 'productpress' ); ?></h2>
                <div class="title_border"></div>
            </div>
            <!-- Section Intro -->
            <div class="section_intro">
                <p><?php _e( 'The inspiration for this project came in August, after I launched', 'productpress' ); ?> <a href="http://justinjackson.ca/audiencecourse/?utm_source=podcast">
                        <?php _e( 'my course', 'productpress' ); ?>
                    </a><?php _e( '. The course platform I was using was expensive. I was being charged $130 / month + 4% of course sales + transaction fees! Since August I\'ve had to pay $1,288.00 to that service. If I\'d used Productify, I would have paid only $39.', 'productpress' ); ?></p>
                <p><?php _e( 'What I really wanted was to host my course myself on WordPress, but sell it using', 'productpress' ); ?> <a href="http://gumroad.com/?utm_source=justinjackson">
                        <?php _e( 'Gumroad', 'productpress' ); ?>
                    </a><?php _e( '.', 'productpress' ); ?></p>
                <p><?php _e( 'When I shared the idea with', 'productpress' ); ?> <a href="http://carlalexander.ca/?utm_source=justinjackson">
                        <?php _e( 'Carl Alexander', 'productpress' ); ?>
                    </a> <?php _e( 'he had an idea of how he could build it (without using a SaaS backend). So we did!', 'productpress' ); ?></p>
                <p>&nbsp;</p>
                <p><?php _e( 'Cheers, Justin Jackson', 'productpress' ); ?></p>
            </div>
        </div>
        <!-- END: VIDEO TOUR -->
        <!-- THE STORY -->
        <!-- END: THE STORY -->
        <!-- SUBSCRIBE -->
        <div id="subscribe" data-pg-collapsed>
            <div class="border-top"></div>
            <!-- Parallax Image -->
            <div class="parallax" data-background="images/subscribe-bg.jpg"></div>
            <!-- Subscribe form -->
            <div id="subscribe-form" class="wow fadeIn">
                <!-- Mailchimp form -->
                <div id="magna-mailchimp">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="http://bizbox.us1.list-manage.com/subscribe/post?u=8cb83b3f841a6035fab28a85e&amp;id=678a83d1bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <h2 style="font-size:24px;"><?php _e( 'GET NOTIFIED WHEN WE LAUNCH', 'productpress' ); ?></h2>
                                <div class="indicates-required">
                                    <span class="asterisk"><?php _e( '*', 'productpress' ); ?></span> 
                                    <?php _e( 'indicates required', 'productpress' ); ?>
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">
                                        <?php _e( 'Email Address', 'productpress' ); ?>                                         
                                        <span class="asterisk"><?php _e( '*', 'productpress' ); ?></span>
                                    </label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">
                                        <?php _e( 'First Name', 'productpress' ); ?>                                         
                                    </label>
                                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-LNAME">
                                        <?php _e( 'Last Name', 'productpress' ); ?>                                         
                                    </label>
                                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>                                 
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_72b08078dc7c92c94c5ddf664_09326adca2" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="SUBSCRIBE NOW" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
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
        <div id="quote" data-pg-collapsed>
            <div class="border-top"></div>
            <div class="quote-elements">
                <!-- Sign -->
                <div class="quote-sign wow fadeIn">
                    <span><?php _e( ',,', 'productpress' ); ?></span>
                </div>
                <!-- Quote -->
                <div class="quote-content wow fadeIn">
                    <p><?php _e( '"Huge No-brainer: I just bought ProductPress to sell my WordPress content using Gumroad."', 'productpress' ); ?>
                    <p>
                </div>
                <!-- Quote Author -->
                <div class="quote-author wow fadeIn">
                    <div class="author-avatar">
                        <img src="https://pbs.twimg.com/profile_images/568754137207021568/vkhkluSN.jpeg" alt=""/>
                    </div>
                    <p><?php _e( '- Ken Wallace', 'productpress' ); ?></p>
                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
        <!-- QUOTE -->
        <!-- PRICING TABLE SECTION -->
        <div id="pricing" data-pg-collapsed>
            <!-- Title -->
            <div class="section_title">
                <h2><?php _e( 'PRICING', 'productpress' ); ?></h2>
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
                        <li class="plan-title">
                            <?php _e( 'PERSONAL', 'productpress' ); ?>
                        </li>
                        <li class="plan-price">
                            <span class="price"><?php _e( '$39', 'productpress' ); ?></span>
                            <span class="period"></span>
                        </li>
                        <li class="plan-row">
                            <strong><?php _e( '1 SITE LICENSE', 'productpress' ); ?></strong>
                        </li>
                        <li class="plan-row">
                            <?php _e( 'CORE FEATURES', 'productpress' ); ?>
                        </li>
                        <li class="plan-row">
                            <?php _e( '1 YEAR OF SUPPORT + FREE UPDATES', 'productpress' ); ?>
                        </li>
                        <li class="signup-button">
                            <a href="https://gum.co/productpress?wanted=true">
                                <?php _e( 'GET IT NOW', 'productpress' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- 2nd Column -->
                <div class="pricing-column wow fadeInUp">
                    <ul>
                        <li class="plan-title">
                            <?php _e( 'BUSINESS', 'productpress' ); ?>
                        </li>
                        <li class="plan-price">
                            <span class="price"><?php _e( '$99', 'productpress' ); ?></span>
                        </li>
                        <li class="plan-row">
                            <strong><?php _e( '3 SITE LICENSES', 'productpress' ); ?></strong>
                        </li>
                        <li class="plan-row">
                            <?php _e( 'CORE FEATURES', 'productpress' ); ?>
                        </li>
                        <li class="plan-row">
                            <?php _e( '1 YEAR OF SUPPORT  + FREE UPDATES', 'productpress' ); ?>
                        </li>
                        <li class="signup-button">
                            <a href="https://gum.co/productpress?wanted=true">
                                <?php _e( 'GET IT NOW', 'productpress' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- 3rd Column -->
                <div class="pricing-column wow fadeInRight">
                    <ul>
                        <li class="plan-title">
                            <?php _e( 'DEVELOPER', 'productpress' ); ?>
                        </li>
                        <li class="plan-price">
                            <span class="price"><?php _e( '$199', 'productpress' ); ?></span>
                            <span class="period"></span>
                        </li>
                        <li class="plan-row">
                            <strong><?php _e( 'UNLIMITED SITE LICENSES', 'productpress' ); ?></strong>
                        </li>
                        <li class="plan-row">
                            <?php _e( 'CORE FEATURES', 'productpress' ); ?>
                        </li>
                        <li class="plan-row">
                            <?php _e( '1 YEAR OF SUPPORT + FREE UPDATES', 'productpress' ); ?>
                        </li>
                        <li class="signup-button">
                            <a href="https://gum.co/productpress?wanted=true">
                                <?php _e( 'GET IT NOW', 'productpress' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <!-- End: Pricing Table -->
        </div>
        <!-- END: PRICING TABLE SECTION -->
        <!-- DOWNLOAD -->
        <div id="download-section" data-pg-collapsed>
            <div class="border-top"></div>
            <!-- Text -->
            <div id="download-text" class="wow fadeIn">
                <p><?php _e( 'Not quite ready? Take our email course on building profitable courses:', 'productpress' ); ?></p>
            </div>
            <!-- Download buttons -->
            <div id="download-buttons">
                <div class="helper">
                    <ul>
                        <li class="wow fadeInLeft">
                            <a href="" class="call-to-button">
                                <?php _e( 'Coming Soon', 'productpress' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
        <!-- END: DOWNLOAD -->
        <!-- CONTACT -->
        <div id="contact" data-pg-collapsed>
            <!-- Title -->
            <div class="section_title">
                <h2><?php _e( 'SEND US A MESSAGE', 'productpress' ); ?></h2>
                <div class="title_border"></div>
            </div>
            <div class="section_intro">
                <p><?php _e( 'You can email Carl and Justin here: productpresswp@gmail.com', 'productpress' ); ?> </p>
            </div>
        </div>
        <!-- END: CONTACT -->
        <!-- SOCIAL -->
        <div id="social" data-pg-collapsed>
            <div class="border-top"></div>
            <!-- Social icons -->
            <div id="social-container" class="wow fadeInUp">
                <div id="social-icons">
                    <ul>
                        <!-- Tooltips are optional! Leave the title attributes empty if you don't need tooltips! -->
                        <li>
                            <a href="https://www.facebook.com/pages/ProductPress/717206831734004" title="Like us on Facebook!" class="fb"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/productpresswp" title="Follow us on Twitter!" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>                         
                        <li>
                            <a href="https://www.youtube.com/channel/UCtK-FlvXXqQn2Aq0cPaT-gw/feed?view_as=public" title="Custom tool tip!" class="youtube"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <!-- COPYRIGHT -->
            <div id="copyright" class="wow fadeIn">
                <p><?php _e( 'ProductPress 2015 &copy; All Rights Reserved', 'productpress' ); ?></p>
            </div>
        </div>
        <!-- END: SOCIAL -->
        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/easing.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/fitvids.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/backstretch.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/swipebox.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/flexslider.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/tipTip.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/wow.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/tubular.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/menu.js"></script>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/custom.js"></script>
        <script>
 new WOW().init();
</script>        

<?php get_footer(); ?>