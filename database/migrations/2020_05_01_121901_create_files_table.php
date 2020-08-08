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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_file_id');
            $table->foreign('category_file_id')->references('id')->on('category_files')->onDelete('cascade');
            $table->string('title');
            $table->string('file',255);
            $table->integer('type')->default(2)->comment('1 = sound , 2 = video , 3=image');
            $table->integer('sumLike')->default(0);
            $table->integer('arrangement')->default(0);
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
        Schema::dropIfExists('files');
    }
}
