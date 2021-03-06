<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned()->nullable();
            $table->string('original_name');
            $table->string('storage_name');
            $table->string("extension");
            $table->string("specialite");
            $table->string("note");
            $table->json("meta_data");
            $table->tinyInteger("has_related_icon");
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            $table->boolean("downloaded")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
