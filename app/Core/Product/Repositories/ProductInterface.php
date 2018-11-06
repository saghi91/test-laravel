<?php

namespace App\Core\Product\Repositories;

interface ProductInterface {
	public function findAll();
	public function create($input);
}