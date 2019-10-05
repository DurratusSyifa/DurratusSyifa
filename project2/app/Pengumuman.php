<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillable=[
    	'id','nama','users_id'
    ];

    protected $casts=[

    ];
}
