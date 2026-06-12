<?= view('common/_json_ld'); ?>
<footer id="footer">

    <div class="footer-copyright">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="copyright text-start">
                        <?= esc($baseSettings->copyright); ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="nav-footer text-end">
                        <ul>
                            <?php if (!empty($baseMenuLinks)):
                                foreach ($baseMenuLinks as $item):
                                    if ($item->item_visibility == 1 && $item->item_location == "footer"):?>
                                        <li><a href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?> </a></li>
                                    <?php endif;
                                endforeach;
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="scrollup"><i class="icon-arrow-up"></i></a>
<?php if (empty(helperGetCookie('cks_warning')) && $baseSettings->cookies_warning): ?>
    <div class="cookies-warning">
        <button type="button" aria-label="close" class="close" onclick="closeCookiesWarning();">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
        <div class="text">
            <?= $baseSettings->cookies_warning_text; ?>
        </div>
        <button type="button" class="btn btn-md btn-block btn-custom" aria-label="close" onclick="closeCookiesWarning();"><?= trans("accept_cookies"); ?></button>
    </div>
<?php endif; ?>
<script src="<?= base_url($assetsPath . '/js/jquery-3.6.1.min.js'); ?> "></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
<script src="<?= base_url($assetsPath . '/js/plugins-2.4.2.js'); ?> "></script>
<script src="<?= base_url($assetsPath . '/js/script-2.4.min.js'); ?> "></script>
<script>$("form[method='post']").append("<input type='hidden' name='sys_lang_id' value='<?= $activeLang->id; ?>'>");</script>
<?= loadView('partials/_js_footer'); ?>
<?php if ($generalSettings->pwa_status == 1): ?>
    <script>if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('<?= base_url('pwa-sw.js');?>').then(function (registration) {
                }, function (err) {
                    console.log('ServiceWorker registration failed: ', err);
                }).catch(function (err) {
                    console.log(err);
                });
            });
        } else {
            console.log('service worker is not supported');
        }</script>
<?php endif; ?>
<?= $generalSettings->adsense_activation_code; ?>
<?= $generalSettings->google_analytics; ?>
<?= $generalSettings->custom_footer_codes; ?>
</body>
</html>
<?php if (!empty($isPage404)): exit(); endif; ?>