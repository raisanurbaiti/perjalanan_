<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $table = 'kota';

    protected $fillable = [
        'provincie_id', 'name'
    ];

    protected $primaryKey = 'id_kota';

    public function user()
    {
        return $this->hasMany('App\user');
    }
}
