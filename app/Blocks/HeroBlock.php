<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class HeroBlock extends Block
{
    public $name = 'Hero Block';
    public $description = 'Seção inicial com título e cards de destaque.';
    public $category = 'theme';
    public $icon = 'cover-image';

    public function with(): array
    {
        return [
            'title' => get_field('title') ?: 'Transformar realidades.',
            'subtitle' => get_field('subtitle') ?: 'Devolvendo dignidade a famílias vulneráveis e trabalhadores acidentados.',
            'cta_link' => get_field('cta_link') ?: ['url' => '#', 'title' => 'Como podemos ajudar hoje?', 'target' => ''],
            'cards' => get_field('cards') ?: [
                ['title' => 'Auxílio Acidente', 'category' => 'INSS', 'image' => null],
                ['title' => 'Benefício Autista', 'category' => 'CRIANÇA', 'image' => null],
            ]
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('hero_block');

        $fields
            ->addWysiwyg('title', [
                'label' => 'Título',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addWysiwyg('subtitle', [
                'label' => 'Subtítulo',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addLink('cta_link', [
                'label' => 'CTA Link'
            ])
            ->addRepeater('cards')
                ->addText('title')
                ->addText('category')
                ->addImage('image')
            ->endRepeater();

        return $fields->build();
    }
}
