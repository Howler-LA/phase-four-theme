<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Careers extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $careers = Builder::make('careers');

        $careers
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $careers;
    }
}
