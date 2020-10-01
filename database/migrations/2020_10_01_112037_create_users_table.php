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
			$table->integer(''user_id'', true);
			$table->string(''username'', 50);
			$table->string(''email'', 50)->unique('unique_email');
			$table->string('password');
			$table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('disabled')->default(0);
			$table->string(''verification_code'', 50)->nullable();
			$table->integer('is_verified')->nullable()->default(0);
			$table->string(''first_name'', 100)->nullable();
			$table->string(''last_name'', 100)->nullable();
			$table->string(''profile_image'', 100)->nullable();
			$table->string(''bio'', 500)->nullable();
			$table->string(''slack_verification_token'', 100)->nullable();
			$table->string(''slack_access_token'', 100)->nullable();
			$table->integer('phone')->nullable();
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
