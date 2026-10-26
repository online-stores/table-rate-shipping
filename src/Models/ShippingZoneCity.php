<?php

namespace Lunar\Shipping\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Lunar\Core\Models\Base;
use Lunar\Core\Models\State;
use Lunar\Shipping\Database\Factories\ShippingZoneCityFactory;

/**
 * A city a `cities` zone covers, with its state, since cities in different
 * states can share a name.
 */
class ShippingZoneCity extends Base
{
    use HasFactory;

    /**
     * Define which attributes should be
     * protected from mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Return a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return ShippingZoneCityFactory::new();
    }

    /**
     * Return the shipping zone relationship.
     */
    public function shippingZone(): BelongsTo
    {
        return $this->belongsTo(ShippingZone::class);
    }

    /**
     * Return the state relationship.
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
