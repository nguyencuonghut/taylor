<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyIndex extends Model
{
    protected $table = 'body_indexes';

    protected $fillable = [
        'co',
        'vai',
        'nguc',
        'eo',
        'bung',
        'mong',
        'dui',
        'dai_than',
        'dai_tay',
        'bap_tay',
        'ha_eo',
        'client_id',
        'dung',
    ];
}
