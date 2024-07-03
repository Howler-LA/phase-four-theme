<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class People extends Composer
{

    protected static $views = [
        'flexible.layout-people',
    ];

    private function getPosts() {
        return new \WP_Query([
            'post_type'         => 'any',
            'posts_per_page'    => 4,
            'post__in'          => get_sub_field('people'),
            'orderby'           => 'post__in',
        ]);
    }

    public function with()
    {
        return [
            'query' => $this->getPosts(),
        ];
    }
}
