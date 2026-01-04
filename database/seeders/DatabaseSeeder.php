<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Table;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Categories
        $categories = [
            ['name' => 'Coffee', 'slug' => 'coffee', 'description' => 'Artisanal coffee beverages', 'display_order' => 1],
            ['name' => 'Matcha', 'slug' => 'matcha', 'description' => 'Premium matcha drinks', 'display_order' => 2],
            ['name' => 'Tea', 'slug' => 'tea', 'description' => 'Japanese tea selection', 'display_order' => 3],
            ['name' => 'Parfait', 'slug' => 'parfait', 'description' => 'Layered dessert parfaits', 'display_order' => 4],
            ['name' => 'Bakery', 'slug' => 'bakery', 'description' => 'Fresh baked goods', 'display_order' => 5],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create Products
        $products = [
            // Coffee
            ['category_id' => 1, 'name' => 'Latte', 'description' => 'Smooth espresso with steamed milk', 'price' => 45000, 'status' => 'available', 'display_order' => 1],
            ['category_id' => 1, 'name' => 'Cappuccino', 'description' => 'Espresso with foam milk', 'price' => 45000, 'status' => 'available', 'display_order' => 2],
            ['category_id' => 1, 'name' => 'Cold Brew', 'description' => 'Smooth cold-steeped coffee', 'price' => 40000, 'status' => 'available', 'display_order' => 3],
            
            // Matcha
            ['category_id' => 2, 'name' => 'Matcha Latte', 'description' => 'Premium matcha with milk', 'price' => 48000, 'status' => 'available', 'display_order' => 1],
            ['category_id' => 2, 'name' => 'Iced Matcha', 'description' => 'Refreshing iced matcha', 'price' => 48000, 'status' => 'available', 'display_order' => 2],
            
            // Tea
            ['category_id' => 3, 'name' => 'Sencha', 'description' => 'Traditional Japanese green tea', 'price' => 35000, 'status' => 'available', 'display_order' => 1],
            ['category_id' => 3, 'name' => 'Hojicha', 'description' => 'Roasted green tea', 'price' => 35000, 'status' => 'available', 'display_order' => 2],
            
            // Parfait
            ['category_id' => 4, 'name' => 'Matcha Parfait', 'description' => 'Layered matcha ice cream parfait', 'price' => 65000, 'status' => 'available', 'display_order' => 1],
            ['category_id' => 4, 'name' => 'Strawberry Parfait', 'description' => 'Fresh strawberry parfait', 'price' => 60000, 'status' => 'available', 'display_order' => 2],
            
            // Bakery
            ['category_id' => 5, 'name' => 'Croissant', 'description' => 'Buttery French croissant', 'price' => 25000, 'status' => 'available', 'display_order' => 1],
            ['category_id' => 5, 'name' => 'Anpan', 'description' => 'Sweet red bean bun', 'price' => 20000, 'status' => 'available', 'display_order' => 2],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Create Tables
        $tables = [
            ['name' => 'Tatami 1', 'type' => 'tatami', 'capacity' => 4, 'status' => 'available'],
            ['name' => 'Tatami 2', 'type' => 'tatami', 'capacity' => 6, 'status' => 'available'],
            ['name' => 'Table 1', 'type' => 'regular', 'capacity' => 2, 'status' => 'available'],
            ['name' => 'Table 2', 'type' => 'regular', 'capacity' => 2, 'status' => 'available'],
            ['name' => 'Table 3', 'type' => 'regular', 'capacity' => 4, 'status' => 'available'],
            ['name' => 'Table 4', 'type' => 'regular', 'capacity' => 4, 'status' => 'available'],
        ];

        foreach ($tables as $table) {
            Table::create($table);
        }

        // Create Books
        $books = [
            [
                'title' => 'Norwegian Wood',
                'author' => 'Haruki Murakami',
                'synopsis' => 'A nostalgic story of loss and burgeoning sexuality.',
                'status' => 'available'
            ],
            [
                'title' => 'Kitchen',
                'author' => 'Banana Yoshimoto',
                'synopsis' => 'A young woman finds solace in cooking after loss.',
                'status' => 'available'
            ],
            [
                'title' => 'Convenience Store Woman',
                'author' => 'Sayaka Murata',
                'synopsis' => 'A meditation on what makes us normal.',
                'status' => 'available'
            ],
            [
                'title' => 'The Book of Tea',
                'author' => 'Kakuzo Okakura',
                'synopsis' => 'An exploration of Japanese tea culture and philosophy.',
                'status' => 'available'
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }

        // Create Sample Blog Posts
        $posts = [
            [
                'title' => 'The Art of Slow Living',
                'slug' => 'the-art-of-slow-living',
                'content' => 'In a world that moves at breakneck speed, we invite you to slow down. At Hidamari, every moment is designed to help you reconnect with the present...',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'The Perfect Cup of Matcha',
                'slug' => 'the-perfect-cup-of-matcha',
                'content' => 'Making matcha is a ritual. From whisking to sipping, each step is mindful and intentional. Let us guide you through the process...',
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
