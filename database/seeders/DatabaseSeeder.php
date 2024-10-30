<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Location;
use App\Models\Option;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 
use Carbon\Carbon; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categoryName = [
            'Cho thuê phòng trọ',
            'Nhà cho thuê',
            'Cho thuê mặt bằng'
        ];

        foreach ($categoryName as $item){
            
            try{
                dump($item);
                Category::create([
                    'name' => $item,
                    'title' => $item,
                    'description' => $item,
                    'slug' => Str::slug($item),
                    'created_at' => Carbon::now(),
                ]);
            } catch(\Exception $exeption){
                
            }
        }
        
        $locationName = [
            'Hà Nội',
            'Hồ Chí Minh',
            'Đà Nẵng',
            'Nghệ An',
        ];
        
        foreach ($locationName as $item){
            
            try{
                dump($item);
                Location::create([
                    'name' => $item,
                    'title' => $item,
                    'description' => $item,
                    'parent_id' => 0,
                    'type' => 1,
                    'slug' => Str::slug($item),
                    'created_at' => Carbon::now(),
                ]);
            } catch(\Exception $exeption){
                
            }
        }


        foreach (['Nam', 'Nữ'] as $item){
            
            try{
                dump($item);
                Option::create([
                    'name' => $item,
                    'type' => 1,
                    'created_at' => Carbon::now(),
                ]);
            } catch(\Exception $exeption){
                
            }
        }

    }
}
