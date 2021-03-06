<?php

namespace App\Models\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'contrato';
    protected $fillable = ['empresa_id','pagamento_id','datainicio','vencimento','datapagamento','saldo','estado'];
}
