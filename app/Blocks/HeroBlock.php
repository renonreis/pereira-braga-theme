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
            'subtitle' => get_field('subtitle') ?: 'Encontramos a solução ideal para você.',
            'cta_text' => get_field('cta_text') ?: 'Como podemos ajudar hoje? →',
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
            ->addText('title')
            ->addText('subtitle')
            ->addText('cta_text')
            ->addRepeater('cards')
                ->addText('title')
                ->addText('category')
                ->addImage('image')
            ->endRepeater();

        return $fields->build();
    }
}
