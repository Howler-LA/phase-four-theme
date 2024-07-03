<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class ImageText extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $imageText = Builder::make('image_text');

        $imageText
            ->addFields($this->get(Content::class))
            ->addFields($this->get(Config::class))
        ;

        return $imageText;
    }
}
