<?php /* Template Name: Slot Reviw */ ?>

<?php
get_header(); ?>
    <section class="wp-block-blocks-sectionblock">

        <div class="page-content brand-slot-page">

            <?php
            $classname = "";
            if (!empty($block['className'])) {
                $classname .= ' ' . $block['className'];
            }
            ?>
            <div class="<?php echo esc_attr($classname) ?>">

                <?php $data = get_field('slot_block_1'); ?>
                <?php echo $data['text']; ?>

                <div class="ocs-row text-center">
                    <div class="col-9 mx-auto">
                        <div class="slot-img owl-carousel mx-auto">
                            <?php $image = $data['photos']; ?>
                            <?php if ($image): ?>
                                <?php foreach ($image as $imgs): ?>
                                    <?php $img =  $imgs['img']; ?>
                                    <?php if ($img) : ?>
                                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" title="<?php echo $img['title']; ?>">
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <h2><?php echo $data['name']; ?></h2>
                        <div class="slot-star">
                            <?php $stars = $data['rating']; ?>
                            <div class="rate-stars">
                                <?php for ($i=0; $i<$stars; $i++) { ?>
                                    <span class="star"></span>
                                <?php } ?>
                                <?php for ($i=0; $i<5-$stars; $i++) { ?>
                                    <span class="star empty"></span>
                                <?php } ?>
                                <span><?php echo $stars; ?>.0 / 5.0</span>
                            </div>
                            <ul class="slot-item">
                                <?php $proplist = $data['prop_list']; ?>
                                <?php if ($proplist): ?>
                                    <?php foreach ($proplist as $prop): ?>
                                        <li><?php echo $prop['item']; ?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="ocs-row">
                    <?php $data2 = get_field('slot_block_2'); ?>
                    <div class="col-4">
                        <?php $image = $data2['company']; ?>
                        <?php if ($image) : ?>
                            <div class="slot-logo text-center">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="company">
                            </div>
                        <?php endif; ?>
                        <div class="slot-general light-purple-box mb-15">
                            <div class="">
                                <div class="text-center">
                                    <h3 class="gradient-text mb-0"><?php echo $data2['highest_win']; ?></h3>
                                    <p><b>Max Win</b></p>
                                </div>
                                <?php $link = $data2['button_link']; ?>
                                <?php if ($link) : ?>
                                    <div class="text-center mt-1 mb-15">
                                        <button type="button" class="btn-tc" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                                    </div>
                                <?php endif; ?>
                                <?php $table = $data2['table']; ?>
                                <?php if ($table) : ?>
                                    <table>
                                        <?php foreach ($table as $row) { ?>
                                            <tr>
                                                <td><?php echo $row['cell_1']; ?></td>
                                                <td class="text-right"><?php echo $row['cell_2']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 slot-description">
                        <?php echo get_field('slot_block_4'); ?>
                    </div>
                </div>
                <div class="ocs-row">
                    <div class="col-4">
                        <?php $data5 = get_field('slot_block_5'); ?>
                        <?php $list = $data5['list']; ?>
                        <?php if ($list) : ?>
                            <table>
                                <?php foreach ($list as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['title']; ?></td>
                                        <?php $rate = $row['range']; ?>
                                        <td class="text-right">
                                            <?php for ($i=0; $i<$rate; $i++) { ?>
                                                <span class="star"></span>
                                            <?php } ?>
                                            <?php for ($i=0; $i<5-$rate; $i++) { ?>
                                                <span class="star empty"></span>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php endif; ?>
                        <div class="text-small mt-15">
                            <?php echo get_field('slot_block_6'); ?>
                        </div>
                    </div>
                    <div class="col-8">
                        <?php $dataRate = get_field('slot_block_3'); ?>
                        <?php if ($dataRate): ?>
                            <div class="tables-row">
                                <div class="ocs-row">
                                    <?php for ($i=1; $i <= 4; $i++) : $table = $dataRate['table_'.$i]; ?>

                                        <?php if ($table) : ?>
                                            <div class="col-6">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">
                                                                <?php $icon = $dataRate['icon'.$i]; ?>
                                                                <?php if ($icon) : ?>
                                                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
                                                                <?php endif; ?>
                                                                <span><?php echo $dataRate['title_'.$i]; ?></span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <?php foreach ($table as $row) { ?>
                                                        <tr>
                                                            <td><?php echo $row['cell_1']; ?></td>
                                                            <td class="text-right"><?php echo $row['cell_2']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            </div>
                                        <?php endif; ?>

                                    <?php endfor; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="full-text">
                    <?php echo $data['full_text']; ?>
                </div>
            </div>
            <?php the_content(); ?>
        </div>

    </section>

<?php get_footer(); ?>
