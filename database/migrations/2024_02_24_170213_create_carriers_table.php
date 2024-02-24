<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarriersTable extends Migration
{
  public function up()
  {
    Schema::create('carriers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('address');
      $table->string('contact_number');
      $table->string('email');
      $table->string('website');
      $table->string('type');
      $table->string('status');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('carriers');
  }
}
