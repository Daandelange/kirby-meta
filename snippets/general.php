<title><?= $meta->title()->html() ?></title>

<?php if ($meta->description()->isNotEmpty()): ?>
    <meta name="description" content="<?= $meta->description()->html() ?>">
<?php endif ?>

<?php if ($themeColor = \FabianMichael\Meta\Helper::themeColor()): ?>
    <meta name="theme-color" content="<?= html($themeColor) ?>">
<?php endif ?>

<?php
foreach ($meta->alternateLanguages() as $alternate) {
    echo Kirby\Toolkit\Html::tag('link', null, $alternate). PHP_EOL;
}