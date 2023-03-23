<?php

namespace OutMart\Team\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'outmart_members_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rule_id',
        'expires_at',
    ];

    /**
     * Get all of the models that own comments.
     */
    public function user()
    {
        return $this->morphTo();
    }

    public function rule()
    {
        return $this->hasOne(Rule::class, 'id', 'rule_id');
    }
}
