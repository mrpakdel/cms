<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_portfolios', function (Blueprint $table) {
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

        Schema::Create('category_portfolio_portfolio',function(Blueprint $table){
            $table->integer('portfolio_id');
            $table->integer('category_portfolio_id');
            $table->primary(['category_portfolio_id','portfolio_id'],'cat_port_port_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_portfolios');
    }
}
