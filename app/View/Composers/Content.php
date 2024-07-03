<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Content extends Composer
{
    protected static $views = [
        'partials/*',
        'components/*',
        'flexible/*',
    ];

    public function with()
    {
        return [
            'content' => get_sub_field('content'),
            'config' => get_sub_field('config'),
        ];
    }
}
