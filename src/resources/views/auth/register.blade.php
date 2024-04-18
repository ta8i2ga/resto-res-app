<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header>
        <input type="checkbox" id="check">
        <label for="check" id="rese"><img width="20" height="25" src="https://img.icons8.com/color/48/000000/fries-menu.png" alt="fries-menu" /><label for="check" id="text">Rese</label></label>
        <label for="check" id="batu">✖</label>
        <div class="sidebar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/register">Registration</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="content">
            <div class="main_header">
                <h2>Registration</h2>
            </div>
            <div class="main_content">
                <form class="form" action="/register" method="post">
                    @csrf

                    <div class="username">
                        <div class="username_img">
                            <img width="22" height="22" src="https://img.icons8.com/ios-glyphs/30/user-male--v1.png" alt="user-male--v1" />
                        </div>
                        <div class="username_text">
                            <input type="text" name="name"  placeholder="{{ old('name') .'Username' }}">
                        </div>
                    </div>

                    <div class="email">
                        <div class="email_img">
                            <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/new-post.png" alt="new-post" />
                        </div>
                        <div class="email_text">
                            <input type="email" name="email"  placeholder="{{ old('email') . 'Email'}}">
                        </div>
                    </div>

                    <div class="password">
                        <div class="password_img">
                            <img width="22" height="22" src="https://img.icons8.com/material-rounded/24/lock--v1.png" alt="lock--v1" />
                        </div>
                        <div class="password_text">
                            <input type="text" name="password"  placeholder="Password">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>