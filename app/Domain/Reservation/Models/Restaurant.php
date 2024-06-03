<?php

namespace App\Domain\Reservation\Models;

use App\Domain\Reservation\Models\Tests\Factories\RestaurantFactory;
use Carbon\CarbonInterface;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 *
 * @property string $name
 * @property string $description
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = ['name', 'description'];
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public static function factory(): RestaurantFactory
    {
        return RestaurantFactory::new();
    }
}