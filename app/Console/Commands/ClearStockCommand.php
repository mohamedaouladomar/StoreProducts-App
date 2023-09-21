<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ClearStockCommand extends Command
{
    protected $signature = 'clearstock';

    protected $description = 'Clear all products with quantity less than 5';

    public function handle()
    {
        $products = Product::where('stock', '<', 5)->get();

        foreach ($products as $product) {
            $product->delete();
        }

        $this->info('Stock cleared successfully!');
    }
}
