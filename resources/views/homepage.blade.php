<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components/header.css">
    <link rel="stylesheet" href="css/components/bar.css">
    <link rel="stylesheet" href="css/components/catalog.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5d1655edc.js" crossorigin="anonymous"></script>
    <title>AnimeSongList</title>
</head>
<body>
    {{-- Header Start --}}
    <header class="container">
        <div class="header" id="header">
            <div class="title">
                <a href="/">AnimeSongList</a>
            </div>
            <div id="search-container">
                <div class="search-box">
                    <form action="/">
                        <input name="search" id="search" type="text" placeholder=" Search Anime...">
                        <button type="submit" class="search-btn">
                            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                        </button>
                    </form>
                </div>
            </div>
            {{-- Mobile Search icon --}}
            <div class="icon">
                <div id="search-icon" onclick="displaySearch('show')">
                    <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                </div>
                <div id="close-icon" onclick="displaySearch('close')">
                    <i class="fa-solid fa-xmark fa-xl"></i>
                </div>
            </div>
        </div>
        {{-- Mobile Search Bar --}}
        <div id="mobile-search-container">
            <div class="search-box">
                <form action="/">
                    <input name="search" id="search" type="text" placeholder=" Search Anime...">
                    <button type="submit" class="search-btn">
                        <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                    </button>
                </form>
            </div>
        </div>
    </header>
    {{-- Header End --}}

    {{-- Select Bar Start --}}
    <div class="container">
        <div class="select-bar-container">
            <div class="select-bar">
                <div class="bar-text">
                    <p>Winter 2024</p>
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
            <div class="select-form" id="select-form">
                <form action="/">
                    <select name="season">
                        <option value="winter">Winter</option>
                        <option value="spring">Spring</option>
                        <option value="summer">Summer</option>
                        <option value="autumn">Autumn</option>
                      </select>
                    <input name="year" type="text" placeholder=" Year">
                    <button type="submit">Go</button>
                </form>
            </div>
        </div>
    </div>
    {{-- Select Bar End --}}

    {{-- Catalog Start --}}
    <main class="container">
        <div class="catalog-container">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/solo.jpg')}}" alt="Solo Leveling">
                </div>
                <div class="card-title">
                    <p>Ore dake Level Up na Ken</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/cote.jpg')}}" alt="Classroom of the Elite III">
                </div>
                <div class="card-title">
                    <p>Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e 3rd Season</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/mashle.jpg')}}" alt="Mashle">
                </div>
                <div class="card-title">
                    <p>Mashle: Shinkakusha Kouho Senbatsu Shiken-hen</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/tsukimichi.jpg')}}" alt="Tsukimichi">
                </div>
                <div class="card-title">
                    <p>Tsuki ga Michibiku Isekai Douchuu 2nd Season</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/dunmes.jpg')}}" alt="Delicious in Dungeon">
                </div>
                <div class="card-title">
                    <p>Dungeon Meshi</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/mato.jpg')}}" alt="Chained Soldier">
                </div>
                <div class="card-title">
                    <p>Mato Seihei no Slave</p>
                </div>
            </div>
        </div>
    </main>
    {{-- Catalog End --}}
    <script src="js/main.js"></script>
</body>
</html>