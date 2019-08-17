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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('username')->unique();
            $table->string('prodi1')->nullable();
            $table->string('prodi2')->nullable();
            $table->string('nilai')->nullable();
            $table->string('log');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tempat_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('asal_sek',254)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->bigInteger('nik')->nullable();
            $table->bigInteger('nisn')->nullable();
            $table->bigInteger('noTelp')->nullable();//j
            $table->bigInteger('noorangtua')->nullable();//j
            $table->string('Gdarah')->nullable();//j
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
