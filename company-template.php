<?php
/*
 * Template Name: Company Layout
 */
?>
<?php get_header(); ?>

<div class="container content">
    <main class="main block">
        <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="page">
                    <h2><?php the_title(); ?></h2>
                    <p class="phone">Call Us: 1-800-555-5555</p>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found.'); ?>
        <?php endif; ?>
    </main>

    <div class="side">
        <div class="block">
            <h3>Sidebar Bar</h3>
            <p>It's just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. But then the winter came, and the grasshopper died, and the octopus ate all his acorns. Also he got a race car. Is any of this getting through to you? Why not indeed!</p>
            <a class="button" href="#">More</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>
