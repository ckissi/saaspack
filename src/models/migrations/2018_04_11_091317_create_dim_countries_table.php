<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDimCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dim_countries', function(Blueprint $table)
		{
			$table->char('country_code', 2)->nullable()->index('idx_country_code');
			$table->string('country_name', 45)->nullable()->index('idx_country_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dim_countries');
	}

}
