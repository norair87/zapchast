<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nexts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('name',255)->unique();
                        $table->integer('price');
                        $table->integer('deale');
                        $table->timestamp('entiy_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nexts');
	}

}
