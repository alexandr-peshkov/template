<?php get_header('page'); ?>





<main class="page">
    <div class="page-thumbnail">
        <?php the_post_thumbnail(); ?>
        <div class="wrap">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                        <?php the_content(); ?>

                    </div>

                <?php } /* конец while */ ?>

            <?php
            } // конец if
            else
                echo "<h2>Записей нет.</h2>";
            ?>
        </div>
    </div>


</main>

<?php get_footer(); ?>