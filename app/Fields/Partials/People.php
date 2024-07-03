<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class People extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $people = Builder::make('people');

        $people
            ->addFields($this->get(Content::class))
            ->addTab('people')
            ->addRelationship('people')
            ->addFields($this->get(Config::class))
        ;

        return $people;
    }
}
