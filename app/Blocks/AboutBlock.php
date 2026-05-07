<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class AboutBlock extends Block
{
    public $name = 'About Block';
    public $description = 'Seção "Quem somos".';
    public $category = 'pereira-braga-blocks';
    public $icon = 'info';

    public function with(): array
    {
        return [
            'image' => get_field('image'),
            'title' => get_field('title'),
            'content' => get_field('content'),
            'button' => get_field('button'),
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('about_block');

        $fields
            ->addImage('image', [
                'label' => 'Imagem',
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
            ->addWysiwyg('content', [
                'label' => 'Conteúdo',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addGroup('button', ['label' => 'Botão'])
                ->addText('text', [
                    'label' => 'Texto',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addUrl('url', [
                    'label' => 'URL',
                    'placeholder' => 'https://www.example.com',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
            ->endGroup();

        return $fields->build();
    }
}
