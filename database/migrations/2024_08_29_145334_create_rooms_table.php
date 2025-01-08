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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('avatqr')->nullable();
            $table->string('description', 300)->nullable();
            $table->bigInteger('city')->default(0);
            $table->bigInteger('district_id')->default(0);
            $table->bigInteger('wards_id')->default(0);
            $table->bigInteger('price')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->integer('area')->default(0);
            $table->string('apartment_number')->nullable();
            $table->string('full_address')->nullable();
            $table->text('contents')->nullable();
            $table->text('reason')->nullable();
            $table->date('expiration_date')->nullable()->comment('Ngày hết hạn');
            $table->bigInteger('category_id')->default(0);
            $table->bigInteger('auth_id')->default(0);
            $table->text('map')->nullable();
            $table->bigInteger('subject_id')->default(0);
            $table->text('images')->nullable();
            $table->text('images_public_id')->nullable();
            $table->text('video_link')->nullable()->comment('Link yt');
            $table->text('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
