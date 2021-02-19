<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('bio', 1000);
            $table->string('catchphrase');
            $table->string('profile');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->foreignId('sub_course_id')->nullable()->references('id')->on('sub_courses')->nullable();

            $table->integer('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
