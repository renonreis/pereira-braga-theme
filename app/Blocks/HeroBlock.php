<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class HeroBlock extends Block
{
    public $name = 'Hero Block';
    public $description = 'Seção inicial com título e cards de destaque.';
    public $category = 'pereira-braga-blocks';
    public $icon = 'cover-image';

    public function with(): array
    {
        return [
            'title' => get_field('title'),
            'subtitle' => get_field('subtitle'),
            'suffix' => get_field('suffix'),
            'cards' => get_field('cards'),
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
            ->addText('suffix', [
                'label' => 'Texto de destaque',
                'tabs' => 'visual',
                'toolbar' => 'simple',
                'media_upload' => 0
            ])
            ->addRepeater('cards', [
                'label' => 'Cards de Serviços',
                'button_label' => 'Adicionar card',
                'layout' => 'block',
            ])
                ->addText('title', [
                    'label' => 'Título',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addText('category', [
                    'label' => 'Categoria',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addSelect('variant', [
                    'label' => 'Variante',
                    'choices' => [
                        'blue' => 'Azul (INSS)',
                        'red' => 'Vermelho (BCP/LOAS)',
                    ],
                ])
                ->addGroup('button', ['label' => 'Botão'])
                    ->addText('text', [
                        'label' => 'Texto',
                        'tabs' => 'visual',
                        'toolbar' => 'simple',
                        'media_upload' => 0
                    ])
                    ->addPageLink('url', [
                        'label' => 'Link da Página',
                        'tabs' => 'visual',
                        'allow_null' => 1,
                        'allow_archives' => 0,
                        'post_type' => ['page'],
                    ])
                ->endGroup()
                ->addImage('image', [
                    'label' => 'Imagem de Fundo',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
            ->endRepeater();

        return $fields->build();
    }
}

/**
 * Remove favicon from theme options.
 */
add_filter('get_site_icon_url', '__return_false');
