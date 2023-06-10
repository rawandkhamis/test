<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable=[
   'name',
   'price'
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
