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
            'background_image' => get_field('background_image'),
            'title' => get_field('title'),
            'items' => get_field('items'),
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('stats_block');

        $fields
            ->addImage('background_image', [
                'label' => 'Imagem de Fundo',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addWysiwyg('title', [
                'label' => 'Título',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addRepeater('items', [
                'label' => 'Estatísticas',
                'button_label' => 'Adicionar',
                'layout' => 'block',
            ])
                ->addNumber('number', [
                    'label' => 'Número',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addText('label', [
                    'label' => 'Label',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
            ->endRepeater();

        return $fields->build();
    }
}
