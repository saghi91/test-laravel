<?php

namespace App\Core\Product\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Product;

interface ProductInterface {
	public function findAll() : Collection;
	public function create(array $inputs) : Product;
}