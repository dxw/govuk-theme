<?php

namespace Dxw\GovukTheme\Theme;

class Tables implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        add_filter('render_block', [$this, 'useGovukMarkup'], 10, 2);
    }

    public function useGovukMarkup($blockContent, $block)
    {
        if ($block['blockName'] === 'core/table') {
            $blockContent = $this->replaceMarkup($blockContent);
        }
        return $blockContent;
    }

    private function replaceMarkup($blockContent)
    {
        $elementReplacements = $this->getElementReplacements();
        foreach ($elementReplacements as $element => $replacement) {
            $blockContent = str_replace($element, $replacement, $blockContent);
        }
        return $blockContent;
    }

    private function getElementReplacements()
    {
        return [
            '<table>' => '<table class="' . apply_filters('govuk_theme_class', 'govuk-table') . '">',
            '<caption>' => '<caption class="' . apply_filters('govuk_theme_class', 'govuk-table__caption') . '">',
            '<thead>' => '<thead class="' . apply_filters('govuk_theme_class', 'govuk-table__head') . '">',
            '<tr>' => '<tr class="' . apply_filters('govuk_theme_class', 'govuk-table__row') . '">',
            '<th>' => '<th class="' . apply_filters('govuk_theme_class', 'govuk-table__header') . '">',
            '<tbody>' => '<tbody class="' . apply_filters('govuk_theme_class', 'govuk-table__body') . '">',
            '<td>' => '<td class="' . apply_filters('govuk_theme_class', 'govuk-table__cell') . '">'
        ];
    }
}
