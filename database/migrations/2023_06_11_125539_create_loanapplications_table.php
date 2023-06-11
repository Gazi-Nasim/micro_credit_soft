<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanapplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanapplications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loan_product_id', 20);
            $table->bigInteger('member_id', 20);
            $table->date('first_payment_date');
            $table->date('release_date')->nullable();
            $table->decimal('applied_amount', 10, 2);
            $table->decimal('total_payable', 10, 2)->nullable();
            $table->decimal('total_paid', 10, 2)->nullable();
            $table->decimal('late_payment_penalties', 10, 2);
            $table->text('attachment')->nullable();
            $table->bigInteger('installment',20);
            $table->text('description')->nullable();
            $table->text('remarks')->nullable();
            $table->enum('status', ['pending', 'approved', 'denied'])->default('pending');
            $table->date('approved_date')->nullable();
            $table->bigInteger('approved_by',20)->nullable();
            $table->bigInteger('created_by',20)->nullable();
            $table->bigInteger('branch_id',20)->nullable();

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
        Schema::dropIfExists('loanapplications');
    }
}
