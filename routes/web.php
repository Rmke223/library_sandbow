<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

// Route::get('/books/{book}', function($book) {
//     $books = [
//         'bookz' => 'YOOO BOOKZ'
//     ];
//     if(! array_key_exists($book, $books)){
//         abort(404, 'Sorrry');
//     }
//     return view('book', [
//         'book' => $books[$book]
//     ]);
// });
// Route::get('/books/{book}', [BooksController::class, 'show']);

Route::post('/books', [BooksController::class, 'store']);
Route::get('/books/create', [BooksController::class, 'create']);
Route::get('/books', [BooksController::class, 'show']);
Route::get('/books/{book}/edit', [BooksController::class, 'edit']);
Route::put('/books/{book}', [BooksController::class, 'update']);




