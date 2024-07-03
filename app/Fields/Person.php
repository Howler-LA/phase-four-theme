<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Person extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $person = Builder::make('person',[
            'hide_on_screen' => ['the_content']
        ]);

        $person
            ->setLocation('post_type', '==', 'people');

        $person
            ->addGroup('content')
                ->addText('role')
                ->addWysiwyg('bio')
                ->addUrl('linkedin',['label'=>'LinkedIn URL'])
            ->endGroup();

        return $person->build();
    }
}
