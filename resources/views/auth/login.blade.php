<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-signin.css">
    <title>Sign In</title>
</head>


<div class="container1">
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets/img/bg-sign-in.png');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3 class="heading1"><strong>Masuk</strong></h3>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div class="form-group first">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4 form-group first">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="current-password" placeholder="Kata Sandi" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="d-flex mb-5 align-items-center">
                                <label for="remember_me" class="control control--checkbox mb-0">
                                    <span class="heading7 caption">Ingat Saya</span>
                                    <input id="remember_me" type="checkbox">
                                    <!-- <input id="remember_me" type="checkbox" name="remember"> -->
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto mt-1">
                                    @if (Route::has('password.request'))
                                    <a class="forgot-pass"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </span>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ms-3 btn btn-block btn-primary">
                                    {{ __('Masuk') }}
                                </x-primary-button>
                            </div>
                        </form>
                        <p class="text-center">Tidak memiliki akun? <a href="register">Daftar di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
