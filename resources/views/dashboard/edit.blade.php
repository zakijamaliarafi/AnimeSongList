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

    {{-- Main Content Start --}}
    <main class="container">
        <div class="form-container-anime">
            <div class="form">
                <div class="form-title">
                    <p>Edit List</p>
                </div>
                <div class="form-input">
                    <form method="POST" action="/dashboard/anime/{{$anime->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-container">
                            <label for="title" class="input-label">Tilte</label>
                            <div class="input-box-anime">
                                <input name="title" id="title" type="text" value="{{$anime->title}}"> 
                            </div>
                            @error('title')
                                <p class="error-msg">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-container">
                            <label for="alt_title" class="input-label">Alternative Tilte</label>
                            <div class="input-box-anime">
                                <input name="alt_title" id="alt_title" type="text" value="{{$anime->alt_title}}">
                            </div>
                            @error('alt_title')
                                <p class="error-msg">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-container">
                            <label for="airing_season" class="input-label">Airing Season</label>
                            <div class="input-box-anime">
                                <input name="airing_season" id="airing_season" type="text" value="{{$anime->airing_season}}">
                            </div>
                            @error('airing_season')
                                <p class="error-msg">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-container">
                            <label for="poster" class="input-label">Anime Poster</label>
                            <div class="input-box-anime">
                                <input name="poster" id="poster" type="file">
                            </div>
                            @error('poster')
                                <p class="error-msg">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn form-btn">
                            <p>Update List</p>
                        </button>
                        <button onclick="history.back()" class="back-btn">
                            <p>Back</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    {{-- Main Content End --}}
</x-layout>