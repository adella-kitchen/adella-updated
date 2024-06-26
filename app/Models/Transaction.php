<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id_transaction'];
    protected $primaryKey = 'id_transaction';
    protected $table = 'transaction';
    public $timestamps = false;
}
