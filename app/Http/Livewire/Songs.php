<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Songs extends Component
{
    public $songs;
    public function getSongs()
    {
        $this->songs = Http::get(env('API_URL').'/api/v1/songs')->json();
    }

    public function render()
    {
        return view('livewire.songs');
    }
}
