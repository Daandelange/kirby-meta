<?php echo isset($indentation)?$indentation['computed']:'';
?><meta name="robots" content="<?= esc($meta->robots(), 'attr') ?>">
<?php if ($kirby->option('fabianmichael.meta.robots.canonical') !== false):
echo isset($indentation)?$indentation['computed']:'';
?><link rel="canonical" href="<?= esc($meta->canonicalUrl(), 'attr') ?>">
<?php endif ?>
