<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->string('name');
            $table->string('code')->nullable();
            $table->float('regular_price', 10, 2)->nullable();
            $table->float('selling_price', 10, 2)->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('image')->nullable();
            $table->integer('hit_count')->default(0);
            $table->integer('sells_count')->default(0);
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
};
