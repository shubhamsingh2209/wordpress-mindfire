<?php get_header();?>
<section class="page-wrap">
    <div class="container">
        <?php if( have_posts() ): while( have_posts() ): the_post();?>
            <div class="card mb-3">
                <div class="card-body">
                    <h3><?php the_title()?></h3>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
            
                </div>
            </div>
        <?php endwhile; else: endif;?>
        <?php //previous_posts_link();?>
        <?php //next_posts_link();?>      
        <?php 
                global $wp_query;
                $big=9999999;
                    echo paginate_links( array(
                        'base'         => str_replace( $big,'%#%',esc_url(get_pagenum_link($big))),
                        'format'       => '?paged=%#%',
                        'current'       => max(1,get_query_var('paged')),
                        'total'     => $wp_query->max_num_pages
                    ) );
        ?>

    </div>
</section>      
<?php get_footer();?>