<?php

namespace SGI\STL\Admin\Settings;

trait Fixes
{

    public function section_fixes()
    {

        add_settings_section(
            'stl_settings_fixes',
            __('Advanced Settings', 'srbtranslatin'),
            [&$this, 'callback_section_fixes'],
            'stl_settings'
        );
        
    }

    public function callback_section_fixes()
    {

        printf(
            '<p>%s</p>',
            __('Advanced settings control permalink and search settings', 'srbtranslatin')
        );

        add_settings_field(
            'stl_fixes_permalinks',
            __('Fix Permalinks', 'srbtranslatin'),
            [&$this, 'callback_option_permalinks'],
            'stl_settings',
            'stl_settings_fixes',
            $this->opts['fixes']['permalinks']
        );

        add_settings_field(
            'stl_fixes_search',
            __('Fix Search', 'srbtranslatin'),
            [&$this, 'callback_option_search'],
            'stl_settings',
            'stl_settings_fixes',
            $this->opts['fixes']['search']
        );

    }

    public function callback_option_permalinks($permalinks)
    {

        $wplang = get_locale();

        $already_cyrillic = ( ($wplang == 'sr_RS') || ($wplang == 'bs_BA') ) ? true : false;

        self::checkbox(
            $permalinks,
            'sgi/stl/opt[fixes][permalinks]',
            !$already_cyrillic,
            __('Transliterate permalinks to latin script', 'srbtranslatin'),
            __('Enable if you want to change cyrillic permalinks to latin', 'srbtranslatin')
        );

        if ($already_cyrillic) :

            printf(
                '<p class="description"><strong>%s</strong></p>',
                __(sprintf(
                    'This option is currently disabled because your current locale is set to %s which will automatically change permalnks',
                    $wplang
                ), 'srbtranslatin')
            );

        endif;

    }

    public function callback_option_search($search)
    {

        self::checkbox(
            $search,
            'sgi/stl/opt[fixes][search]',
            true,
            __('Enable search using latin script', 'srbtranslatin'),
            __('Enables searching for posts using both cyrillic and latin script', 'srbtranslatin')
        );

    }

}