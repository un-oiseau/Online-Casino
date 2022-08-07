<?php /* Template Name: Brand Reviw */ ?>

<?php
get_header(); ?>
    <section class="wp-block-blocks-sectionblock">

        <div class="page-content brand-page">
            <?php $data = get_field('block_1'); ?>
            <div class="ocs-row">
                <div class="col-4">
                    <?php $image = $data['image']; ?>
                    <?php if ($image) : ?>
                        <img class="mb-1 w-90" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                    <?php endif; ?>
                    <div class="country-icon">
                        <?php $icon = $data['country_icon']; ?>
                        <?php if ($icon) : ?>
                            <img class="w-100" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                        <?php endif; ?>
                        <?php $stars = $data['rating']; ?>
                        <div class="stars">
                            <?php for ($i=0; $i<$stars; $i++) { ?>
                                <span class="star"></span>
                            <?php } ?>
                            <?php for ($i=0; $i<5-$stars; $i++) { ?>
                                <span class="star empty"></span>
                            <?php } ?>
                        </div>
                        <span><?php echo $stars; ?>.0 / 5.0</span>
                    </div>
                    <div class="slot-general light-purple-box mb-15 mt-15">
                        <div class="text-center">
                            <?php $data2 = get_field('block_2'); ?>
                            <p class="h5 gradient-text"><?php echo $data2['country_availability']; ?></p>
                            <?php $link = $data2['button_link']; ?>
                            <?php if ($link) : ?>
                                <button type="button" class="btn-tc btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="text-small"><?php echo get_field('block_3'); ?></p>
                </div>
                <div class="col-8">
                    <div class="brand-title">
                        <div class="ocs-container">
                            <h2><?php echo $data['full_name']; ?></h2>
                            <?php $data4 = get_field('block_4'); ?>
                            <?php $lists = $data4['list'];  ?>
                            <p class="mt-15 mb-15"><?php echo $data4['text']; ?></p>
                            <?php if ($lists) : ?>
                                <ul class="checked-list mb-15">
                                    <?php foreach ($lists as $list) { ?>
                                        <li><?php echo $list['text']; ?></li>
                                    <?php } ?>
                                </ul>
                            <?php endif; ?>
                            <div class="details">
                                <?php $data5 = get_field('block_5'); ?>
                                <p class="h5"><?php echo $data5['text']; ?></p>
                                <?php $rows = $data5['list']; ?>
                                <?php if ($rows) : ?>
                                    <?php foreach ($rows as $row) { ?>
                                        <div class="details-icon">
                                            <?php $images = $row['image']; ?>
                                            <?php if ($images) : ?>
                                                <img class="w-100" src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>" title="<?php echo $images['title']; ?>">
                                            <?php endif; ?>
                                            <h6 class="mb-0"><?php echo $row['col1']; ?></h6>
                                            <p class="large-purple"><?php echo $row['col2']; ?></p>
                                        </div>
                                    <?php } ?>
                                <?php endif; ?>
                                <div class="ocs-row mt-15">
                                    <div class="col-6">
                                        <p class="h5"><?php echo $data5['text2']; ?></p>
                                        <?php $cards = $data5['cards']; ?>
                                        <?php if ($cards) : ?>
                                            <?php foreach ($cards as $card) { ?>
                                                <div class="card-item">
                                                    <?php $cardimg = $card['img_card']; ?>
                                                    <img class="" src="<?php echo $cardimg['url']; ?>" alt="<?php echo $cardimg['alt']; ?>" title="<?php echo $cardimg['title']; ?>">
                                                </div>
                                            <?php } ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-6">
                                        <p class="h5"><?php echo $data5['text3']; ?></p>
                                        <?php $cards = $data5['cards_1']; ?>
                                        <?php if ($cards) : ?>
                                            <?php foreach ($cards as $card) { ?>
                                                <div class="card-item">
                                                    <?php $cardimg = $card['img_card']; ?>
                                                    <img class="" src="<?php echo $cardimg['url']; ?>" alt="<?php echo $cardimg['alt']; ?>" title="<?php echo $cardimg['title']; ?>">
                                                </div>
                                            <?php } ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php the_content(); ?>
        </div>

    </section>

<?php get_footer(); ?>
