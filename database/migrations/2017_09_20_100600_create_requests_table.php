<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('endpoint_id');
            $table->foreign('endpoint_id')
                ->references('id')->on('endpoints');

            $table->unsignedInteger('profile_id');
            $table->foreign('profile_id')
                ->references('id')->on('profiles');

            $table->string('error_message')
                ->nullable();

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
        Schema::dropIfExists('requests');
    }
}
