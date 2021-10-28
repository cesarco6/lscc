<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChoprospectsAddForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prospects', function (Blueprint $table) {
                        
            $table->foreign('seller_id')->references('id')->on('sellers')
            ->onDelete('set null')
            ->onUpdate('cascade');           
        });
    }

    /**
     * Reverse the migrations.
     *                              
     * @return void
     */
    public function down()
    {
        //
    }
}
