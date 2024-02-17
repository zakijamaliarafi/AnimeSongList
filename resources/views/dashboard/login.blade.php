<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/utils.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5d1655edc.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form">
                <div class="form-title">
                    <p>AnimeSongList</p>
                </div>
                <div class="form-input">
                    <form method="POST" action="/dashboard/authenticate">
                        @csrf
                        <div class="input-container">
                            <label for="name" class="input-label">Username</label>
                            <div class="input-box">
                                <input name="name" id="name" type="text">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>
                        <div class="input-container">
                            <label for="password" class="input-label">Password</label>
                            <div class="input-box">
                                <input name="password" id="password" type="password">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn login-btn">
                            <p>Log In</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>