<?php

namespace App\Listeners;

use App\Events\OrderDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Product;

class RestoreProductStock
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderDeleted $event): void
    {
        $order = $event->order;
        $orderQuantity = $order->quantity;
        $product = Product::find($order->product_id);
        $product->update([
            'stock' => $product->stock + $orderQuantity
        ]);
    }
}
