<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider {
	public function register()
	{
		$this->app->bind(
            'App\Core\Product\Repositories\ProductInterface',
            'App\Core\Product\Repositories\ProductRepository'
        );
	}
}