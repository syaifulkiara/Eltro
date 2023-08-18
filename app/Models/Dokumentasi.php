<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table ='dokumentasis';
    protected $fillable = [
        'user_id','project', 'judul','gambar', 'keterangan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
