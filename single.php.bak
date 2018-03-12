<?php get_header(); ?>

<div class="container content">
    <main class="main block">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <p class="meta">
                    Posted at 
                    <?php the_time('F j, Y g:i a'); ?>
                    by
                    <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                    </a>
                    Posted In
                    <?php
                        $categories = get_the_category();
                        $separator=", ";
                        $output = '';

                        if($categories) {
                            foreach($categories as $category) {
                                $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                            }
                        }

                        echo trim($output, $separator);
                    ?>
                    </p>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo apautop("Sorry, no posts were found."); ?>
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

