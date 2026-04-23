<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class TeamBlock extends Block
{
    public $name = 'Team Block';
    public $description = 'Seção de membros da equipe.';
    public $category = 'theme';
    public $icon = 'groups';

    public function with(): array
    {
        return [
            'title' => get_field('title') ?: 'Nossa equipe',
            'subtitle' => get_field('subtitle') ?: 'Uma equipe especializada e comprometida em buscar o seu direito.',
            'members' => get_field('members') ?: [
                ['name' => 'Ana Victória', 'role' => 'CEO', 'image' => null],
                ['name' => 'Arthur Jurki', 'role' => 'ADVOGADO', 'image' => null],
                ['name' => 'Danielle Malheiros', 'role' => 'ADVOGADA', 'image' => null],
                ['name' => 'Gabriel Marinho', 'role' => 'ADVOGADO', 'image' => null],
            ],
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('team_block');

        $fields
            ->addText('title')
            ->addTextarea('subtitle')
            ->addRepeater('members')
                ->addText('name')
                ->addText('role')
                ->addImage('image')
            ->endRepeater();

        return $fields->build();
    }
}
