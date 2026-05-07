<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class TeamTestimonialsBlock extends Block
{
    public $name = 'Team Testimonials Block';
    public $description = 'Seção de membros da equipe e avaliações de clientes.';
    public $category = 'pereira-braga-blocks';
    public $icon = 'groups';

    public function with(): array
    {
        return [
            'team' => get_field('team'),
            'testimonials' => get_field('testimonials'),
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('team_testimonials_block');

        $fields
            ->addGroup('team', [
                'label' => 'Equipe',
                'layout' => 'block',
            ])
                ->addWysiwyg('title', [
                    'label' => 'Título',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addTextarea('subtitle', [
                    'label' => 'Subtítulo',
                    'new_lines' => '',
                ])
                ->addRepeater('team_members', [
                    'label' => 'Equipe',
                    'button_label' => 'Adicionar',
                    'layout' => 'block',
                ])
                    ->addImage('image', [
                        'label' => 'Imagem',
                        'return_format' => 'url',
                    ])
                    ->addText('role', [
                        'label' => 'Cargo',
                    ])
                    ->addText('name', [
                        'label' => 'Nome',
                    ])
                ->endRepeater()
            ->endGroup()
            ->addGroup('testimonials', [
                'label' => 'Depoimentos',
                'layout' => 'block',
            ])
                ->addWysiwyg('title', [
                    'label' => 'Título',
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addTextarea('subtitle', [
                    'label' => 'Subtítulo',
                    'new_lines' => '',
                ])
                ->addRepeater('testimonials_items', [
                    'label' => 'Depoimentos',
                    'button_label' => 'Adicionar',
                    'layout' => 'block',
                ])
                    ->addText('author', [
                        'label' => 'Autor',
                    ])
                    ->addDatePicker('date', [
                        'label' => 'Data',
                        'display_format' => 'd/m/Y',
                        'return_format' => 'd/m/Y',
                        'first_day' => 1,
                    ])
                    ->addSelect('rating', [
                        'label' => 'Avaliação',
                        'choices' => [
                            '1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                            '5' => '5',
                        ],
                        'default_value' => '5',
                    ])
                    ->addTextarea('quote', [
                        'label' => 'Depoimento',
                        'rows' => 4,
                    ])
                    ->addUrl('url', [
                        'label' => 'URL',
                    ])
                ->endRepeater()
            ->endGroup();

        return $fields->build();
    }
}
