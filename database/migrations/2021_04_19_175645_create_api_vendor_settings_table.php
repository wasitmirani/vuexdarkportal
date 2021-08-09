<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiVendorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_vendor_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('api_vendor_id')->nullable()->constrained('api_vendors');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->json('api_configuration')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->softDeletes();
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
        Schema::dropIfExists('api_vendor_settings');
    }
}
