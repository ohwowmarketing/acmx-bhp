<?php
// WP Custom Logo
$customLogoID = get_theme_mod( 'custom_logo' );
$logo         = wp_get_attachment_image_src( $customLogoID, 'full' ); ?>

<a href="#main" class="skip-to-content-link">Skip to Content</a>
<div data-globals="menu">
    <div class="uk-container uk-container-expand">
        <nav uk-navbar class="uk-navbar-container uk-navbar-transparent">

            <div>
                <a href="#" class="uk-logo">
                    <?php echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'">'; ?>
                </a>
            </div>

            <div class="uk-visible@l">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="">Company</a>
                        <div uk-dropdown="offset: 2" class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Team Management</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Acquisition Criteria</a>
                        <div uk-dropdown="offset: 2" class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Property Acquisitions</a></li>
                                <li><a href="#">Ground Lease Acquisitions</a></li>
                            </ul>
                        </div>                    
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                        <div uk-dropdown="offset: 2" class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Properties for Sale</a></li>
                                <li><a href="#">Properties for Lease</a></li>
                                <li><a href="#">Featured Properties</a></li>
                                <li><a href="#">Major Tenants</a></li>
                                <li><a href="#">Municipal Tenants</a></li>
                                <li><a href="#">Amenities & Renovations</a></li>
                            </ul>
                        </div>                    
                    </li>
                    <li><a href="#">Tenants</a></li>
                </ul>
            </div>

            <div>
                <button type="button" role="button" class="uk-navbar-toggle" aria-label="Open Offcanvas">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>

        </nav>
    </div>
</div>
<!-- End Main Nav -->

<?php if ( is_page([ 20,22,24,26,28,45 ]) ) : ?>
<div class="uk-background-muted" data-globals="localnav">
    <div class="uk-container uk-container-expand">
        <div class="overflow uk-flex uk-flex-between uk-flex-middle">

            <div>
                <h1>Reimagine your Workplace</h1>
            </div>
            <div>
                <ul class="uk-subnav">
                    <li><a href="#">All Properties</a></li>
                    <li><a href="#">Properties for Sale</a></li>
                    <li><a href="#">Properties for Lease</a></li>
                    <li><a href="#">Featured Properties</a></li>
                    <li><a href="#">Major Tenants</a></li>
                    <li><a href="#">Municipal Tenants</a></li>
                    <li><a href="#">Amenities & Renovations</a></li>
                </ul>            
            </div>

        </div>
    </div>
</div>
<?php endif; ?>