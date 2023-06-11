<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();            
            $table->bigInteger('member_id',20);
            $table->decimal('amount',10,2);
            $table->decimal('interest',10,2);
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'withdrawn'])->default('active');
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
        Schema::dropIfExists('deposits');
    }
}
