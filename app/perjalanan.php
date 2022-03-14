<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table = 'perjalanans';
    
    protected $fillable = [
        'user_id',
        'tanggal', 
        'jam', 
        'lokasi',
        'suhu_tubuh',
    ];

    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo('App\user','user_id');
    }
}
