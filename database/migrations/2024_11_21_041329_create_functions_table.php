<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->id();
            $table->string('icon', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('link', 255)->nullable();
            $table->text('controller');
            $table->text('action');
            $table->integer('parent_id')->nullable();
            $table->integer('show_menu')->default(0);
            $table->integer('status')->nullable();
            $table->integer('sort')->nullable();
            $table->integer('is_allow')->nullable();
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
        Schema::dropIfExists('functions');
    }
}
