<?php

use FabianMichael\Meta\PageMeta;
use Kirby\Cms\App as Kirby;
use Kirby\Cms\Page;

return [
    // 'meta.load:after' => function (array $metadata, Page $page) {
    //     // set `thumbnail.png` as default share image for all pages,
    //     // if not other image was already set by a page model
    //     if (empty($metadata['og_image']) === true) {
    //         $metadata['og_image'] = $page->image('thumbnail.png');
    //     }
    //     return $metadata;
    // },

    // 'meta.jsonld:after' => function (array $json, PageMeta $meta, Page $page) {
    //     // add breadcrumb to JSON-LD graph
    //     $items = [];

    //     $parents = $page->parents();

    //     if ($parents->count() === 0) {
    //         return $json;
    //     }

    //     $i = 0;

    //     foreach ($parents->flip() as $parent) {
    //         $items[] = [
    //             '@type' => 'ListItem',
    //             'position' => ++$i,
    //             'item' => [
    //                 '@id' => $parent->url(),
    //                 'name' => $parent->title()->toString(),
    //             ],
    //         ];
    //     }

    //     $json['@graph'][] = [
    //         '@type' => 'BreadcrumbList',
    //         'itemListElement' => $items,
    //     ];

    //     return $json;
    // },

    // 'meta.social:after' => function (
    //     array $social,
    //     PageMeta $meta,
    //     Page $page
    // ) {
    //     // add first video file of page to OpenGraph markup
    //     if ($page->hasVideos()) {
    //         $social[] = [
    //             'property' => 'og:video',
    //             'content'  => $page->videos()->first()->url(),
    //         ];
    //     }
    //     return $social;
    // },

    // 'meta.sitemap:before' => function (
    //     Kirby $kirby,
    //     DOMDocument $doc,
    //     DOMElement $root
    // ) {
    //     $root->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:image', 'http://www.google.com/schemas/sitemap-image/1.1');
    // },

    // 'meta.sitemap.url' => function (
    //     Kirby $kirby,
    //     Page $page,
    //     PageMeta $meta,
    //     DOMDocument $doc,
    //     DOMElement $url
    // ) {
    //     foreach ($page->images() as $image) {
    //         $imageEl = $doc->createElement('image:image');
    //         $imageEl->appendChild($doc->createElement('image:loc', $image->url()));

    //         if ($image->alt()->isNotEmpty()) {
    //             $imageEl->appendChild($doc->createElement('image:loc', $image->alt()));
    //         }

    //         $url->appendChild($imageEl);
    //     }
    // },

    // 'meta.sitemap:after' => function (
    //     Kirby $kirby,
    //     DOMDocument $doc,
    //     DOMElement $root
    // ) {
    //     foreach ($root->getElementsByTagName('url') as $url) {
    //         if ($lastmod = $url->getElementsByTagName('lastmod')[0] ?? null) {
    //             // Remove lastmod date from sitemap entries.
    //             $url->removeChild($lastmod);
    //         }
    //     }
    // },

    // 'meta.alternateLanguages:after' => function (
    //     array $alternateLanguages,
    //     Page $page,
    //     PageMeta $meta,
    // ) {
    //     // Entries in $alternateLanguages have keys corresponding to the HTML attributes : <link key="value" />
    //     // Important: To be valid, the alternate language metatags need to be identical on all translations of the same page !
    //     // Read more: https://developers.google.com/search/docs/specialty/international/localized-versions#all-method-guidelines
    //     foreach($alternateLanguages as $langCode => $alternateLanguage){
    //         // Only provide links for pages that have actual translation content
    //         if (
    //              // Always leave x-default
    //             $alternateLanguage['hreflang']!=='x-default'
    //             // Always point to default language (translation()->exists() will return null as it's a Content and not a ContentTranslation)
    //             && $langCode!==$page->kirby()->defaultLanguage()->code()
    //             // Translation doesn't exist
    //             && $page->translation($langCode)->exists() === false
    //         ) {
    //             unset($alternateLanguages[$langCode]);
    //         }
    //     }
    //     return $alternateLanguages;
    // },
];
