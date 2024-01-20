<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('coursename')->nullable();
            $table->string('username')->nullable();
            $table->bigInteger('instruc_id')->nullable();
            $table->string('description')->nullable();
            $table->double('courseprice');
            $table->integer('coursehours');
            $table->integer('Number_Chapter');
            $table->bigInteger('Cac_ID');
            $table->string('image')->nullable();
            $table->foreign('instruc_id')
                  ->references('id')
                  ->on('instructors')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('Cac_ID')
                  ->references('id')
                  ->on('coursecategory')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
