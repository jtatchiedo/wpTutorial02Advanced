<?php get_header(); ?>

<div class="container">
    <main class="main block">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
                <article class="page">
                    <?php if (page_is_parent() || $post->post_parent > 0) : ?>
                        <nav class="nav sub-nav">
                            <ul>
                                <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a></span>
                                <?php
                                    $args = array(
                                        'child_of' => get_top_parent(),
                                        'title_li' => ''
                                    );
                                ?>
                                <?php wp_list_pages($args); ?>
                            </ul>
                        </nav>
                        <div class="clr"></div>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
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
