<?php

namespace App\Http\Livewire;

use Exception;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Songs extends Component
{
    public $songs = [];
    public function getSongs()
    {
        try {
            $this->songs = Http::get(env('API_URL') . '/api/v1/songs')->json();
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.songs');
    }
}
