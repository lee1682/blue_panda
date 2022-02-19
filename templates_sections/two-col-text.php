<section class="two-col-text row">
    <div class="col-sm-12">
        <h2><?php the_field('two_col_heading'); ?>
        </h2>
    </div>

    <?php if( have_rows('two_col_items') ): ?>
    <div class="row">
        <?php while( have_rows('two_col_items') ): the_row(); ?>
        <div class="col-sm-12 col-md-6 two-col-text_text">
            <h3><?php the_sub_field('two_col_item_heading'); ?></h3>
            <p><?php the_sub_field('two_col_item_desc'); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>