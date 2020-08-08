<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->unsignedBigInteger('manufacturer_id')->nullable()->comment('کارخانه تولید کننده');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('cascade');
            $table->string('ean_code')->nullable()->comment('کد مرجع در ژاپن و شورهای اسیایی');
            $table->string('upc_code')->nullable()->comment('کد مرجع مرسوم در امریکا و...');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('body')->nullable();
            $table->integer('quantity')->default(1)->comment('تعداد');
            $table->integer('minimal_quantity')->default(1)->comment('تعداد');
            $table->string('price')->default(0);
            $table->string('wholesale_price')->default(0)->comment('قیمت عمده فروشی');
            $table->string('weight')->nullable();
            $table->string('depth')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('unit')->nullable();
            $table->string('out_of_stock')->default(0);
            $table->string('is_virtual')->default(0);
            $table->string('uploaded_file')->nullable();
            $table->string('additional_shipping_cost')->default(0)->comment('هزینه حمل اضافه');
            $table->string('status')->comment('۱ فعال ۲- غیر فعال');
            $table->string('available_for_order')->nullable()->comment('اماده فروش');
            $table->string('show_only')->nullable()->comment('فقط نمایش و غیر قابل سفارش');
            $table->string('tags')->nullable();
            $table->string('lang');
            $table->string('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
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
        Schema::dropIfExists('products');
    }
}
