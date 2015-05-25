<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => '孟祥申', 'email' => 'wqnnjm@gmail.com', 'password' => Hash::make('123456'), 'admin' => true]);
        User::create(['name' => 'Shalery', 'email' => 'wqnnjm@163.com', 'password' => Hash::make('123456')]);
    }

}

