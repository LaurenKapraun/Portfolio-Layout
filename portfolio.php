<?php
    $portfolioFile = file_get_contents('portfolio.json', FILE_USE_INCLUDE_PATH);
    $items = json_decode($portfolioFile)
?>

<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3">
    <?php foreach ($items->projects as $item) : ?>
        <div class="cell fadeInUp animate portfolio-filter-item <?= $item->category ?>">
            <div class="portfolio-filter_img rounded">
                <div class="portfolio-filter_img_hover">
                    <div class="portfolio-filter_img_hover-wrapper">
                        <div class=" portfolio-filter_img_hover-title"><?= $item->title ?></div>
                        <div class="button-group align-center">
                            <a data-fancybox="gallery" data-src="/images/<?= $item->imgFull ?>.jpg"><span class="material-symbols-rounded">crop_free</span></a>
                            <?php if ($item->link) : ?>
                                <a href="<?= $item->link ?>" target="_blank" rel="noopener"><span class="material-symbols-rounded">link</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <picture>
                    <source type="image/webp" srcset="/images/<?= $item->imgPrev ?>.webp">
                    <source type="image/jpeg" srcset="/images/<?= $item->imgPrev ?>.jpg">
                    <img src="/images/<?= $item->imgPrev ?>.jpg" alt="<?= $item->title ?>" <?= getimagesize("images/<?= $item->imgPrev ?>.jpg")[3] ?>>
                </picture>
            </div>
        </div>
    <?php endforeach; ?>
</div>