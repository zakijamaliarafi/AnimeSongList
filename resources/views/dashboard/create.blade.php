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
                    <p>Create a List</p>
                </div>
                <div class="form-input">
                    <form method="POST" action="/dashboard/anime" enctype="multipart/form-data">
                        @csrf
                        <div class="input-container">
                            <label for="title" class="input-label">Tilte</label>
                            <div class="input-box-anime">
                                <input name="title" id="title" type="text"> 
                            </div>
                            @error('title')
                                <p class="error-msg">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-container">
                            <label for="alt_title" class="input-label">Alternative Tilte</label>
                            <div class="input-box-anime">
                                <input name="alt_title" id="alt_title" type="text">
                            </div>
                            @error('alt_title')
                                <p class="error-msg">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-container">
                            <label for="airing_season" class="input-label">Airing Season</label>
                            <div class="input-box-anime">
                                <input name="airing_season" id="airing_season" type="text">
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
                            <p>Create List</p>
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