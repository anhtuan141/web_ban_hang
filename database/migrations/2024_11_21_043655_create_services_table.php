<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->text('images')->nullable();
            $table->text('summary')->nullable();
            $table->text('content')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('qty')->nullable();
            $table->integer('status')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->integer('parent_id')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('title')->nullable();
            $table->text('image_share')->nullable();
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
        Schema::dropIfExists('services');
    }
}
