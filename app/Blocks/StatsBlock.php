<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class StatsBlock extends Block
{
    public $name = 'Stats Block';
    public $description = 'Números e estatísticas em destaque.';
    public $category = 'pereira-braga-blocks';
    public $icon = 'chart-bar';

    public function with(): array
    {
        return [
            'background_image' => get_field('background_image') ?: null,
            'items' => get_field('items') ?: [
                ['number' => '+8', 'label' => 'Anos de Experiência'],
                ['number' => '+1500', 'label' => 'Vidas transformadas'],
                ['number' => '+472', 'label' => 'Avaliações no Google'],
            ],
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('stats_block');

        $fields
            ->addImage('background_image')
            ->addRepeater('items')
                ->addText('number')
                ->addText('label')
            ->endRepeater();

        return $fields->build();
    }
}
