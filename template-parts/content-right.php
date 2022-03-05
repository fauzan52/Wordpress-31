<div class="latestpost">
    <div class="app-card-one">
        <h3>LATEST POST</h3>
        <hr>
    <ul>
        <?php
        $latestpost = new WP_Query('posts_per_page=5'); ?>
        <?php
        while ($latestpost->have_posts()) : $latestpost->the_post();
            ?>
            <h3>
                <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
            </h3>
        <?php
        endwhile;
        wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</div>