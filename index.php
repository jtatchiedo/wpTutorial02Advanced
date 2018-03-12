<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1>
            <a href="<?php echo home_url('/'); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                    <small><?php bloginfo('description'); ?></small>
            </h1>
            <div class="h_right">
                <form method="get" action="<?php esc_url(home_url('/')); ?>">
                    <input type="text" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <nav class="nav main-nav">
        <div class="container">
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>

            <?php wp_nav_menu($args); ?>
        </div>
    </nav>

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
                        <?php the_excerpt(); ?>
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

    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>&copy; 2018 - Advanced WP Themes</p>
            </div>
            <div class="f_right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
