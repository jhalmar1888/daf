<?php

namespace App;
use App\Empresa;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';
    /* protected $fillable = [
       'n_ordenpago',
       'n_cheque',
       'fecha',
       'objeto', 
       'detalle',
       'doc_respaldo', 
       'monto_numero',
       'monto_literal',  
       
       'nom_cheque',
       'n_cuenta',

       
    ]; */

    public function empresa () {
        return $this->belongsTo(Empresa::class, 'Cuenta');
    }

    public function empresas () {
        return $this->belongsTo(Empresa::class, 'NomEmpresa');
    }

}
