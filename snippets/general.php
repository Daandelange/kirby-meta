<?php echo isset($indentation)?$indentation['computed']:'';
?><title><?= $meta->title()->html() ?></title>
<?php if ($meta->description()->isNotEmpty()):
echo isset($indentation)?$indentation['computed']:'';
?><meta name="description" content="<?= $meta->description()->escape('attr') ?>">
<?php endif ?>
<?php if ($themeColor = \FabianMichael\Meta\Helper::themeColor()):
echo isset($indentation)?$indentation['computed']:'';
?><meta name="theme-color" content="<?= esc($themeColor, 'attr') ?>">
<?php endif ?>
