<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Ordenpago')->nullable();
            $table->string('Cheque')->nullable();
            $table->date('Fecha')->nullable();
            $table->mediumtext('Objeto')->nullable();
            $table->text('Detalle')->nullable();
            $table->string('DocRespaldo')->nullable();
            $table->string('MontoNumero')->nullable();
            $table->string('MontoLiteral')->nullable();            
            $table->integer('NomEmpresa')->unsigned()->nullable();
            $table->integer('Cuenta')->unsigned()->nullable();
            
            $table->timestamps();
            $table->foreign('Cuenta')->references('id')->on('Empresa'); 
            $table->foreign('NomEmpresa')->references('id')->on('Empresa');         
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product');
    }
}
