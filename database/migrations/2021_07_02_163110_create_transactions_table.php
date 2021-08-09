<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->longText('token')->nullable();
            $table->string('user_id')->nullable();
            $table->string('agent_id')->nullable();
            $table->longText('customer')->nullable();
            $table->longText('payment_token')->nullable();
            $table->double('amount', 11, 2)->nullable();
            $table->string('currency')->nullable();
            $table->double('fees', 11, 2)->nullable();
            $table->integer('first_4')->nullable();
            $table->integer('last_6')->nullable();
            $table->string('status')->nullable();
            $table->longText('object')->nullable();
            $table->longText('other_details')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('address')->nullable();
            $table->string('package_name')->nullable();
            $table->string('card_type')->nullable();
            $table->longText('charge')->nullable();
            $table->text('merchant_error')->nullable();
            $table->integer('merchant_id')->nullable();
            $table->tinyInteger('is_payment_token_alive')->default(1)->nullable();
            $table->string('random_key')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
