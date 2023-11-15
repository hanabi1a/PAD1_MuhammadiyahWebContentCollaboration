<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Validator::extend('username', function ($attribute, $value, $parameters, $validator) {
            // Tambahkan aturan validasi khusus untuk username di sini
            // Contoh: username harus terdiri dari huruf kecil dan angka
            return preg_match('/^[a-z0-9]+$/', $value);
        });
    }
}
