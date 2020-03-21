<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('name_as_ic')->nullable();
            $table->string('ic')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->integer('bank_id')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('amount')->nullable();
            $table->integer('is_active')->default(0);
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
        Schema::dropIfExists('sales');
    }
}
