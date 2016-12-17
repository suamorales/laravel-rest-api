// /database/migrations/seeds/ConversationsTableSeeder.php
<?php
 
use Illuminate\Database\Seeder;
 
class ConversationsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('conversations')->delete();
 
        $conversations = array(
            ['id' => 1, 'user_id' => 1, 'name' => 'convo 1',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'user_id' => 2,'name' => 'convo 2',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'user_id' => 3, 'name' => 'convo 3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('conversations')->insert($conversations);
    }
 
}