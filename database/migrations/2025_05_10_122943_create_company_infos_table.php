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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('whatsapp');
            $table->json('phone');
            $table->json('fax')->nullable();
            $table->json('email');
            $table->json('working_hours');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('tiktok')->nullable();
            $table->text('vision');
            $table->text('mission');
            $table->json('company_logo')->nullable();
            $table->json('regulation')->nullable();
            $table->string('company_profile');
            $table->text('map_embed');
            $table->text('about_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
