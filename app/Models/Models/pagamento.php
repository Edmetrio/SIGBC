<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamentos';
    protected $fillable = ['nome'];
}
