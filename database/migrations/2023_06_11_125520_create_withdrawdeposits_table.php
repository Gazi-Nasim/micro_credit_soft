<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawdepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawdeposits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id',20);
            $table->bigInteger('deposit_id',20);
            $table->decimal('amount',10,2);
            $table->dateTime('date');
            $table->enum('status', ['pending', 'approved', 'release'])->default('pending');
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
        Schema::dropIfExists('withdrawdeposits');
    }
}
