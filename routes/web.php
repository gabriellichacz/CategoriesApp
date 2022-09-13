<?php

use Illuminate\Support\Facades\Route;
use App\Models\Node;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $nodes = Node::tree()->get()->toTree();

    /*//funkcje do drzew
    function display_children($parent_id){
        $children = Node::select("content")
                        ->where("parent_id", "=", $parent_id)
                        ->get();
        return($children);
    }*/

    return view('dashboard', [
        'nodes' => $nodes
    ]);

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/create', [App\Http\Controllers\NodeController::class, 'create'])->name('node.create');
Route::post('/dashboard', [App\Http\Controllers\NodeController::class, 'store'])->name('node.create');
Route::patch('/dashboard/{node}', [App\Http\Controllers\NodeController::class, 'update'])->name('node.update');;
Route::get('/dashboard/{node}', [App\Http\Controllers\NodeController::class, 'edit'])->name('node.edit');
Route::get('/dashboard/{node}/delete', [App\Http\Controllers\NodeController::class, 'delete'])->name('node.delete');
