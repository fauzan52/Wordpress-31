<?php global $fauzanredux; ?>

<?php get_header(); ?>

<?php
    get_template_part('template-parts/content', 'top');
    get_template_part('template-parts/content', 'right');
    ?>
<div class="clear">
<?php
    get_template_part('template-parts/content', 'middle');
    get_template_part('template-parts/content', 'bottom');
?>
</div>

<div class="clear">
    <?php get_footer(); ?>
</div>
