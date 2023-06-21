<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
//     public function trips()
// {
//     return $this->hasMany(Trip::class);
// }
//     public function route()
// {
//     return $this->hasMany(Route::class);
// }
}
