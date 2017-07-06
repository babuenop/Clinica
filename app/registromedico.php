<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class registromedico extends Model
{
    protected $table = 'registrosmedicos';
     use Notifiable;
    protected $fillable = ['nit'];
}
