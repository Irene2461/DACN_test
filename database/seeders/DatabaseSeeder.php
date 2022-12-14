<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
    //     $categoryName = [
    //         'Cho thuê phòng trọ',
    //         'Nhà cho thuê',
    //         'Cho thuê mặt bằng'

    //     ];
    //     foreach ($categoryName as $item){
    //         try{
    //             dump($item);
    //             Category::create([
    //                 'name' => $item,
    //                 'title' => $item,
    //                 'description' => $item,
    //                 'slug' => Str::slug($item),
    //                 'created_at' => Carbon::now()
    
    //             ]);
    //         }catch (\Exception $exception){

    //         }
    //     }

    //     $locationName = [
    //         'Hồ Chí Minh',
    //         'Hà Nội',
    //         'Đà Nẵng',
    //     ];
    //     foreach ($locationName as $item){
    //         try{
    //             dump($item);
    //             Location::create([
    //                 'name' => $item,
    //                 'title' => $item,
    //                 'description' => $item,
    //                 'parent_id' => 0,
    //                 'type' => 1,
    //                 'slug' => Str::slug($item),
    //                 'created_at' => Carbon::now()
    
    //             ]);
    //         }catch (\Exception $exception){

    //         }
    //     }

    //     foreach (['Nam','Nữ'] as $item){
    //         try{
    //             dump($item);
    //             Location::create([
    //                 'name' => $item,
    //                 'type' => 1,
    //                 'created_at' => Carbon::now()
    
    //             ]);
    //         }catch (\Exception $exception){

    //         }
    //     }
    // }
        try {
            Admin::create([
                'name'       => 'Admin',
                'email'      => 'admin@gmail.com',
                'phone'      => '0937497677',
                'password'   => bcrypt('123456'),
                'created_at' => Carbon::now()
            ]);
        } catch (\Exception $exception) {
            Log::error("-------------- ". $exception->getMessage());
        }

    }
}
