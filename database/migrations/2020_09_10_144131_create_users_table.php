<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->string('username', 50);
			$table->string('email', 50)->unique('unique_email');
			$table->string('password', 50);
			$table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('disabled')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
