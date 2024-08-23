<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <form action="{{ url('/homepage') }}" method="POST" enctype="multipart/form-data">
                @csrf

                
            <div class="col-md-6 mx-auto mt-5">
                @if(session('status'))
                    <div class="alert 
                    @if(str_contains(session('status'), 'success')){{ 'alert-success' }}
                    @else {{ 'alert-danger' }}
                    @endif
                    ">
                        {{ session('status'); }}
                    </div>
                @endif
                <h1>Home 2</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" name="password"  value="{{ old('password') }}" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
                <input type="file" name="photo" id="" class="form-control" accept="image/*">
                <button class="btn btn-success btn-lg mt-3">Login</button>
            </div>
        </form>
    </body>
</html>