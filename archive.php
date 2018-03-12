<?php get_header(); ?>

<div class="container content">
    <main class="main block">
        <h1>
            <?php
                if(is_category()) {
                    single_cat_title();
                } else if (is_author()) {
                    the_post();
                    echo 'Archives By Author: ' .get_the_author();
                    rewind_posts();
                } else if (is_tag()){
                    single_tag_title();
                } else if (is_day()) {
                    echo 'Archives By Day: ' .get_the_date();
                } else if (is_month()) {
                    echo 'Archives By Month: ' .get_the_date('F Y');
                } else if (is_year()) {
                    echo 'Archives By Year: ' .get_the_date('Y');
                } else {
                    echo 'Archives';
                }
            ?>
        </h1>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
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
