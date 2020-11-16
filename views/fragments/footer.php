<?php 
$ftrMenu = [

  'theme_location'  => 'Footer Menu',
  'menu_class'      => 'uk-navbar-nav',
  'container'       => '',
  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
  'depth'           => 2,
  'walker'          => ''

]; ?>
<footer data-globals="footer">
    <div class="uk-container uk-container-xlarge uk-light">

        <div uk-grid class="uk-flex-middle">
            <div class="uk-width-expand uk-visible@l">
                <div class="bhp-footer-localnav">
                    <?php wp_nav_menu( $ftrMenu ); ?>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-xlarge@l">
                <div class="bhp-contact-info">
                    
                    <h3>Get in Touch with Us Today</h3>
                    <div class="uk-button-group">
                        <a href="" class="uk-button uk-button-large"> Contact Us </a>
                        <a href="" class="uk-button uk-button-large"> <span uk-icon="bhp-phone"></span> 310.820.8888 </a>
                    </div>
                    <hr class="uk-divider-small uk-margin-medium">

                    <address>
                        <div class="bhp-address-hq">
                            <h4>Los Angeles Headquarters</h4>
                            <p>11111 Santa Monica Blvd. Suite 600, <br> Los Angeles, CA 90025 <br> 310.820.8888</p>
                        </div>
                        <div class="bhp-address-office">
                            <h5>Dallas Office</h5>
                            <p>1410 E Renner Road, Suite 260 <br> Richardson, TX 75082 <br> 972.233.8203</p>
                        </div>
                        <div class="bhp-address-office">
                            <h5>Phoenix Office</h5>
                            <p>7600 N. 16th St., Ste. 155 <br> Phoenix, AZ 85020 <br> 602.899.5593</p>
                        </div>
                    </address>

                </div>
            </div>
        </div>

        <div class="uk-flex uk-flex-between uk-padding uk-padding-remove-horizontal bhp-copyright" uk-margin="margin: uk-margin-small-top">
            <div> Copyright 2020. All Rights Reserved. </div>
            <div>
                <ul class="uk-subnav">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>