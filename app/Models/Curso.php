<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Aca indico los campos que deseo llenar
    // protected $fillable = ['name', 'description', 'category'];

    // Aca indico los campos que no quiero que sean llenados desde el formulario
    // protected $guarded = ['status'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
