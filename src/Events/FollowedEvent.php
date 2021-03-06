<?php

/*
 * This file is part of the sebastian-kennedy/laravel-follow.
 *
 * (c) SebastianKennedy <sebastiankennedy@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace SebastianKennedy\LaravelFollow\Events;

use SebastianKennedy\LaravelFollow\Follow;

class FollowedEvent
{
    protected $follow;

    public function __construct(Follow $follow)
    {
        $this->follow = $follow;
    }
}
