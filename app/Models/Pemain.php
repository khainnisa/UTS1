<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pemain extends Model
{
    use HasFactory;
    protected $table = 'pemain_mu';
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'nama_pemain',
    //     'nomor_punggung',
    //     'posisi',
    //     'posisi',
    // ];
}
