<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('url');
            $table->string('image');
			$table->timestamps();
		});

        Schema::create('team_section', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('team_id')->unsigned()->index();
            $table->integer('section_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::create('post_section', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index();
            $table->integer('section_id')->unsigned()->index();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sections');
        Schema::drop('team_section');
        Schema::drop('post_section');
	}

}
