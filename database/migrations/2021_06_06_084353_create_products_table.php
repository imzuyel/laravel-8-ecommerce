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
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('subcategory_id')
                ->nullable()
                ->constrained('sub_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('subsubcategory_id')
                ->nullable()
                ->constrained('sub_sub_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('product_name_en');
            $table->string('product_name_bn');
            $table->string('product_slug_en');
            $table->string('product_slug_bn');
            $table->string('product_code')->nullable();
            $table->string('product_qty');
            $table->string('product_tags_en')->nullable();
            $table->string('product_tags_bn')->nullable();
            $table->string('size')->nullable();
            $table->string('product_color')->nullable();
            $table->string('price');
            $table->string('discount')->nullable();
            $table->string('short_description_en')->nullable();
            $table->string('short_description_bn')->nullable();
            $table->longText('long_description_en');
            $table->longText('long_description_bn');
            $table->string('image')->nullable();
            $table->integer('hot_deals')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('special_offer')->nullable();
            $table->integer('special_deals')->nullable();
            $table->boolean('status')->default(true);
            $table->text('meta_keywords_en')->nullable();
            $table->text('meta_keywords_bn')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_description_bn')->nullable();
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
