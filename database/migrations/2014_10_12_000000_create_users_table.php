<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_login', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',60)->unique();
            $table->timestamp('email_verified_at')->nullable();

    
            $table->string('password');
            $table->string('login_type');
            $table->string('login_status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
