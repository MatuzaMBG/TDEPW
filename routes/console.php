<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


