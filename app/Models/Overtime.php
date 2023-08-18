<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;
    protected $table ='overtimes';
    protected $fillable = [
        'user_id', 'day_date','start', 'finish','ot', 'project_no','location', 'cek'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
