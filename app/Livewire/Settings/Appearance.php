<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class Appearance extends Component
{
    public $textColor;

    public function mount()
    {
        $this->textColor = auth()->check() ? auth()->user()->text_color : 'zinc';
    }

    
    public function updateTextColor(string $color)
    {
        $this->textColor = $color;

        $this->validate([
            'textColor' => 'required|string|max:50',
        ]);

        if (auth()->check()) {
            auth()->user()->update(['text_color' => $this->textColor]);
        }

        $this->dispatchBrowserEvent('text-color-changed', ['color' => $color]);
        session()->flash('message', 'Text color updated.');
    }

    public function render()
    {
        return view('livewire.settings.appearance');
    }
}
