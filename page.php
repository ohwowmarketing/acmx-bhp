<?php get_header();

    global $post;

    switch ( $post->ID ) {

        case '12': $pageName = 'about'; break;
        case '14': $pageName = 'team'; break;
        case '16': $pageName = 'testimmonials'; break;
        case '18': $pageName = 'news'; break;

        case '20': // for-sale
        case '22': // for-lease
        case '24': // featured-property
        case '26': // major tenants
        case '28': // municipal tenants
            $pageName = 'portfolio'; 
            break;
        
        case '30': $pageName = 'acquisition'; break;
        case '32': $pageName = 'lease'; break;
        
        case '45': // amenities-renovations
            $pageName = 'features'; 
            break;

        case '34': $pageName = 'careers'; break;
        case '36': $pageName = 'contact'; break;
        
        case '3':  // privacy-policy
        case '38': // terms-of-use
        case '41': // sitemap
            $pageName = 'legal'; 
            break;

        default:
            $pageName = "home";
            break;        

    }

    if ( ! post_password_required() ) :

        get_template_part( _page.$pageName );

    else : ?>

        <main class="main" role="main">
            <section class="uk-section uk-section-muted">
                <div class="uk-container uk-container-small uk-height-meidum uk-flex uk-flex-middle uk-flex-center uk-text-center">
                    
                    <article>
                        <span uk-icon="icon: lock; ratio: 5"></span>
                        <hr class="uk-divider-small uk-margin-auto">
                        <?php the_content(); ?>
                    </article>

                </div>
            </section>
        </main>    

    <?php endif;

get_footer();