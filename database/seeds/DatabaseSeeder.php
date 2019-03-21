<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // php artisan db:seed
        // php artisan help make:model
        factory(App\Model\Product::class,50)->create();
        factory(App\Model\Review::class,300)->create();
        // https://github.com/fzaninotto/Faker
    }
}
