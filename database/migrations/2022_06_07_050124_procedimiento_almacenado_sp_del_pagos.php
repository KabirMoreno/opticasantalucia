<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $procedimiento = "CREATE PROCEDURE SP_DEL_PAGOS (IN _Cod_pago bigint(20))
        BEGIN
              DELETE FROM tbl_pagos WHERE Cod_pago  = _Cod_pago;
        END";
        DB::unprepared($procedimiento);

    }
    ////PARA LLAMAR AL PROCESO ALMACENADO
    ////CALL SP_DEL_PAGO (3)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_PAGOS";
        DB::unprepared($procedimiento);
    }
};
