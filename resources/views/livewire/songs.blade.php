<div>
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    <div class="p-6">
        <button type="button" class="rounded-full bg-sky-500/100 px-2 py-2 mt-2 text-black" wire:click='getSongs'>Fetch
            Songs
        </button>
        <div wire:loading>
            Processing...
        </div>
    
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Name</th>
                                    <th scope="col" class="px-6 py-4">Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($this->songs && count($this->songs) > 0)
                                    @foreach($this->songs as $song)
                                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $song['id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $song['name'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ number_format($song['duration'], 2) }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium text-center" colspan="4">No Data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
