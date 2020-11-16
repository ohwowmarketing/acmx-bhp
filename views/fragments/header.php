<?php 
// Slideshow Items
for ( $i=1; $i<=3; $i++ ) :
    $slide .= '<li>';
    $slide .= '<img src="https://placem.at/places?w=1920&h=900&txt=0&random=10'.$i.'" alt="" uk-cover>';
    $slide .= '</li>';
endfor;

if ( is_front_page() ) : ?>
    
    <header class="hero" data-hero="home">
        <div class="uk-position-relative uk-visible-toggle" uk-slideshow="animation: scale; min-height: 667; max-height: 980">
            <ul class="uk-slideshow-items">
                <?php echo $slide; ?>
            </ul>

            <div class="uk-slideshow-caption">
                <div class="uk-container uk-container-xlarge">
                    <h1>Resilience and Commitment, <br> Reimagining Real Estate.</h1>
                </div>
            </div>

            <div class="uk-slideshow-dotnav">
                <ul class="uk-slideshow-nav uk-dotnav"></ul>
            </div>
        </div>

        <div class="uk-position-bottom-right uk-width-1-1@m uk-width-1-2@l success-story">
            <div class="uk-flex uk-light">
                <div>
                    <h3>27 Years</h3> Investing In Real Estate
                </div>
                <div>
                    <h3>U.S. Properties</h3>
                    <ul>
                        <li><strong>90</strong> Properties</li>
                        <li><strong>17</strong> States</li>
                        <li><strong>2100</strong> Multifamily Units</li>
                        <li><strong>9M</strong> Commercial Sq. Ft</li>
                    </ul>
                </div>
                <div>
                    <h3>800+ Tenants</h3> See Partial List
                </div>
            </div>
        </div>
    </header>

<?php elseif ( is_home() ) : 
    // Fetch News Page Title
    $news = ['post_type'=>'page','page_id'=>18,'post__in'=>[18]];
    query_posts($news); 

    while ( have_posts() ) : the_post(); ?>

    <header class="hero" data-hero="news">
        <div class="uk-cover-container">
            <canvas width="1920" height="600"></canvas>
            <img src="https://placem.at/places?w=1920&h=900&txt=0&random=1" alt="" uk-cover>
            <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-small uk-position-bottom-center">
                <hgroup>
                    <small>Lorem Ipsum Dolor Sit Amet</small>
                    <h2>Quibusdam Dicta - News</h2>
                </hgroup>
            </div>
            <div class="hero-text-fade uk-visible@m"><?php the_title(); ?></div>
        </div>
    </header>

<?php endwhile; wp_reset_query();
elseif ( is_page() && !is_page([ 20,22,24,26,28,45 ]) ) : ?>

    <header class="hero" data-hero="page">
        <div class="uk-cover-container">
            <canvas width="1920" height="600"></canvas>
            <img src="https://placem.at/places?w=1920&h=900&txt=0&random=1" alt="" uk-cover>
            <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-small uk-position-bottom-center">
                <hgroup>
                    <small>Lorem Ipsum Dolor Sit Amet</small>
                    <h2>Quibusdam Dicta</h2>
                </hgroup>
            </div>
            <div class="hero-text-fade uk-visible@m"><?php the_title(); ?></div>
        </div>
    </header>

<?php elseif ( is_page([ 20,22,24,26,28,45 ]) ) : ?>

    <header class="hero" data-hero="map">
        
    </header>

<?php endif; ?>