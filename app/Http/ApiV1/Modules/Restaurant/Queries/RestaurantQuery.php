<?php
namespace App\Http\ApiV1\Modules\Restaurant\Queries;

use App\Domain\Reservation\Models\Restaurant;
use Ensi\QueryBuilderHelpers\Filters\DateFilter;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class RestaurantQuery extends QueryBuilder
{
    public function __construct()
    {
        // Связь с моделью
        parent::__construct(Restaurant::query());

        // Разрешить сортировать по параметрам
        $this->allowedSorts(['id', 'created_at', 'updated_at']);

        // Сортировка по умолчанию
        $this->defaultSort('-id');
    }
    public function getAll()
    {
        return Restaurant::all();
    }

}