<?php

use App\DiscountCode;
use Illuminate\Database\Seeder;

class CouponCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DiscountCode::insert([
                'discount_code' => 'JPDISKON0'.$i, 
                'discount_percentage' => rand($i,90)
            ]);
        }
    }
}
