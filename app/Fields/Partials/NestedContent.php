<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class NestedContent extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $nestedContent = Builder::make('nested_content');

        $nestedContent
            ->addFields($this->get(Content::class))
            ->addFields($this->get(Config::class))
        ;

        return $nestedContent;
    }
}
