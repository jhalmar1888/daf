<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Empresa;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use  NumberToWords\NumberToWords ;
use NumerosEnLetras;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {       
        $empresas = ['0' => 'Seleccionar...'] + Empresa::select('id', 'NomEmpresa')->orderBy('NomEmpresa', 'asc')->pluck('NomEmpresa','id')->toArray();
        $cuenta = ['0' => 'Seleccionar...'] + Empresa::select('id', 'Cuenta')->orderBy('Cuenta', 'asc')->pluck('Cuenta','id')->toArray();
        //dd($empresas);
        return view('products.create', compact('empresas', 'cuenta'));
    }

    public function store(ProductRequest $request)
    {       

       
        $product = new Product;
               
        $product->Ordenpago   = $request->Ordenpago;
        $product->Cheque      = $request->Cheque;
        $product->Fecha         = $request->Fecha;
        $product->Objeto        = $request->Objeto;
        $product->Detalle       = $request->Detalle;

        $var = $request->MontoNumero;
        $num = NumerosEnLetras::convertir("$var");
        $product->MontoLiteral = $num;

        $product->DocRespaldo  = $request->DocRespaldo;
        $product->MontoNumero  = $request->MontoNumero;
        
        $product->NomEmpresa = $request->NomEmpresa;
        $product->Cuenta      = $request->Cuenta;

//dd($product);
        $product->save();

        return redirect()->route('products.index', ['products' => $product->id])
                          ->with('info', 'El cheque fue guardado');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $empresas = ['0' => 'Seleccionar...'] + Empresa::select('id', 'Empresa')->orderBy('Empresa', 'asc')->pluck('Empresa','id')->toArray();
        $cuenta = ['0' => 'Seleccionar...'] + Empresa::select('id', 'Cuenta')->orderBy('Cuenta', 'asc')->pluck('Cuenta','id')->toArray();
        return view('products.edit', compact('product','empresas', 'cuenta'));
    }

    public function update(ProductRequest $request, $id)
    {    
        $product = Product::find($id);
        
        $product->Ordenpago   = $request->Ordenpago;
        $product->Cheque      = $request->Cheque;
        $product->Fecha         = $request->Fecha;
        $product->Objeto        = $request->Objeto;

        $var = $request->MontoNumero;
        $num = NumerosEnLetras::convertir("$var");
        $product->MontoLiteral = $num;

        $product->Detalle       = $request->Detalle;
        $product->DocRespaldo  = $request->DocRespaldo;
        $product->MontoNumero  = $request->MontoNumero;
        $product->NomEmpresa    = $request->NomEmpresa;
        $product->Cuenta      = $request->Cuenta;


        $product->save();

        return redirect()->route('products.index')
                          ->with('info', 'El cheque fue actualizado');
    }

    public function show($id)
    {
        
        $product = Product::find($id);
     
        return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('info', 'El cheque fue eliminado');
    }

    public function imprimir ($id) {
        $product = Product::findOrFail($id);
        //dd($product);
        $fileName = md5($product->Ordenpago . Carbon::now());
        $basePathJasper = storage_path('/jrxml/') . 'OrdenPago.jasper';
        $basePathGenerated = public_path('/tmp/') . $fileName;

        if(\Storage::exists($basePathGenerated))
            \Storage::delete($basePathGenerated);

        $parametros = array(
            'id' => $product->id,
        );

        $database = config('database.connections.pgsql');
        $database['driver'] = 'postgres';
        //dd($parametros);
        $reporteJasper = \JasperPHP::process(
            $basePathJasper,
            $basePathGenerated,
            array('pdf', 'xls'),
            $parametros,
            $database
        );
        //dd($reporteJasper->output());
        //return ($reporteJasper->output());
        $reporteJasper->execute();
        return response()->download($basePathGenerated . '.pdf', 'Orden pago ' . $product->Ordenpago . '.pdf');
    }
    
}
