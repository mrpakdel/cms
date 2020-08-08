<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('summary');
            $table->text('description');
            $table->string('image');
            $table->string('tags');
            $table->string('lang','60');
            $table->timestamps();
        });

        Schema::create('category_product_product', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('category_product_id');
            $table->primary(['category_product_id','product_id']);
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
        Schema::dropIfExists('category_product_product');
        Schema::dropIfExists('category_products');
    }
}
