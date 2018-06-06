<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tartes extends Authenticatable
{
    protected $table = "tartes";
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
        'title','bio','salesucre', 'link_img', 'description', 'tarteornot','color','tarteornot'
    ];
}
