<?php

namespace App\Core\Product\Repositories;

use App\Core\Product\Repositories\ProductInterface;
use App\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductInterface {
	protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function findAll() : Collection {
    	return $this->model::all();
    }

	public function create(array $inputs) : Product{
		return $this->model::create($inputs);
	}
}