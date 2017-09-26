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
use App\User;
use App\Role;
use App\Package;
use App\Packageimage;
use App\Customer;
use App\Joshbooking;
use App\Bookingdetail;
use App\PackageCategory;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('tester', function() {

  $a = User::all();

  return $a;

  //return $a->joshbookings;
  // $b = $a->joshbookings;
  //
  // foreach ($b as $c) {
  //   //echo "<pre>.$c->package_id.</pre>";
  //   $packs[] = Package::findOrFail($c->package_id);
  // }
  //
  // return $packs;

});

//Route::get('packages/inbound', 'PackageControllar@inbound')->name('packages.inbound');






Route::group(['middleware'=>'web'], function() {
  //Packages
  Route::get('packages/inbound', 'PackageControllar@inbound')->name('packages.inbound');
  Route::get('packages/outbound', 'PackageControllar@outbound')->name('packages.outbound');


  Route::get('packages', 'PackageControllar@index')->name('packages');
  Route::get('packages/{id}', 'PackageControllar@details')->name('packages.details');

  Route::get('packages/inbound', 'PackageControllar@inbound')->name('packages.inbound');

  Route::get('packages/book/{id}', 'PackageControllar@book')->name('packages.book');
  Route::post('packages/book-toure', 'PackageControllar@store')->name('book.store');
  Route::post('packages/book-toure-user', 'PackageControllar@userBookStore')->name('book.storeUser');

  //Portfolio
  Route::get('portfolio', 'PortfolioController@index')->name('portfolio');

  //Team
  Route::get('team/{id}', 'PortfolioController@team')->name('team');

  //Contat
  Route::get('contact', 'ContatController@index')->name('contact');
  Route::post('contact/send', 'ContatController@sendMessage')->name('sendMessage');

  //Tour Informtaion
  Route::get('blog', 'TourInfoController@index')->name('tourInfo');
  Route::get('blog/malaria', 'TourInfoController@malaria')->name('tourInfo.malaria');
  Route::get('blog/items-to-bring-to-ghana', 'TourInfoController@itemsToBringToGhana')->name('tourInfo.itemsToBringToGhana');

  //Book
  Route::get('book', 'PackageControllar@amadeusBook')->name('amadeusBook');

});

Route::group(['middleware'=>'auth'], function() {

  //User bookings
  Route::get('user/bookings', 'UserBookingController@bookings')->name('user.bookings');
  Route::get('user/bookings/{id}', 'UserBookingController@bookingInfo')->name('user.bookingInfo');
  //Route::delete('user/booking/{id}', 'UserBookingController@delete')->name('user.userBookingDelete');

  Route::get('user/booking-details', 'UserBookingController@bookingDetails')->name('user.bookingDetails');
  Route::get('user/booking-details/{id}/edit', 'UserBookingController@bookingDetailsEdit')->name('user.bookingDetailsEdit');
  Route::match(['put', 'patch'],'user/booking-details-edit/{id}', 'UserBookingController@update')->name('user.bookingDetailsEditSore');
  //Route::put('user/booking-details-edit', 'UserBookingController@bookingDetailsEditSore')->name('user.bookingDetailsEditSore');

});


Route::group(['middleware'=>'admin'], function() {



  Route::get('admin', 'AdminIndexController@index')->name('admin');
  Route::resource('admin/user', 'AdminUsersController');
  Route::resource('admin/package', 'AdminPackageContoller');
  Route::get('admin/bookings', 'AdminBookingContoller@index')->name('bookings.index');
  Route::get('admin/bookings/{id}', 'AdminBookingContoller@show')->name('bookings.show');

  Route::get('admin/users/admins', 'AdminIndexController@admins')->name('allAdmins');
  Route::get('admin/users/employees', 'AdminIndexController@emloyees')->name('allEmployees');
  Route::get('admin/users/subscribers', 'AdminIndexController@subscribers')->name('allSubscribers');

  Route::resource('admin/staff', 'StaffController');


});


Route::group(['middleware'=>'employee'], function() {

  Route::get('admin', 'AdminIndexController@index')->name('admin');

  Route::get('admin/bookings', 'AdminBookingContoller@index')->name('bookings.index');
  Route::get('admin/bookings/{id}', 'AdminBookingContoller@show')->name('bookings.show');

  Route::resource('admin/package', 'AdminPackageContoller');

  Route::get('admin/users/admins', 'AdminIndexController@admins')->name('allAdmins');
  Route::get('admin/users/employees', 'AdminIndexController@emloyees')->name('allEmployees');
  Route::get('admin/users/subscribers', 'AdminIndexController@subscribers')->name('allSubscribers');


});
