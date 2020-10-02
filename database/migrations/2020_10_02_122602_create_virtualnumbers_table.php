<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualnumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('virtualnumbers', function(Blueprint $table)
		{
			$table->integer(''ID'', true);
			$table->text('number');
			$table->integer('user_id')->default(-1);
			$table->integer('provider_id')->nullable()->default(0);
			$table->integer('premiumclass_id')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('virtualnumbers');
	}

}
