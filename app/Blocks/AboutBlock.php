<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class AboutBlock extends Block
{
    public $name = 'About Block';
    public $description = 'Seção "Quem somos".';
    public $category = 'theme';
    public $icon = 'info';

    public function with(): array
    {
        return [
            'title' => get_field('title') ?: 'Quem somos',
            'content' => get_field('content') ?: '<p>Somos um escritório especializado em direitos previdenciários.</p>',
            'cta_text' => get_field('cta_text') ?: 'Fale conosco',
            'image' => get_field('image') ?: null,
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('about_block');

        $fields
            ->addText('title')
            ->addWysiwyg('content')
            ->addText('cta_text')
            ->addImage('image');

        return $fields->build();
    }
}
