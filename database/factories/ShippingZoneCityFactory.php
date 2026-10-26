<?php

namespace Lunar\Shipping\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lunar\Shipping\Models\ShippingZoneCity;

class ShippingZoneCityFactory extends Factory
{
    protected $model = ShippingZoneCity::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->city(),
        ];
    }
}
