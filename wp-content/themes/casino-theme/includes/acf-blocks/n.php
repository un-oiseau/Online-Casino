<?php
$classname = "hero-block bg-light";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$button = get_field('button');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="hero">
        <div class="cas-container">
            <div class="cas-row">
                <div class="col-10">
                    <div class="hero-text text-red">
                        <?php echo get_field('hero'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (get_field('shadow_content')): ?>
        <div class="shadow-content">
            <div class="cas-container">
                <?php if (get_field('in_author_page')): ?>
                    <div class="shadow-box p-42">
                        <div class="flex-box">
                            <?php $group = get_field('author') ?>
                            <?php $img = $group['image']; ?>
                            <?php if ($img) :  ?>
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" title="<?php echo $img['title']; ?>">
                            <?php endif; ?>
                            <div class="info">
                                <h4 class="text-gradient mb-0"><?php echo $group['name'] ?></h4>
                                <p class="text-grey"><?php echo $group['position'] ?></p>
                            </div>
                        </div>
                        <?php echo get_field('shadow_content'); ?>
                    </div>
                <?php else: ?>
                    <div class="shadow-box p-42">
                        <?php echo get_field('shadow_content'); ?>
                        <?php $group = get_field('author') ?>

                        <?php if ($group  !== null): ?>
                            <?php if ($group['name']): ?>
                                <div class="flex-box text-small">
                                    <?php $img = $group['image']; ?>
                                    <?php if ($img) :  ?>
                                        <img class="wh58" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" title="<?php echo $img['title']; ?>">
                                    <?php endif; ?>
                                    <?php if ($group['name']): ?>
                                        <div class="info">
                                            <p>By <span class="text-red"><?php echo $group['name'] ?></span></p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($group['date']): ?>
                                        <p class="text-grey ml-auto"><?php echo $group['date'] ?> / <?php echo $group['time'] ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        <?php endif; ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php if ($button) : ?>
    <section>
        <button type="button" class="btn-cas" onclick="window.location='<?php echo $button['url']; ?>';"><?php echo $button['title']; ?></button>
    </section>
<?php endif; ?>
