<?php get_header();?>
<section>
<div class="container">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <h3><?php the_title()?></h3>
    
    <p><?php echo get_the_date('l jS F, Y');?></p>
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <?php the_content();?>

    <?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
    ?>

    <p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>
    <?php
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

			<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
				<?php echo $tag->name;?>
			</a>

    <?php endforeach; endif;?>

    <?php comments_template();?>

    <?php endwhile; endif; ?>

</div>
</section>
<?php get_footer();?>