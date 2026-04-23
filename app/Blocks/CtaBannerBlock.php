<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class CtaBannerBlock extends Block
{
    public $name = 'CTA Banner Block';
    public $slug = 'cta-banner-block';
    public $description = 'Banner de chamada para ação na parte inferior da página.';
    public $category = 'theme';
    public $icon = 'megaphone';

    public function with(): array
    {
        return [
            'title' => get_field('title') ?: 'Você pode ter um benefício e não saber',
            'subtitle' => get_field('subtitle') ?: 'Nossa equipe está pronta para analisar seu caso e buscar os melhores direitos.',
            'button_text' => get_field('button_text') ?: 'Fale com um especialista',
            'button_link' => get_field('button_link') ?: '#',
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('cta_banner_block');

        $fields
            ->addText('title')
            ->addText('subtitle')
            ->addText('button_text')
            ->addUrl('button_link');

        return $fields->build();
    }
}
