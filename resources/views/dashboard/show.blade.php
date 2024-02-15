<x-layout>
    {{-- Header Start --}}
    <header class="container">
        <div class="header" id="header">
            <div class="title">
                <a href="/dashboard">Dashboard</a>
            </div>
            @include('partials._logout')
        </div>
    </header>
    {{-- Header End --}}

    {{-- Bar Start --}}
    <x-bar>
        <div class="bar">
            <div class="bar-text">
                <p>{{ucfirst($bar_title)}}</p>
            </div>
        </div>
    </x-bar>
    {{-- Bar End --}}

    {{-- Main Content Start --}}
    <main class="container">
        <div class="anime-list-container">
            <div class="add-btn-container">
                <div class="add-btn">
                    <a href="/dashboard/anime/create">+ Add</a>
                </div>
            </div>
            <div class="anime-list">
                <hr>
                @if(count($anime_list) == 0)
                <p>No anime found</p>
                @else
            
                @foreach($anime_list as $anime)
                    <div class="anime-list-item">
                        <p class="ellipsis">{{$anime->title}}</p>
                        <a href="/dashboard/anime/{{$anime->id}}/edit">
                            <i class="fa-solid fa-pen"></i>&nbsp;Edit
                        </a>
                        <form method="POST" action="dashboard/anime/{{$anime->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">
                                <i class="fa-solid fa-trash-can"></i>&nbsp;Delete
                            </button>
                        </form>
                    </div>
                    <hr>
                @endforeach
            
                @endif 
            </div>
        </div>
    </main>

    
    {{-- Main Content End --}}
</x-layout>