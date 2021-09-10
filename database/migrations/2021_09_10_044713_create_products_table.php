<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('product_name',100);
            $table->string('product_slug',100);
            $table->text('description');
            $table->string('sku',100);
            $table->bigInteger('quantity');
            $table->bigInteger('alert_quantity')->default(0);
            $table->decimal('regular_price',18,2)->nullable();
            $table->decimal('sell_price',18,2);
            $table->string('image',255);
            $table->unsignedBigInteger('created_by');
            $table->tinyInteger('status')->default(1);
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
