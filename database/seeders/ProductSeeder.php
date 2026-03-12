<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // 1. Edible Salt
        $edible = Product::create([
            'name' => 'Edible Salt',
            'slug' => 'edible-salt',
            'image' => 'images/Products/ediable-salt.png', // ✅ Main Page Image (Original)
            'short_description' => 'Premium Grade Himalayan Pink Salt - The Purest Salt on Earth.',
            'long_description' => "Our Edible Himalayan Pink Salt is 100% natural, unrefined, and hand-mined from the foothills of the Himalayas. It contains 84 essential minerals and trace elements that are beneficial for human health.\n\nUnlike regular table salt, our pink salt is free from additives and anti-caking agents, ensuring you get the purest product possible. It is perfect for cooking, seasoning, and grilling, adding a rich taste and unique texture to your meals.",
        ]);

        $edible->benefits()->createMany([
            ['benefit' => 'Regulates water content throughout the body.'],
            ['benefit' => 'Promotes healthy pH balance in cells.'],
            ['benefit' => 'Promotes blood sugar health and helps reduce the signs of aging.'],
            ['benefit' => 'Assists in the generation of hydroelectric energy in cells in your body.'],
        ]);

        $edible->variants()->createMany([
            // Crystal Salt Granules
            [
                'group_name' => 'Crystal Salt Granules', 
                'variant_name' => 'Light Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 mm', 
                'image' => 'images/Products/Edible Salt/salt-granules-light-pink.png' 
            ],
            [
                'group_name' => 'Crystal Salt Granules', 
                'variant_name' => 'Medium Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 mm', 
                'image' => 'images/Products/Edible Salt/salt-granules-medium-pink.png'
            ],
            [
                'group_name' => 'Crystal Salt Granules', 
                'variant_name' => 'Dark Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 mm', 
                'image' => 'images/Products/Edible Salt/crystal-salt-granulus-dark-pink.png'
            ],
            
            // Running Salt
            [
                'group_name' => 'Running Salt', 
                'variant_name' => 'Light Pink', 
                'spec_key' => 'Weight (Mesh)', 'spec_value' => '20–50', 
                'image' => 'images/Products/Edible Salt/Running Salt/running-salt-light-pink.png'
            ],
            [
                'group_name' => 'Running Salt', 
                'variant_name' => 'Medium Pink', 
                'spec_key' => 'Weight (Mesh)', 'spec_value' => '20–50', 
                'image' => 'images/Products/Edible Salt/Running Salt/running-salt-medium-pink.png'
            ],
            [
                'group_name' => 'Running Salt', 
                'variant_name' => 'Dark Pink', 
                'spec_key' => 'Weight (Mesh)', 'spec_value' => '20–50', 
                'image' => 'images/Products/Edible Salt/Running Salt/running-salt-dark-pink.png'
            ],
        ]);


        // 2. Bath Salt
        $bath = Product::create([
            'name' => 'Bathing Salt',
            'slug' => 'bathing-salt',
            'image' => 'images/Products/bath-salt.jpg', // ✅ Main Page Image (Original)
            'short_description' => 'Relax and feel fresh with our natural Himalayan Bath Salts.',
            'long_description' => "Himalayan Bath Salt is known for its detoxifying properties. Soaking in pink salt water can soothe muscle aches, improve circulation, and soften the skin.\n\nIt provides a therapeutic experience similar to swimming in the ocean, leaving you refreshed and energized.",
        ]);

        $bath->benefits()->createMany([
            ['benefit' => 'Detoxifies the body by balancing systemic pH.'],
            ['benefit' => 'Improves hydration by providing trace minerals.'],
            ['benefit' => 'Reduces muscle cramps by improving minerals and hydration.'],
            ['benefit' => 'Helps balance blood sugar and supports hormone balance.'],
        ]);

        $bath->variants()->createMany([
            [
                'group_name' => 'Crystal Salt Chunks', 
                'variant_name' => 'Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 cm', 
                'image' => 'images/Products/Bath Salt/Crystal-Salt-Chunks(Pink).jpg'
            ],
            [
                'group_name' => 'Crystal Salt Granules', 
                'variant_name' => 'Light Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 mm', 
                'image' => 'images/Products/Bath Salt/Crystal-Salt-Granules(Light-Pink).jpg'
            ],
            [
                'group_name' => 'Crystal Salt Granules', 
                'variant_name' => 'Medium Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 mm', 
                'image' => 'images/Products/Bath Salt/Crystal-Salt-Granules(Medium-Pink).jpg'
            ],
            [
                'group_name' => 'Crystal Salt Granules', 
                'variant_name' => 'Dark Pink', 
                'spec_key' => 'Size', 'spec_value' => '2–5 mm', 
                'image' => 'images/Products/Bath Salt/Crystal-Salt-Granules(Dark-Pink).jpg'
            ],
        ]);


        // 3. Salt Lamps
        $lamps = Product::create([
            'name' => 'Salt Lamps',
            'slug' => 'salt-lamps',
            'image' => 'images/Products/lamp-salt.jpeg', // ✅ Main Page Image (Original)
            'short_description' => 'Beautiful handcrafted salt lamps to elevate your home decor with a warm, natural glow.',
            'long_description' => "Himalayan Salt Lamps are made from natural crystal salt blocks. They emit a warm, amber glow and are believed to release negative ions that purify the air and improve mood.\n\nEach lamp is hand-carved and unique, making it a perfect addition to your home decor or office.",
        ]);

        $lamps->benefits()->createMany([
            ['benefit' => 'Purifies the air by neutralizing ions.'],
            ['benefit' => 'Reduces allergy and asthma symptoms.'],
            ['benefit' => 'Increases energy levels and reduces stress.'],
            ['benefit' => 'Improves sleep quality.'],
        ]);

        $lamps->variants()->createMany([
            ['group_name' => 'Lamps', 'variant_name' => 'Natural Shapes', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Natural-Shapes.jpg'],
            ['group_name' => 'Lamps', 'variant_name' => 'Geometrical Shapes', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Geometrical-Shapes.jpeg'],
            ['group_name' => 'Lamps', 'variant_name' => 'Figure Shapes', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Figure-Shapes.png'],
            ['group_name' => 'Lamps', 'variant_name' => 'USB Lamps', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Usb-Lamps.png'],
            ['group_name' => 'Lamps', 'variant_name' => 'Night Light Lamps', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Night-Light-Lamps.png'],
            ['group_name' => 'Lamps', 'variant_name' => 'Fire Bowl Lamps', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Fire-Bowl-Lamps.jpg'],
            ['group_name' => 'Lamps', 'variant_name' => 'Iron Basket Lamps', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Iron-Basket-Lamps.png'],
            ['group_name' => 'Lamps', 'variant_name' => 'Wooden Basket Lamps', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Lamp Salt/Wooden-Basket-Lamps.png'],
        ]);


        // 4. Salt Candle Holders
        $candles = Product::create([
            'name' => 'Salt Candle Holders',
            'slug' => 'salt-candle-holders',
            'image' => 'images/Products/salt-candle-holder.jpeg', // ✅ Main Page Image (Original)
            'short_description' => 'Create a soothing atmosphere with Salt Candle Holders.',
            'long_description' => "These candle holders are crafted from pure Himalayan salt. When a candle is lit inside, they emit a soft, romantic glow that enhances the ambiance of any room.\n\nThey are perfect for dinner tables, bathrooms, or meditation spaces.",
        ]);

        $candles->benefits()->createMany([
            ['benefit' => 'Creates a relaxing and romantic atmosphere.'],
            ['benefit' => 'Releases negative ions to cleanse the air.'],
            ['benefit' => 'Perfect for meditation and yoga spaces.'],
            ['benefit' => 'Hand-carved unique designs.'],
        ]);

        $candles->variants()->createMany([
            ['group_name' => 'Candle Holders', 'variant_name' => 'Natural Shapes', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Salt Candle Holder/natural-shapes.png'],
            ['group_name' => 'Candle Holders', 'variant_name' => 'Geometrical Shapes', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Salt Candle Holder/geomatrical-shapes.png'],
            ['group_name' => 'Candle Holders', 'variant_name' => 'Cone Shape', 'spec_key' => null, 'spec_value' => null, 'image' => 'images/Products/Salt Candle Holder/cone-shape.png'],
        ]);


        // 5. Salt Culinary Products
        $culinary = Product::create([
            'name' => 'Salt Culinary Products',
            'slug' => 'salt-culinary',
            'image' => 'images/Products/salt-ulinary.jpeg', // ✅ Main Page Image (Original)
            'short_description' => 'Elevate your cooking with Salt Blocks and Plates.',
            'long_description' => "Himalayan Salt Blocks and Plates are a unique way to cook and serve food. They impart a subtle salty flavor and are perfect for grilling, chilling, or serving sushi and cheeses.\n\nThey naturally conduct heat and hold temperature for long periods.",
        ]);

        $culinary->benefits()->createMany([
            ['benefit' => 'Adds a rich mineral flavor to food.'],
            ['benefit' => 'Naturally anti-microbial surface.'],
            ['benefit' => 'Retains temperature (hot or cold) for long periods.'],
            ['benefit' => 'Perfect for presentation.'],
        ]);

        // ✅ Updated Variants with NEW Images
        $culinary->variants()->createMany([
            [
                'group_name' => 'Culinary', 
                'variant_name' => 'Salt Crockery', 
                'spec_key' => null, 'spec_value' => null, 
                'image' => 'images/Products/Culinary Salt/Salt-Crockery.png'
            ],
            [
                'group_name' => 'Culinary', 
                'variant_name' => 'Salt Plates', 
                'spec_key' => null, 'spec_value' => null, 
                'image' => 'images/Products/Culinary Salt/Salt-Plate.png'
            ],
        ]);


        // 6. Salt Tiles
        $tiles = Product::create([
            'name' => 'Salt Tiles',
            'slug' => 'salt-tiles',
            'image' => 'images/Products/salt-tiles.jpeg', // ✅ Main Page Image (Original)
            'short_description' => 'Build healthy spaces with Himalayan Salt Tiles.',
            'long_description' => "Salt tiles and bricks are used to build salt walls, salt rooms, and caves for therapy. They are popular in spas, gyms, and homes for their aesthetic and health benefits.\n\nWhen backlit, they create a stunning visual effect.",
        ]);

        $tiles->benefits()->createMany([
            ['benefit' => 'Used for Speleotherapy (Salt Room Therapy).'],
            ['benefit' => 'Improves respiratory health.'],
            ['benefit' => 'Aesthetically stunning with backlighting.'],
            ['benefit' => 'Natural air ionizer.'],
        ]);

        $tiles->variants()->createMany([
            ['group_name' => 'Tiles', 'variant_name' => 'Salt Tile', 'spec_key' => 'Weight', 'spec_value' => 'Approx 4.0 kg', 'image' => 'images/Products/Salt Tiles/salt-tile-4kg.jpg'],
            ['group_name' => 'Tiles', 'variant_name' => 'Salt Tile', 'spec_key' => 'Weight', 'spec_value' => 'Approx 2.2 kg', 'image' => 'images/Products/Salt Tiles/salt-tile-2.2kg.png'],
            ['group_name' => 'Tiles', 'variant_name' => 'Salt Tile (One Side Rough)', 'spec_key' => 'Weight', 'spec_value' => 'Approx 2.0 kg', 'image' => 'images/Products/Salt Tiles/salt-tile-onesided-rough-2KG.jpg'],
            ['group_name' => 'Tiles', 'variant_name' => 'Salt Tile', 'spec_key' => 'Weight', 'spec_value' => 'Approx 1.0 kg', 'image' => 'images/Products/Salt Tiles/salt-tile-1kg.jpg'],
            ['group_name' => 'Tiles', 'variant_name' => 'Salt Tile (Square)', 'spec_key' => 'Weight', 'spec_value' => 'Approx 4.3 kg', 'image' => 'images/Products/Salt Tiles/salt-squre-4.4kg.png'],
        ]);
    }
}