<?php

$meta = $page->meta();
$indentLevel = (int) $kirby->option('fabianmichael.meta.header.indentation.level', 2);
$indentString = (string) $kirby->option('fabianmichael.meta.header.indentation.string', '  ');
$data = [
    'meta' => $meta,
    'indentation' => [
        'computed' => str_repeat($indentString, $indentLevel),
        'level' => $indentLevel,
        'string' => $indentString,
    ],
];

snippet('meta/general', $data);

if ($kirby->option('fabianmichael.meta.robots') !== false) {
    snippet('meta/robots', $data);
}

if ($kirby->option('fabianmichael.meta.social') !== false) {
    snippet('meta/social', $data);
}

if ($kirby->option('fabianmichael.meta.schema') !== false) {
    snippet('meta/schema', $data);
}
