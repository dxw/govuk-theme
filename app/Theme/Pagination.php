<?php

namespace Dxw\GovukTheme\Theme;

class Pagination
{
    public function __construct(\Dxw\Iguana\Theme\Helpers $helpers)
    {
        $helpers->registerFunction('pagination', [$this, 'pagination']);
    }

    public function pagination($q = null, $return = false)
    {
        global $wp_query;
        global $paged;

        if ($q === null) {
            $q = $wp_query;
        }

        if (count($q->posts) === 1) {
            return;
        }

        $args = $q->query;

        $max = intval($q->max_num_pages);
        $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

        // Stop execution if there's only 1 page
        if ($max <= 1) {
            return;
        }

        $pagination = new \Dxw\Pagination($paged, $max, 2, 1, function ($n) use ($args) {
            $args['paged'] = $n;

            return add_query_arg($args, get_bloginfo('url'));
        });

        if ($return) {
            return $pagination->render();
        } else {
            echo $pagination->render();
        }
    }
}
