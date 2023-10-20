<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DBController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () { // get, post, put, patch, delete
    return 1;
})->middleware('throttle:test');

Route::post('/about', function () {
    return 12;
});

Route::match(['get', 'post'], '/contacs', function () {
    return 'contacs';
});

Route::get('/post/{post}', function ($id) {
    return $id;
});

Route::get('/user/{id?}', function ($id = 0) {
//    echo $request->path();
    return 'user:' . $id;
})->whereNumber('id')->name('user');
//    ->whereNumber('id', '[0-9]+');

Route::match(['get', 'post'], '/products', function (Request $request) {
    return $request->path();
});
//Route::match(['get', 'post'], '/products', function () {
//
//})->name('products');
Route::get('/products/{id?}/{comment?}', function ($id = 0, $comment_id = 0) {
    return 'id: ' . $id . '<br>' . 'comment: ' . $comment_id;
});

Route::group(['prefix' => 'admin', 'middleware' => 'throttle:test'], function () {
//Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'], '/', function () {
        return 'admin';
    });
    Route::match(['get', 'post'], '/autf', function () {
        return 'admin/autf';
    })->middleware('throttle:test');
    Route::match(['get', 'post'], '/products', function () {
        return 'admin/products';
    });
    Route::match(['get', 'post'], '/clients', function () {
        return 'admin/clients';
    });
});

Route::get('/secretpage', function () {
    return 'secretpage';
})->middleware('checkLocalhost');


Route::get('/home', [MainController::class, 'home'])->middleware('checkLocalhost');
Route::get('/message/{id?}', [MainController::class, 'message']);
Route::get('/mypage', [TestController::class, 'test']);
Route::get('/testview', [MainController::class, 'testview']);
Route::get('/testblade', [MainController::class, 'testblade']);
Route::get('/mypageblade', [TestController::class, 'mypageblade']);
Route::get('/TestJson', [TestController::class, 'TestJson']);
Route::get('/extendsview', [MainController::class, 'extendsView']);
Route::get('/testcomponent', [MainController::class, 'testComponent']);
Route::get('/mypageblade/clients', [TestController::class, 'myClient']);
Route::get('/mypageblade/contacts', [TestController::class, 'contacts']);
Route::get('/testlayout', [MainController::class, 'testLayout']);
Route::get('/request', [MainController::class, 'Request']);
Route::get('/testresponse', [MainController::class, 'testResponse']);
Route::get('/response', [MainController::class, 'Response'])->name('resp');
Route::get('/testcomponent', [TestController::class, 'testComponent']);
Route::get('/downloadtime', [MainController::class, 'Download']);
Route::get('/testurl', [MainController::class, 'testUrl']);
Route::get('/activate', [MainController::class, 'activate'])
    ->middleware('signed')->name('activate');
Route::get('/counter', [MainController::class, 'counter']);
Route::get('/testexception', [MainController::class, 'testException']);
Route::get('/timedownload', [MainController::class, 'timeDownload'])
    ->middleware('signed')->name('timeDownload');
Route::get('/mylayout/clients', [TestController::class, 'mylayout']);
Route::get('/testlog', [MainController::class, 'testLog']);
Route::get('/commentsadd', [DBController::class, 'commentsAdd']);
Route::get('/testdatabase', [DBController::class, 'testDatabase']);
Route::get('/testdatabase/{table}/{id}/delete', [DBController::class, 'testDatabaseDelete']);
Route::get('/testdatabase/news/add/{author_id?}/{title?}/{text?}',[DBController::class, 'newsAdd'] );
Route::get('/testquerybuilder',[DBController::class, 'testQueryBuilder']);
Route::get('/news',[NewsController::class, 'news']);
Route::get('testpagination',[DBController::class, 'testPagination']);
Route::get('testmodel',[PostController::class, 'testModel']);
Route::get('/news/{id}/delete',[NewsController::class, 'deleteNews']);
Route::get('testam',[PostController::class, 'testAM']);
Route::get('testobserver',[PostController::class, 'testObserver']);
Route::get('/newsattribute',[NewsController::class, 'newsAttribute']);
Route::get('/testrelations',[PostController::class, 'testRelations']);
Route::get('/testphone',[PostController::class, 'testPhone']);
Route::get('/testcomment',[PostController::class, 'testComment']);



