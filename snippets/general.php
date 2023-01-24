<title><?= $meta->title()->html() ?></title>

<?php if ($meta->description()->isNotEmpty()): ?>
    <meta name="description" content="<?= $meta->description()->escape('attr') ?>">
<?php endif ?>

<?php if ($themeColor = \FabianMichael\Meta\Helper::themeColor()): ?>
    <meta name="theme-color" content="<?= esc($themeColor, 'attr') ?>">
<?php endif ?>

<?php
if (kirby()->multilang() && kirby()->languages()->count() > 1) {
    foreach (kirby()->languages() as $lang) {
        // Note: x-default defines the entry page for unlisted languages. It doesn't define the default language.
		if ($lang->isDefault()) {
            echo Kirby\Toolkit\Html::tag('link', null, [
                'rel' => 'alternate',
                'hreflang' => 'x-default',
                'href' => \FabianMichael\Meta\Helper::urlForLanguageDetection($page),
            ])."\n";
        }
        // Don't provide alternate for current lang
        if ($lang->code() === kirby()->language()->code()) {
            continue;
        }

        // Only provide links for pages that have actual translation content
        if ($page->translation($lang->code())->exists() === true) {
            echo Kirby\Toolkit\Html::tag('link', null, [
                'rel' => 'alternate',
                'hreflang' => $lang->locale(LC_ALL),
                'href' => $page->url($lang->code()),
            ])."\n";
        }
    }
}