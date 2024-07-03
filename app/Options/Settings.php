<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class Settings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Settings | Options';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $settings = Builder::make('settings');

        $settings
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $settings->build();
    }
}
