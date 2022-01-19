<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function book(){
        return $this->hasOne('App\Models\Book');
    }
    public function relate(Request $request) //追記
    {
        $items = Author::all();
        return view('author.index', ['items' => $items]);
    }
}
Route::get('/relation', [AuthorController::class, 'relate']);
