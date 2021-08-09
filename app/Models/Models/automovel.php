<?php

namespace App\Models\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automovel extends Model
{
    use Uuid;
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'automovel';
    protected $fillable = ['empresa_id','combustivel_id','matricula','quantidade','estado'];
}
