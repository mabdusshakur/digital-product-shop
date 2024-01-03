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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('web_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email')->nullable();
            $table->longText('iframe_map_link')->nullable();
            $table->longText('delivery_policy')->nullable();
            $table->longText('return_policy')->nullable();
            $table->longText('privacy_policy')->nullable();
            $table->longText('custom_script_element')->nullable();
            $table->longText('custom_head_element')->nullable();
            $table->string('currency_unicode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
