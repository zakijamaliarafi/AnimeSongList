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
        <div class="bar">
            <div class="bar-text">
                <p>{{$anime->title}}</p>
            </div>
        </div>
    </x-bar>
    {{-- Bar End --}}
    
    {{-- Main Content Start --}}
    <main class="container">
        <div class="content">
            <div class="content-image">
                <img src="{{asset('images/solo.jpg')}}" alt="">
            </div>
            <div class="content-detail">
                <div class="content-theme">
                    <div id="op-theme" class="theme-title">
                        <p>Opening Theme</p>
                    </div>
                    <div class="theme-song">
                        <i class="fa-regular fa-circle-play fa-lg"></i>
                        <p>"LEveL" by SawanoHiroyuki[nZk]:TOMORROW X TOGETHER</p>
                    </div>
                </div>
                <div class="content-theme">
                    <div class="theme-title">
                        <p>Ending Theme</p>
                    </div>
                    <div class="theme-song">
                        <i class="fa-regular fa-circle-play fa-lg"></i>
                        <p>"request" by krage</p>
                    </div>
                </div>
            </div>

        </div>
    </main>
    {{-- Main Content End --}}
</x-layout>