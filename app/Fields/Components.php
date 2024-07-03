<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

use App\Fields\Partials\Careers;
use App\Fields\Partials\ImageText;
use App\Fields\Partials\NestedContent;
use App\Fields\Partials\People;

class Components extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $components = Builder::make('components',[
            'hide_on_screen' => ['the_content']
        ]);

        $components
            ->setLocation('page_template', '==', 'template-custom.blade.php');

        $components
            ->addFlexibleContent('components', ['button_label' => 'Add Block'])
                ->addLayout($this->get(Careers::class))
                ->addLayout($this->get(ImageText::class))
                ->addLayout($this->get(NestedContent::class))
                ->addLayout($this->get(People::class))
            ->endFlexibleContent();

        return $components->build();
    }
}
