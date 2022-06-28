<?php get_header(); ?>
<!-- disini yang per page -->
<section id="pg">
    <img id="texture" src="http://brawijayafilmfest.com/wp-content/uploads/2022/06/Layer-4.png" alt="texture">
    <div class="wrapper">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <?php endwhile; endif; ?>
    </div>
</section>

<!-- sampai sini -->
<?php get_footer(); ?>
