<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanpayments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loan_id',20);
            $table->bigInteger('member_id',20);
            $table->date('paid_at');
            $table->decimal('late_penalties', 10, 2);
            $table->decimal('interest', 10, 2);
            $table->decimal('repayment_amount', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('loanpayments');
    }
}
