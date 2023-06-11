<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AjaxController;

Route::middleware(['web'])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/member/{mode?}', [MainController::class, 'member']);
    Route::get('/board/{mode?}', [MainController::class, 'board']);
    Route::get('/job/{mode?}', [MainController::class, 'job']);
});

// Ajax routes
Route::prefix('ajax')->group(function () {
    Route::post('/joinproc', [AjaxController::class, 'joinproc']);
    Route::post('/loginproc', [AjaxController::class, 'loginproc']);
    Route::post('/logoutproc', [AjaxController::class, 'logoutproc']);
});






// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MainController;
// use App\Http\Controllers\AjaxController;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::middleware(['web'])->group(function () {
//     Route::get('/', [MainController::class, 'index']);
//     Route::get('/member/{mode?}', [MainController::class, 'member']);
//     Route::get('/board/{mode?}', [MainController::class, 'board']);
//     Route::get('/job/{mode?}', [MainController::class, 'job']);
// });



// Route::get('/', 'App\Http\Controllers\MainController@index');

// Route::get('/member/{mode}', 'App\Http\Controllers\MainController@member');
// Route::get('/member', 'App\Http\Controllers\MainController@member');

// Route::get('/board/{mode}', 'App\Http\Controllers\MainController@board');
// Route::get('/board', 'App\Http\Controllers\MainController@board');

// //ajax
// Route::post('/ajax/joinproc', 'App\Http\Controllers\AjaxController@joinproc');
// Route::post('/ajax/loginproc', 'App\Http\Controllers\AjaxController@loginproc');
