<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'email' => 'test@gmail.com',
			'password' => Hash::make('test'),
			)
		);
	}

}
