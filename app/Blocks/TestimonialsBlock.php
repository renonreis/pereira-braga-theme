<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class TestimonialsBlock extends Block
{
    public $name = 'Testimonials Block';
    public $description = 'Avaliações do Google dos clientes.';
    public $category = 'theme';
    public $icon = 'star-filled';

    public function with(): array
    {
        return [
            'title' => get_field('title') ?: 'O que nossos clientes disseram',
            'subtitle' => get_field('subtitle') ?: 'Veja as avaliações de quem já contou com a nossa ajuda.',
            'testimonials' => get_field('testimonials') ?: [
                ['name' => 'Jaqueline Ramos', 'rating' => 5, 'text' => 'Atendimento excelente! Me ajudaram em todas as etapas do processo.', 'avatar' => null],
                ['name' => 'Carlos Souza', 'rating' => 5, 'text' => 'A equipe é incrível. Conseguiram resolver meu problema de forma ágil.', 'avatar' => null],
                ['name' => 'Maria Oliveira', 'rating' => 5, 'text' => 'Muito atenciosos e profissionais. Recomendo fortemente.', 'avatar' => null],
            ],
        ];
    }

    public function fields(): array
    {
        $fields = Builder::make('testimonials_block');

        $fields
            ->addText('title')
            ->addTextarea('subtitle')
            ->addRepeater('testimonials')
                ->addText('name')
                ->addNumber('rating', ['min' => 1, 'max' => 5, 'default_value' => 5])
                ->addTextarea('text')
                ->addImage('avatar')
            ->endRepeater();

        return $fields->build();
    }
}
