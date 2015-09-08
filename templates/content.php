<article <?php post_class(); ?>>
    <div class="card">
        <div class="entry-img">
        </div>
        <div class="entry-container">

            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>

            <footer class="entry-footer">
                <?php get_template_part( 'templates/entry-meta' ); ?>
            </footer>
        </div>
    </div>
</article>

