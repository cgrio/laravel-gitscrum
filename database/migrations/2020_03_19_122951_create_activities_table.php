<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index('fk_notes_user_id_idx');
            $table->integer('note_id')->unsigned()->nullable();
            $table->integer('issues_id')->unsigned()->nullable();
            $table->integer('workload')->nullable();
            $table->string('description', 120)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('activity');
    }
}
