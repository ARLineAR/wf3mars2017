<?php get_header(); ?>
    <?php showCategoryByPostType(); ?>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <?php echo category_description(get_cat_ID(get_cat_name('ville'))); ?>
    <div class ="contenu-category"><?php $photo =get_field('photo') ?>
    <a href="<?php the_permalink(); ?>"> <span class ="titre"><?php the_title(); ?></span> </a>
    <?php of (function_exists('the_ratings_results')) : echo the_reatings_results(get_the_ID()); endif; ?> <br>
    <a href="<?php the_permalink(); ?>"> <img src="<?php echo $photo->value; ?>"></a>
    </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria', 'eprojet'); ?></p><?php endif; ?>
    <div id="qui-sommes-nous">
    <?php
    $qsn = new WP_query('pagename=qui-sommes-nous');
    if($qsn->have_posts()) :
        wgile($qsn->have_posts()) :$qsn->the-post(); ?>
        </div class="content">
        
<?php get_sidebar('colonne-droite'); ?>
<?php get_footer(); ?>