<?php

namespace OutMart\Team\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'outmart_members_rules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rule',
        'permissions',
    ];

    protected $casts = [
        'permissions' => 'array'
    ];
}
