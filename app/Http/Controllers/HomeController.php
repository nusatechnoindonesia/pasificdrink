<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Dummy products for now. Images use an external placeholder service.
        $products = [
            [
                'id' => 1,
                'name' => 'Es Teh Pasifik',
                'price' => 8000,
                'image' => 'https://placehold.co/600x400/0d6efd/ffffff?text=Es+Teh+Pasifik',
                'description' => 'Teh manis segar, cocok untuk segala suasana.'
            ],
            [
                'id' => 2,
                'name' => 'Jus Mangga Premium',
                'price' => 15000,
                'image' => 'https://placehold.co/600x400/0d6efd/ffffff?text=Jus+Mangga',
                'description' => 'Mangga pilihan, kental dan manis.'
            ],
            [
                'id' => 3,
                'name' => 'Kopi Susu Pasifik',
                'price' => 12000,
                'image' => 'https://placehold.co/600x400/0d6efd/ffffff?text=Kopi+Susu',
                'description' => 'Kopi robusta dicampur susu segar.'
            ],
            [
                'id' => 4,
                'name' => 'Lemonade Segar',
                'price' => 10000,
                'image' => 'https://placehold.co/600x400/0d6efd/ffffff?text=Lemonade',
                'description' => 'Napas rasa asam manis yang menyegarkan.'
            ],
        ];

        return view('welcome', compact('products'));
    }

    /**
     * Show product detail (dummy data lookup by id)
     */
    public function show($id)
    {
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Es Teh Pasifik',
                'price' => 8000,
                'image' => 'https://placehold.co/1200x800/0d6efd/ffffff?text=Es+Teh+Pasifik',
                'description' => 'Teh manis segar, cocok untuk segala suasana.'
            ],
            2 => [
                'id' => 2,
                'name' => 'Jus Mangga Premium',
                'price' => 15000,
                'image' => 'https://placehold.co/1200x800/0d6efd/ffffff?text=Jus+Mangga',
                'description' => 'Mangga pilihan, kental dan manis.'
            ],
            3 => [
                'id' => 3,
                'name' => 'Kopi Susu Pasifik',
                'price' => 12000,
                'image' => 'https://placehold.co/1200x800/0d6efd/ffffff?text=Kopi+Susu',
                'description' => 'Kopi robusta dicampur susu segar.'
            ],
            4 => [
                'id' => 4,
                'name' => 'Lemonade Segar',
                'price' => 10000,
                'image' => 'https://placehold.co/1200x800/0d6efd/ffffff?text=Lemonade',
                'description' => 'Napas rasa asam manis yang menyegarkan.'
            ],
        ];

        // fallback if product not found
        $product = isset($products[$id]) ? $products[$id] : null;

        if (!$product) {
            abort(404);
        }

        return view('product', compact('product'));
    }
}
