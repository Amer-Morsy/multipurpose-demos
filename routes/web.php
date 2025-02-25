<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/agency', function () {
    return view('agency.index');
})->name('agency');

Route::get('/app-development', function () {
    return view('app-development.index');
})->name('app-development');

Route::get('/branding-agency', function () {
    return view('branding-agency.index');
})->name('branding-agency');

Route::get('/business-startup', function () {
    return view('business-startup.index');
})->name('business-startup');

Route::get('/digital-agency', function () {
    return view('digital-agency.index');
})->name('digital-agency');

Route::get('/digital-marketing', function () {
    return view('digital-marketing.index');
})->name('digital-marketing');

Route::get('/freelance-portfolio', function () {
    return view('freelance-portfolio.index');
})->name('freelance-portfolio');

Route::get('/graphic-studio', function () {
    return view('graphic-studio.index');
})->name('graphic-studio');

Route::group(['prefix'=>'landing-page'],function (){

Route::get('/', function () {
    return view('landing-page.index');
})->name('landing-page');

Route::get('/page-2', function () {
    return view('landing-page.second-version');
})->name('landing-page.second-version');

});

Route::get('/lead-generation', function () {
    return view('lead-generation.index');
})->name('lead-generation');

Route::get('/modern-agency', function () {
    return view('modern-agency.index');
})->name('modern-agency');

Route::get('/web-design-agency', function () {
    return view('web-design-agency.index');
})->name('web-design-agency');
