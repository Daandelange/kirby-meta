<?php

use Kirby\Cms\Html;

foreach ($meta->social() as $tag) {
    echo Html::tag('meta', '', $tag, $indentation?$indentation['string']:'', $indentation?$indentation['level']:0) . PHP_EOL;
}
