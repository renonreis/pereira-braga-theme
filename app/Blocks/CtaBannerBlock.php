<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class CtaBannerBlock extends Block
{
    public $name = 'CTA Banner Block';
    public $slug = 'cta-banner-block';
    public $description = 'Banner de chamada para ação na parte inferior da página.';
    public $category = 'pereira-braga-blocks';
    public $icon = 'megaphone';

    public function with(): array
    {
        return [
            'title' => get_field('title'),
            'subtitle' => get_field('subtitle'),
            'button_text' => get_field('button_text'),
            'button_link' => get_field('button_link'),
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('cta_banner_block');

        $fields
            ->addWysiwyg('title', [
                'label' => 'Título',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addText('subtitle', [
                'label' => 'Subtítulo',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addText('button_text', [
                'label' => 'Texto do botão',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addUrl('button_link', [
                'label' => 'Link do botão',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ]);

        return $fields->build();
    }
}
