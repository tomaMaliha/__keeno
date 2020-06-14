<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Product::create([
            'category_id'=>1,
            'title'=>'iPhone',
            'description'=>'It a smartphone made by Apple company which is best in its security.',
            'image'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-x-new-1.jpg',
            'is_featured'=>1,
            'price'=>'BDT75000',
            'rating'=>'4.3',
        ]);
        
        Product::create([
            'category_id'=>2,
            'title'=>'Ladies Dress',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://cdn11.bigcommerce.com/s-jxscrnxzfz/images/stencil/700x659/products/255/1259/Women-Dress-Women-Wedding-Party-Dresses-Female-Robe-Chiffon-Lace-Dress-Maxi-Long-Gowns-Elegant-Ladies__22254.1575213022.jpg?c=1&imbypass=on',
            'is_featured'=>1,
            'price'=>'BDT3000',
            'rating'=>'4.3',
        ]); 
        
        Product::create([
            'category_id'=>3,
            'title'=>'Hand Bag',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://priyoshop.com/content/images/thumbs/0108281_multicolor-check-design-ladies-leather-hand-bag-set-1096bl_550.jpeg',
            'is_featured'=>0,
            'price'=>'BDT1500',
            'rating'=>'4.3',
        ]); 
        
        Product::create([
            'category_id'=>2,
            'title'=>'Ladies Dress',
            'description'=>'It a Stylish Bag made by Gucci company which is best in its Fashion sense.',
            'image'=>'https://4.imimg.com/data4/FC/YP/MY-13199299/1-500x500.jpg',
            'is_featured'=>1,
            'price'=>'BDT1000',
            'rating'=>'4.3',
        ]); 
        
        Product::create([
            'category_id'=>4,
            'title'=>'Shoes for Girls',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
            'is_featured'=>0,
            'price'=>'BDT2000',
            'rating'=>'4.3',
        ]); 
        Product::create([
            'category_id'=>1,
            'title'=>'Android Mobile',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
            'is_featured'=>0,
            'price'=>'BDT20000',
            'rating'=>'4.3',
        ]);
        Product::create([
            'category_id'=>2,
            'title'=>'Dress for Girls',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
            'is_featured'=>1,
            'price'=>'BDT2000',
            'rating'=>'4.3',
        ]);
        Product::create([
            'category_id'=>3,
            'title'=>'Hand Bag',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
            'is_featured'=>1,
            'price'=>'BDT2000',
            'rating'=>'4.3',
        ]);
        Product::create([
            'category_id'=>4,
            'title'=>'Shoes for Boys',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
            'is_featured'=>1,
            'price'=>'BDT2000',
            'rating'=>'4.3',
        ]);
        Product::create([
            'category_id'=>4,
            'title'=>'Shoes for Boys',
            'description'=>'Cheap canvas shoes girl, Buy Directly from China Suppliers:QGXSSHI Children Summer Shoes Net yarn Design Kids Girls Sneakers Fashion Casual Canvas.',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
            'is_featured'=>1,
            'price'=>'BDT2000',
            'rating'=>'4.3',
        ]);
    }
}