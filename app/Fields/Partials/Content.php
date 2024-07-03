<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Content extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $content = Builder::make('content');

        $content
            ->addTab('content')
            ->addGroup('content')
                ->addText('kicker')
                ->addText('headline')
                ->addWysiwyg('copy')
                ->addLink('link')
            ->endGroup();

        return $content;
    }
}
