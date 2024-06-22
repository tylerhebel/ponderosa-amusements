<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use CrudTrait;
    use HasFactory;

    // update mass action
    protected $fillable = [
        'active',
        'description',
        'name',
        'standings',
        'schedule',
    ];
}
