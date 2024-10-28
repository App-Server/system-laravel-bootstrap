<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="background-color: black">

    <div class="container">
        <div class="login-layout">
            <div class="login-container d-flex justify-content-center" style="margin-top: 150px; ">
                <div class="col-md-5" >                                    
                    <div class="card shadow-lg " style="background-color: rgb(44, 44, 44); padding:40px">
                        <div class="logo-login d-flex justify-content-center">
                            <img src="{{ asset('css/asset/img.png') }}" alt="Girl in a jacket" width="350" height="90">
                        </div>
                        <div class="card-body">
                            @if ($errors->has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('error') }}
                            </div>
                            @endif
                            <form action="{{ route('login.auth') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: white">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" required>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label" style="color: white">Senha</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
                                </div><br>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Enter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>