<?php

namespace Database\Seeders;

use App\Models\video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class videoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        video::factory()->hascomments(10)->haslikes(10)->count(10)->create();
        
    }
}
