<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thais', function(Blueprint $table)
		{
			$table->integer('arabic_id', true);
			$table->integer('datasurah_id')->default(0)->index('datasurah_id');
			$table->integer('ayat')->default(0);
			$table->text('text');
			$table->string('audio');
			$table->string('tafseer', 1000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thais');
	}

}
