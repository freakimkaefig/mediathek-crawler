<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->truncate();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'email' => 'test',
				'password' => '$2y$10$1F6zZz8fg6gwXTgHP8i4cePHkCncfhfTCd.NmYO3n8nePsn8nf6fa',
				'password_temp' => '',
				'code' => '',
				'active' => 1,
				'remember_token' => 'slZJUh4XKDEq1CDhc1HpfBqclBjers247kKzDd5dN4Y9lVg9uFa3VjGDphXa',
				'created_at' => '2014-07-08 12:56:04',
				'updated_at' => '2014-08-12 12:44:34',
			),
			1 => 
			array (
				'id' => 2,
				'email' => 'semmel-tobi@gmx.de',
				'password' => '$2y$10$xgxBlGlXy5jKKVhczQYKe.0tlEP9w2Ou8fHRTtsvO6ZUp6UG5cuNW',
				'password_temp' => '',
				'code' => '',
				'active' => 1,
				'remember_token' => 'cUdrXTWN50aUdWUA717VkZtN6KBrPhnVIs23KbIxGj84G0fDO14ezPYWUwnh',
				'created_at' => '2014-07-22 10:20:43',
				'updated_at' => '2014-08-18 13:08:32',
			),
		));
	}

}
