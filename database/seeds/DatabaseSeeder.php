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
        $this->call(SuppliersTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(BusinessTableSeeder::class);
        $this->call(CompanyProfileTableSeeder::class);
        $this->call(NewsImgTableSeeder::class);
        $this->call(ConstructionTableSeeder::class);
        $this->call(ConstructionPropertyTableSeeder::class);
        $this->call(ConstructionContentsTableSeeder::class);


    }
}
