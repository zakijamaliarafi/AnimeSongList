<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/bar.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/catalog.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/content.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/seasonlist.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/animelist.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/utils.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5d1655edc.js" crossorigin="anonymous"></script>
    <title>AnimeSongList</title>
</head>
<body>
    
    {{$slot}}

    {{-- Footer Start --}}
    <footer class="container">
        <div class="footer-container">
            <hr>
            <p>Copyright &copy; 2024 Zaki Jamali Arafi</p>
        </div>
    </footer>
    {{-- Footer Start --}}
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>