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
        if (!Schema::hasTable('locations')) {
            Schema::create('locations', function (Blueprint $table) {
                $table->id();
                $table->string('name')->notNullable();
                $table->string('slug')->notNullable();
                $table->string('title')->nullable();
                $table->string('description')->nullable();
                $table->string('avatar')->nullable();
                $table->tinyInteger('status')->default(1)->notNullable();
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->tinyInteger('type')->default(1)->comment('1 tỉnh thành, 2 là quận huyện, 3 là phường xã')->notNullable();
                $table->timestamps();
            });
        }
        // Schema::create('locations', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('slug')->unique();
        //     $table->string('title')->nullable();
        //     $table->string('description')->nullable();
        //     $table->tinyInteger('status')->default(1);
        //     $table->bigInteger('parent_id')->nullable();
        //     $table->tinyInteger('type')->default(1)->comment('1 tỉnh thành, 2 là quận huyện, 3 là phường xã');
        //     $table->timestamps();   
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
