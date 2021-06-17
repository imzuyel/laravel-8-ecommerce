<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name_en');
            $table->string('category_name_bn');
            $table->string('category_slug_en');
            $table->string('category_slug_bn');
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
