<?php get_header(); ?>

<h1 class="page-title">Posts</h1>
<div class="posts">
    <?php while( have_posts() ): the_post(); ?>
        <div class="post">
            <div class="post-header">
                <h3 class="post-title"><?php the_title() ?></h3>
                <small>Posted on <?php the_time('F j, Y');?> at <?php the_time('g:i a');?></small>
                <span>in <?php the_category(); ?></span>
            </div>

            <div class="post-body"><?php the_content(); ?></div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>