<?php
use \yii\helpers\Url;

use \blog\components\StaticService;

StaticService::includeAppCssStatic("/js/jquery/blueimp-gallery/css/blueimp-gallery.css", \blog\assets\AppAsset::className());
StaticService::includeAppCssStatic("/js/jquery/blueimp-gallery/css/blueimp-gallery-indicator.css", \blog\assets\AppAsset::className());
StaticService::includeAppCssStatic("/js/jquery/blueimp-gallery/css/blueimp-gallery-video.css", \blog\assets\AppAsset::className());

StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/blueimp-helper.js", \blog\assets\AppAsset::className());
StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/blueimp-gallery.js", \blog\assets\AppAsset::className());
StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/blueimp-gallery-fullscreen.js", \blog\assets\AppAsset::className());
StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/blueimp-gallery-indicator.js", \blog\assets\AppAsset::className());
StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/blueimp-gallery-video.js", \blog\assets\AppAsset::className());
StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/blueimp-gallery-vimeo.js", \blog\assets\AppAsset::className());
StaticService::includeAppJsStatic("/js/jquery/blueimp-gallery/js/jquery.blueimp-gallery.js", \blog\assets\AppAsset::className());
?>
<main class="col-md-12 main-content">
    <?php if ($data): ?>
        <div class="row">
            <?php foreach ($data as $_item): ?>
                <div class="col-sm-6 col-md-3">
                    <a href="<?= $_item['src_url']; ?>?format=/w/600" class="thumbnail" data-gallery>
                        <img src="<?= $_item['src_url']; ?>?format=/h/200" style="height: 200px; width: 100%; display: block;">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <!-- END BLUEIMP GALLERY -->
    <?php endif; ?>
    <?php if ($page_info['total_page']): ?>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
                <nav>
                    <ul class="pagination pull-right">
                        <?php if ($page_info['previous']): ?>
                            <li><a class="page-number" href="<?= $page_url; ?>?p=1"><span>«</span></a></li>
                        <?php endif; ?>
                        <?php for ($pidx = $page_info['from']; $pidx <= $page_info['end']; $pidx++): ?>
                            <?php if ($pidx == $page_info['current']): ?>
                                <li class="disabled">
                                    <a href="javascript:void(0);" class="page-number"><?= $pidx; ?></a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?= $page_url; ?>?p=<?= $pidx; ?>" class="page-number"><?= $pidx; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <?php if ($page_info['next']): ?>
                            <li>
                                <a class="page-number" href="<?= $page_url; ?>?p=<?= $page_info['total_page']; ?>">
                                    <span>»</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>

    <?php endif; ?>
</main>