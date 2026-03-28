<?php

namespace App\Livewire;

use Livewire\Component;

class Skills extends Component
{
    public string $activeCategory = 'all';

    // Devicon CDN base URL
    private string $cdn = 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/';

    public array $categories = [
        'all'      => 'All',
        'backend'  => 'Backend',
        'frontend' => 'Frontend',
        'tools'    => 'Tools',
    ];

    public function skills(): array
    {
        $cdn = $this->cdn;

        return [
            // Row 1 — Backend
            ['name' => 'Laravel',    'icon' => $cdn.'laravel/laravel-original.svg',         'category' => 'backend',  'invert' => false],
            ['name' => 'PHP',        'icon' => $cdn.'php/php-original.svg',                 'category' => 'backend',  'invert' => false],
            ['name' => 'MySQL',      'icon' => $cdn.'mysql/mysql-original.svg',             'category' => 'backend',  'invert' => false],
            ['name' => 'SQLite',     'icon' => $cdn.'sqlite/sqlite-original.svg',           'category' => 'backend',  'invert' => false],
            ['name' => 'Python',     'icon' => $cdn.'python/python-original.svg',           'category' => 'backend',  'invert' => false],

            // Row 2 — Frontend
            ['name' => 'JavaScript', 'icon' => $cdn.'javascript/javascript-original.svg',  'category' => 'frontend', 'invert' => false],
            ['name' => 'HTML',       'icon' => $cdn.'html5/html5-original.svg',            'category' => 'frontend', 'invert' => false],
            ['name' => 'CSS',        'icon' => $cdn.'css3/css3-original.svg',              'category' => 'frontend', 'invert' => false],
            ['name' => 'React',      'icon' => $cdn.'react/react-original.svg',            'category' => 'frontend', 'invert' => false],
            ['name' => 'Tailwind',   'icon' => $cdn.'tailwindcss/tailwindcss-original.svg','category' => 'frontend', 'invert' => false],

            // Row 3 — More
            ['name' => 'Next.js',    'icon' => $cdn.'nextjs/nextjs-original.svg',          'category' => 'frontend', 'invert' => true],
            ['name' => 'Alpine.js',  'icon' => $cdn.'alpinejs/alpinejs-original.svg',      'category' => 'frontend', 'invert' => false],
            ['name' => 'Git',        'icon' => $cdn.'git/git-original.svg',                'category' => 'tools',    'invert' => false],
            ['name' => 'GitHub',     'icon' => $cdn.'github/github-original.svg',          'category' => 'tools',    'invert' => true],
            ['name' => 'R',          'icon' => $cdn.'r/r-original.svg',                   'category' => 'tools',    'invert' => false],
        ];
    }

    public function setCategory(string $category): void
    {
        $this->activeCategory = $category;
    }

    public function getFilteredSkillsProperty(): array
    {
        $skills = $this->skills();

        if ($this->activeCategory === 'all') {
            return $skills;
        }

        return array_values(array_filter(
            $skills,
            fn ($s) => $s['category'] === $this->activeCategory
        ));
    }

    // Returns skills chunked into pyramid rows: [7, 5, 3] or balanced for "all"
    public function getPyramidRowsProperty(): array
    {
        $all = $this->skills();
        $count = count($all);

        // Build rows narrowing from wider to smaller, centered
        $rowSizes = [];
        $remaining = $count;
        $max = 7;

        while ($remaining > 0) {
            $take = min($max, $remaining);
            $rowSizes[] = $take;
            $remaining -= $take;
            $max = max(3, $max - 2);
        }

        $rows = [];
        $offset = 0;
        foreach ($rowSizes as $size) {
            $rows[] = array_slice($all, $offset, $size);
            $offset += $size;
        }

        return $rows;
    }

    public function render()
    {
        return view('livewire.skills');
    }
}
