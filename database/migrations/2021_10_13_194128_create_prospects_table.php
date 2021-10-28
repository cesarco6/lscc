<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();            
            $table->bigInteger('seller_id')->unsigned()->nullable();           
            $table->string('name');
            $table->string('phone');
            $table->string('movil')->nullable(); 
            $table->string('typeofprod');                   
            $table->string('city');                       
            $table->text('review');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('cp')->nullable();;
            $table->date('regis_at');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('prospects');
    }
}
