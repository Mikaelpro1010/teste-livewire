<?php

use App\Http\Livewire\MotivacoesListar;
use App\Http\Livewire\Posts;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

// Route::get('/', function () {
//     $this->posts = Post::query()
//     ->when($this->pesquisa, function ($query) {
//         $query->where('body', 'ilike', "%" . $this->pesquisa . "%");
//     })
//     ->get();

//     return Posts::with('posts', $this->posts)->render('livewire.motivacao-listar');
// })->name('get-motivacao-listar');


Route::get('/', MotivacoesListar::class);

Route::view('/faq', 'livewire.faq-listar')->name('get-faq-listar');

Route::view('/informacoes_usuario', 'livewire.informacoes-usuario')->name('get-informacoes-usuario');
