<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
    protected $policies = [
    Product::class => ProductPolicy::class,
    Category::class => CategoryPolicy::class,
    Supplier::class => SupplierPolicy::class,
    Customer::class => CustomerPolicy::class,
    Order::class => OrderPolicy::class,
    Inventory::class => InventoryPolicy::class,
];
    
    
}
