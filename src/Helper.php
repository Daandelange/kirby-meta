<?php

namespace FabianMichael\Meta;

use Kirby\Cms\App;
use Kirby\Cms\Page;

class Helper
{
    public static function toggleFieldType(): string
    {
        static $type;

        if (! is_null($type)) {
            return $type;
        }

        if (version_compare(App::version(), '3.7.0-rc.1', '>=')) {
            return $type = 'toggles';
        }

        if (App::plugin('fabianmichael/kirby-multi-toggle-field')) {
            return $type = 'multi-toggle';
        }

        return $type = 'select';
    }

    public static function themeColor(): ?string
    {
        return kirby()->apply('meta.theme.color', [
            'color' => option('fabianmichael.meta.theme.color'),
        ], 'color');
    }

    public static function urlForLanguageDetection(Page $page): string
    {
        $paramXDefault = kirby()->option('fabianmichael.meta.languageChooserBaseUrl', null);
        if (is_string($paramXDefault)===true) {
            return $paramXDefault.'/'.$page->slug();
        }

        // Use kirby's automatic language chooser
        // Note: languages.detect is incompatible with custom language urls
        $isUsingCustomUrls = kirby()->language()->url() === kirby()->url();
        $languageDetectionIsEnabled = kirby()->option('languages.detect', false) === true;
        if ($languageDetectionIsEnabled && $isUsingCustomUrls) {
            return $page->urlForLanguage('');
        }
        else {
            // Ideally provide an auto-select link, here we provide a link to the "most common" language
            $defaultInternationalLang = kirby()->languages()->has('en') ? kirby()->language('en') : kirby()->defaultLanguage();
            return $page->url( $defaultInternationalLang->code() );
        }
    }
}
