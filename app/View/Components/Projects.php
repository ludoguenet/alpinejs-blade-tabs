<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Projects extends Component
{
    public array $projects;
    public array $tags;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->projects = [
            [
                'title' => 'Projet 1',
                'tags' => [
                    'Tag 1',
                    'Tag 2'
                ]
            ],
            [
                'title' => 'Projet 2',
                'tags' => [
                    'Tag 3',
                    'Tag 6'
                ]
            ],
            [
                'title' => 'Projet 3',
                'tags' => [
                    'Tag 4',
                    'Tag 1'
                ]
            ],
            [
                'title' => 'Projet 4',
                'tags' => [
                    'Tag 3',
                ]
            ],
            [
                'title' => 'Projet 5',
                'tags' => [
                    'Tag 2',
                    'Tag 5'
                ]
            ],
        ];

        $this->tags = collect($this->projects)
            ->pluck('tags')
            ->flatten()
            ->unique()
            ->sort()
            ->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects');
    }
}
