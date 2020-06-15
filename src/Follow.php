<?php

/*
 * This file is part of the sebastian-kennedy/laravel-follow.
 *
 * (c) SebastianKennedy <sebastiankennedy@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace SebastianKennedy\LaravelFollow;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Follow.
 */
class Follow extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => FollowedEvent::class,
        'deleted' => UnFollowedEvent::class,
    ];

    /**
     * @return BelongsTo
     */
    public function follower()
    {
        return $this->belongsTo(config('auth.providers.users.model'), config('follow.follower_key'));
    }

    /**
     * @return BelongsTo
     */
    public function following()
    {
        return $this->belongsTo(config('auth.providers.users.model'), config('follow.following_key'));
    }
}
