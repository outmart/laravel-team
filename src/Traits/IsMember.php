<?php

namespace OutMart\Team\Traits;

use OutMart\Team\Models\Member;

trait IsMember
{
    /**
     * Get all of the post's comments.
     */
    public function membership()
    {
        return $this->morphOne(Member::class, 'user');
    }
}
