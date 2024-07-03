<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Config extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $config = Builder::make('config');

        $config
            ->addTab('config')
            ->addGroup('config')
                ->addTrueFalse('disable',['instructions'=>'Disable component'])
            ->endGroup();

        return $config;
    }
}
