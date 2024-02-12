<x-layout>
    {{-- Header Start --}}
    <header class="container">
        <div class="header" id="header">
            <div class="title">
                <a href="/">AnimeSongList</a>
            </div>
            @include('partials._search')
        </div>
        @include('partials._search-mobile')
    </header>
    {{-- Header End --}}

    {{-- Bar Start --}}
    <x-bar>
        @if(str_contains($bar_title,'Search'))
            <div class="bar">
                <div class="bar-text">
                    <p>{{$bar_title}}</p>
                </div>
            </div>
        @else
            <div class="bar">
                <div class="bar-text">
                    <p>{{$bar_title}}</p>
                </div>
                @include('partials._arrow')
            </div>
            @include('partials._select-season')
        @endif
    </x-bar>
    {{-- Bar End --}}
    
    {{-- Main Content Start --}}
    <main class="container">
        <div class="catalog-container">
            
            @if(count($anime_list) == 0)
            <p>No anime found</p>
            @else

            @foreach($anime_list as $anime)
                <x-card :anime="$anime" />
            @endforeach

            @endif

        </div>
    </main>
    {{-- Main Content End --}}
</x-layout>