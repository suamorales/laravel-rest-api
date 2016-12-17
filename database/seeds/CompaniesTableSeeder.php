// /database/migrations/seeds/CompaniesTableSeeder.php
<?php
 
use Illuminate\Database\Seeder;
 
class CompaniesTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('companies')->delete();
 
        $companies = array(
            ['id' => 1, 'name' => 'Mavrck', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Tesla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Uber', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'AirBnb', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('companies')->insert($companies);
    }
 
}
 