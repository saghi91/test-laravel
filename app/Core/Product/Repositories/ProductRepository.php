<?php

namespace App\Core\Product\Repositories;

use App\Core\Product\Repositories\Product;
use App\Product as Products;

class ProductRepository implements ProductInterface {
	protected $model;

    public function __construct(Products $model)
    {
        $this->model = $model;
    }

    public function findAll() {
    	return $this->model::all();
    }

	public function create($inputs) {
		return $this->model::create($inputs);
	}
}