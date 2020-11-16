<main id="main" class="main" role="main">

    <div class="featured-property">
        <div class="uk-container uk-container-xlarge">

            <div class="uk-position-relative uk-visible-toggle" uk-slideshow="animation: fade; min-height: 563; max-height: 550; draggable: false">
                <ul class="uk-slideshow-items">
                <?php for ( $i = 1; $i <= 2; $i++ ) : ?>
                    <li uk-grid class="uk-grid-collapse">
                        <figure class="uk-width-expand uk-width-1-2@l">
                            <div class="uk-overlay-primary uk-position-cover"></div>
                            <div class="uk-cover-container">
                                <canvas width="800" height="550"></canvas>
                                <img src="https://placem.at/places?w=800&h=550&txt=0&random=<?=$i;?>" width="800" height="550" alt="" uk-cover>
                            </div>
                        </figure>
                        <figcaption class="uk-width-1-1@s uk-width-1-2@l">
                            <div>
                                <small class="uk-text-muted">featured Property</small>
                                <h3>10799 N. 90th Street Scottsdale</h3>
                                <span class="uk-text-meta">For Sale | Square Footage: 10,150</span>
                                <p>10799 North 90th Street is a 10,150 square-foot, two-story office building located in Scottsdale Arizona. Originally constructed in 1987, the property was renovated in 2007. The property is located in a dense medical, office, retail and residential area has features immediate access to Loop 101. The property is located a short distance from Scottsdale Airpark.</p>
                            </div>
                        </figcaption>
                    </li>
                <?php endfor; ?>
                </ul>
                <div class="uk-slideshow-dotnav _alt">
                    <small class="uk-text-meta">Click for next property</small>
                    <ul class="uk-slideshow-nav uk-dotnav"></ul>
                </div>            
            </div>        

        </div>
    </div>

    <section class="uk-section introduction">
        <div class="uk-container">



        </div>
    </section>

    <section class="uk-section recent-acquisitions">
        <div class="uk-container">
            
        </div>
    </section>

    <section class="uk-section case-studies">
        
    </section>

</main>

<div class="uk-padding router-testimonial">
    <div class="uk-container">
        
    </div>
</div>