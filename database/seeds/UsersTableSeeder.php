// /database/migrations/seeds/UsersTableSeeder.php
<?php
 
use Illuminate\Database\Seeder;
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            ['id' => 1, 'name' => 'Josh Bob', 'email' => 'josh@gmail.com', 'password' => 'test', 'company_id' => 1,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Alex Anderson', 'email' => 'alex@gmail.com', 'password' => 'test', 'company_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Tom Thomilson', 'email' => 'tom@gmail.com', 'password' => 'test', 'company_id' => 1,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Julia Juniper', 'email' => 'julia@gmail.com', 'password' => 'test', 'company_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Jad Abumrad', 'email' => 'jad@gmail.com', 'password' => 'test', 'company_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Robert Krulwich', 'email' => 'robert@gmail.com', 'password' => 'test', 'company_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}