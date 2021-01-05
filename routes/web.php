<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

\Illuminate\Support\Facades\URL::forceRootUrl(env('APP_URL'));

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
   return view('about');
})->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('contact','ContactController@submit')->name('contact_submit');


Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
})->name('portfolio');

//projects
Route::get('/portfolio/apushmaster', 'PortfolioController@apushmaster');
Route::get('/portfolio/astar', 'PortfolioController@astar');
Route::get('/portfolio/caringcookieclub', 'PortfolioController@caringcookieclub');
Route::get('/portfolio/coloredperspective', 'PortfolioController@coloredperspective');
Route::get('/portfolio/flashdrivebackup', 'PortfolioController@flashdrivebackup');
Route::get('/portfolio/fractals', 'PortfolioController@fractals');
Route::get('/portfolio/g2atracking', 'PortfolioController@g2atracking');
Route::get('/portfolio/homeworkmaster', 'PortfolioController@homeworkmaster');
Route::get('/portfolio/humblebundleanalyzer', 'PortfolioController@humblebundleanalyzer');
Route::get('/portfolio/k95keyboard', 'PortfolioController@k95keyboard');
Route::get('/portfolio/paintwall', 'PortfolioController@paintwall');
Route::get('/portfolio/possystem', 'PortfolioController@possystem');
Route::get('/portfolio/roadtonlc', 'PortfolioController@roadtonlc');
Route::get('/portfolio/staticevolution', 'PortfolioController@staticevolution');
Route::get('/portfolio/vectricity', 'PortfolioController@vectricity');

//project views
Route::get('/portfolio/astar/view', 'PortfolioController@astarview');
Route::get('/portfolio/fractals/view', 'PortfolioController@fractalsview');
Route::get('/portfolio/roadtonlc/view', 'PortfolioController@roadtonlcview');
Route::get('/portfolio/apushmaster/view', 'PortfolioController@apushmasterview');

