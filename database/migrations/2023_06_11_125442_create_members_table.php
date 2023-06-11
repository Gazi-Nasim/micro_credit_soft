<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->bigint('branch_id', 20)->nullable();
            $table->bigint('user_id', 20)->nullable();
            $table->enum('status', ['pending', 'approved', 'denied'])->default('pending');
            $table->string('email', 100)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('business_name', 100)->nullable();
            $table->string('member_no', 50)->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->string('city', 191)->nullable();
            $table->text('address')->nullable();
            $table->string('credit_source', 191)->nullable();
            $table->string('photo', 191)->nullable();
            $table->string('nid', 191)->nullable();
            $table->string('birth_certificate', 191)->nullable();
            $table->string('guaranter_name', 50);
            $table->string('guaranter_id', 50);
            $table->string('guaranter_address', 50);

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
        Schema::dropIfExists('members');
    }
}
