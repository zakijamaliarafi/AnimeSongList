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
                <img src="{{$anime->poster ? asset('storage/' . $anime->poster) : asset('/images/no-image.jpg')}}" alt="">
            </div>
            <div class="content-detail">
                <div class="content-theme">
                    <div id="op-theme" class="theme-title">
                        <p>Opening Theme</p>
                    </div>
                    
                    @if (count($op_themes) == 0)
                    <div class="theme-song"> 
                        <p>No opening themes have been added to this title.</p>
                    </div>
                    @else
                    
                    @foreach($op_themes as $op_theme)
                    <div class="theme-song">
                        <a href="{{$op_theme->url}}" target="_blank">
                            <i class="fa-regular fa-circle-play fa-xl"></i>
                        </a>
                        <p>{{$op_theme->title . " by " . $op_theme->artist}}</p>
                    </div>
                    @endforeach
                    
                    @endif
                    
                </div>
                <div class="content-theme">
                    <div class="theme-title">
                        <p>Ending Theme</p>
                    </div>

                    @if (count($ed_themes) == 0)
                    <div class="theme-song"> 
                        <p>No ending themes have been added to this title.</p>
                    </div>
                    @else
                    
                    @foreach($ed_themes as $ed_theme)
                    <div class="theme-song">
                        <a href="{{$ed_theme->url}}" target="_blank">
                            <i class="fa-regular fa-circle-play fa-xl"></i>
                        </a>
                        <p>{{$ed_theme->title . " by " . $ed_theme->artist}}</p>
                    </div>
                    @endforeach
                    
                    @endif

                </div>
            </div>

        </div>
    </main>
    {{-- Main Content End --}}
</x-layout>