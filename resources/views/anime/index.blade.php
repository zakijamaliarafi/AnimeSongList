<x-layout>
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
                <div class="arrow">
                    <div class="arrow-down" id="arrow-down" onclick="displayBar('show')">
                        <i class="fa-solid  fa-chevron-down fa-xl"></i>
                    </div>
                    <div class="arrow-up" id="arrow-up" onclick="displayBar('close')">
                        <i class="fa-solid fa-chevron-up fa-xl"></i>
                    </div>
                </div>
            </div>
            <div class="bar-form" id="bar-form">
                <form action="/">
                    <select name="season">
                        <option value="Winter">Winter</option>
                        <option value="Spring">Spring</option>
                        <option value="Summer">Summer</option>
                        <option value="Fall">Fall</option>
                    </select>
                    <input name="year" type="text" placeholder=" Year" required>
                    <button type="submit">Go</button>
                </form>
            </div>
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

            {{-- <div class="card">
                <div class="card-image">
                    <a href="/"><img src="{{asset('images/solo.jpg')}}" alt="Solo Leveling"></a>
                </div>
                <div class="card-title">
                    <a href=""><p>Ore dake Level Up na Ken</p></a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href="/"><img src="{{asset('images/cote.jpg')}}" alt="Classroom of the Elite III"></a>
                </div>
                <div class="card-title">
                    <a href="/"><p>Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e 3rd Season</p></a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href="/"><img src="{{asset('images/mashle.jpg')}}" alt="Mashle"></a>
                </div>
                <div class="card-title">
                    <a href="/"><p>Mashle: Shinkakusha Kouho Senbatsu Shiken-hen</p></a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href="/"><img src="{{asset('images/tsukimichi.jpg')}}" alt="Tsukimichi"></a>
                </div>
                <div class="card-title">
                    <a href="/"><p>Tsuki ga Michibiku Isekai Douchuu 2nd Season</p></a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href="/"><img src="{{asset('images/dunmes.jpg')}}" alt="Delicious in Dungeon"></a>
                </div>
                <div class="card-title">
                    <a href="/"><p>Dungeon Meshi</p></a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <a href="/"><img src="{{asset('images/mato.jpg')}}" alt="Chained Soldier"></a>
                </div>
                <div class="card-title">
                    <a href="/"><p>Mato Seihei no Slave</p></a>
                </div>
            </div> --}}
        </div>
    </main>
    {{-- Main Content End --}}
</x-layout>