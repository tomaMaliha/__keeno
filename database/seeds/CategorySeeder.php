<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'SmartPhone',
            'image'=>'https://cdn.pocket-lint.com/r/s/320x/assets/images/120309-phones-buyer-s-guide-best-smartphones-2020-the-top-mobile-phones-available-to-buy-today-image1-eagx1ykift.jpg?v1',
        ]); 
         Category::create([
            'name'=>'Ladies Wear',
            'image'=>'https://cdn11.bigcommerce.com/s-jxscrnxzfz/images/stencil/700x659/products/255/1259/Women-Dress-Women-Wedding-Party-Dresses-Female-Robe-Chiffon-Lace-Dress-Maxi-Long-Gowns-Elegant-Ladies__22254.1575213022.jpg?c=1&imbypass=on',
        ]); 
         Category::create([
            'name'=>'Bags',
            'image'=>'https://static.zara.net/photos///2019/S/1/1/p/6825/004/050/3/w/1920/6825004050_1_1_1.jpg?ts=1569338201237',
        ]); 
         Category::create([
            'name'=>'Shoes',
            'image'=>'https://ae01.alicdn.com/kf/HTB1b.sWRXXXXXcmXFXXq6xXFXXXu/QGXSSHI-Children-Summer-Shoes-Net-yarn-Design-Kids-Girls-Sneakers-Fashion-Casual-Canvas-Shoes-Girls-Student.jpg',
        ]); 
    }
}