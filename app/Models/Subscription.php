<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $casts = [
        'cancelled_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param mixed $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', '=', 'active');
    }

    /**
     * @return bool
     */
    public function onGracePeriod(): bool
    {
        return $this->cancelled_at
            && $this->cancelled_at->isFuture();
    }
}
