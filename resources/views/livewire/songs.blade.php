<div>
    @if(session()->has('error'))
        <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif
    <button type="button" class="rounded-full bg-sky-500/100 px-2 py-2 text-black" wire:click='getSongs'>Get
        Songs
    </button>
    <div wire:loading>
        Processing...
    </div>
    
    @if ($this->songs)
        <div class="bg-white rounded-lg p-6 shadow-xl">
            <pre>
                {{ print_r($this->songs) }}
            </pre>
        </div>
    @endif
</div>
