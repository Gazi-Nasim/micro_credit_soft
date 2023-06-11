<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->decimal('minimum_amount', 10, 2);
            $table->decimal('maximum_amount', 10, 2);
            $table->decimal('late_payment_penalties', 10, 2);
            $table->text('description')->nullable();
            $table->decimal('interest_rate', 10, 2);
            $table->integer('term', 11);
            $table->string('term_period', 15);
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('loanproducts');
    }
}
