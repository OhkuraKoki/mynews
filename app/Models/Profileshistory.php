<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profileshistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}