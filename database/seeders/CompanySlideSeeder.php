<?php

namespace Database\Seeders;

use App\Models\company_slide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        company_slide::create(['name' => 'slide1' , 'percentege_value'=>'3' , 'value'=>'100']);
        company_slide::create(['name' => 'slide2', 'percentege_value'=>'3' , 'value'=>'100']);
        company_slide::create(['name' => 'slide3', 'percentege_value'=>'3' , 'value'=>'100']);    }
}
