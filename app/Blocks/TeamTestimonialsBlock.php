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
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addRepeater('team_members', [
                    'label' => 'Equipe',
                    'button_label' => 'Adicionar',
                    'layout' => 'block',
                ])
                    ->addImage('image', [
                        'label' => 'Imagem',
                        'return_format' => 'string',
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
                    'tabs' => 'visual',
                    'toolbar' => 'simple',
                    'media_upload' => 0
                ])
                ->addRepeater('testimonials_items', [
                    'label' => 'Depoimentos',
                    'button_label' => 'Adicionar',
                    'layout' => 'block',
                ])
                    ->addText('author', [
                        'label' => 'Autor',
                        'tabs' => 'visual',
                        'toolbar' => 'simple',
                        'media_upload' => 0
                    ])
                    ->addDatePicker('date', [
                        'label' => 'Data',
                        'tabs' => 'visual',
                        'dateFormat' => 'd/m/Y',
                        'displayFormat' => 'd/m/Y',
                        'firstDay' => 1,
                        'allowInput' => true,
                        'returnFormat' => 'd/m/Y',
                    ])
                    ->addSelect('rating', [
                        'label' => 'Avaliação',
                        'choices' => range(1, 5),
                        'default_value' => 5,
                    ])
                    ->addTextArea('quote', [
                        'label' => 'Depoimento',
                        'tabs' => 'visual',
                        'toolbar' => 'simple',
                        'media_upload' => 0
                    ])
                    ->addUrl('url', [
                        'label' => 'URL',
                        'tabs' => 'visual',
                        'toolbar' => 'simple',
                        'media_upload' => 0
                    ])
                ->endRepeater()
            ->endGroup();

        return $fields->build();
    }
}
