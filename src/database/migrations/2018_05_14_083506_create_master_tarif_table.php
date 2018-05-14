<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateMasterTarifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_tarifs', function(Blueprint $table) {
			$table->increments('id');
			$table->uuid('uuid', 191)->unique();
			$table->string('nama', 191)->unique();
			$table->string('dasar_hukum', 191)->unique();
			$table->boolean('status')->index();
			$table->integer('daftar_retribusi_id')->unsigned()->nullable()->index();
			$table->uuid('daftar_retribusi_uuid', 191)->index();
			$table->integer('user_id')->unsigned()->index();
            $table->integer('user_update')->unsigned()->index();
            NestedSet::columns($table);
			$table->timestamps();
			$table->softDeletes();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('master_tarifs');
    }
}
