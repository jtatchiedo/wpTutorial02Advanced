<?php get_header(); ?>

<div class="container content">
    <main class="main block">
        <h1>
            Search Results
        </h1>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="archive-post">
                    <h4>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    </h4>
                    <p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop("Sorry, no posts were found."); ?>
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
