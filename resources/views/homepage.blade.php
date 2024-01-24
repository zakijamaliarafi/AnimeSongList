<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components/header.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5d1655edc.js" crossorigin="anonymous"></script>
    <title>AnimeSongList</title>
</head>
<body>
    <header class="container">
        <div class="header" id="header">
            <div class="title">
                <a href="/">AnimeSongList</a>
            </div>
            <div class="icon">
                <div id="search-icon" onclick="displaySearch()">
                    <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                </div>
                <div id="close-icon" onclick="displaySearch()">
                    <i class="fa-solid fa-xmark fa-xl"></i>
                </div>
            </div>
        </div>
        <div id="search-container">
            <div class="search-box">
                <form action="/">
                    <input name="search" id="search" type="text" placeholder="Search Anime...">
                    <button type="submit" class="search-btn">
                        <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <script src="js/main.js"></script>
</body>
</html>