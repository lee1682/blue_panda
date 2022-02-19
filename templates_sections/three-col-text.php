<section class="three-col-text row">
    <div class="col-sm-12">
        <h2><?php the_field('three_col_text_heading'); ?>
        </h2>
    </div>

    <?php if( have_rows('three_col_text_columns') ): ?>
    <div class="row">
        <?php while( have_rows('three_col_text_columns') ): the_row(); ?>
        <div class="three-col-text_text col-sm-12 col-md-4">
            <h3><?php the_sub_field('col_heading'); ?></h3>
            <p><?php the_sub_field('col_paragraph'); ?></p>
            <a href="<?php the_sub_field('col_link'); ?>">
                <button class="btn-outline">
                    Find Out More

                </button>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <!-- <div class="row">
        <div class="three-col-text_text col-sm-12 col-md-4">
            <h3>Service Item</h3>
            <p>and user experience to increase organic traffic and generate quality leads for your business. We help to
                increase rankings nationally for mid to
                large size clients and can also help smaller businesses with local SEO to target specific locations and
                appear on Google
                Maps</p>
            <button class="btn-outline">
                Learn More
            </button>
        </div>
    </div> -->


</section>