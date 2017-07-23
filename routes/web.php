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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate;
use App\Message;
use App\User;
use App\Reservation;

Route::resource('users', 'UserController');

Route::resource('reservations', 'ReservationController');

Route::get('/calendar', function () {
    return view('calendar');
})->middleware('auth');

Route::get('/ContactUs', 'PagesController@ContactUs');


Route::get('/Registration', 'PagesController@Registration');


Route::get('/AboutUs', 'PagesController@AboutUs');

Route::get('/WorkSpaces', 'PagesController@WorkSpaces');

Route::get('/', 'PagesController@Home2');


Route::get('/Profile', function () {
    return view('profile');
})->middleware('auth');

//Route::get('/AboutUs', function () {
//    return view('AboutUs');
//});
//
//Route::get('/WorkSpaces', function () {
//    return view('WorkSpaces');
//});

Route::get('/api', function () {
    $events = DB::table('reservations')->select('id', 'reservation_start_at as start', 'reservation_start_at as end', 'room_id')->get();
    foreach($events as $event)
    {
        if($event->room_id == 1)
        {
            $event->title = 'Table Space room reservation';
        }
        else if($event->room_id == 2)
        {
            $event->title = 'Desk Space room reservation';
        }
        else if($event->room_id == 3)
        {
            $event->title = 'Small office room reservation';
        }
        else if($event->room_id == 4)
        {
            $event->title = 'Midsize room reservation';
        }
        else if($event->room_id == 5)
        {
            $event->title = 'Small meeting room reservation';
        }
        else
        {
            $event->title = '';
        }
        $event->url = url('reservations/' . $event->id);
    }
    return $events;
});


Route::post('/ContactUs', 'UserController@insertMessage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');