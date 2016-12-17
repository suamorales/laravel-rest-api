<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
      Model::unguard();
      
      $this->call('ConversationsTableSeeder');
      $this->call('CompaniesTableSeeder');
  		$this->call('UsersTableSeeder');
    }
}
