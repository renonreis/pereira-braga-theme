<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class AlertBlock extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Alert Block';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A custom alert block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'theme';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'warning';

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'type' => get_field('type') ?: 'info',
            'message' => get_field('message') ?: 'This is an alert.',
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('alert_block');

        $fields
            ->addSelect('type', [
                'label' => 'Alert Type',
                'choices' => [
                    'info' => 'Info',
                    'success' => 'Success',
                    'caution' => 'Caution',
                    'warning' => 'Warning',
                ],
                'default_value' => 'info',
            ])
            ->addText('message', [
                'label' => 'Alert Message',
                'default_value' => 'This is an alert.',
            ]);

        return $fields->build();
    }
}
