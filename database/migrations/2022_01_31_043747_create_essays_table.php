<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateEssaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essays', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('student_id');
            $table->string('student_name');
            $table->string('file_code');
            $table->string('post_image')->default('default.jpg');
            $table->string('post_thumbnail')->default('default.jpg');
            $table->boolean('isapproved')->default(0);
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
        Schema::dropIfExists('essays');
    }
}
