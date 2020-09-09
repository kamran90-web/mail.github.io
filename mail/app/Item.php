<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Item extends Model
{
    public $fillable = ['name', 'qty', 'price', 'category'];

    public function user() {
       return $this->belongsTo(App\User::class, 'user_id');
    }
}
