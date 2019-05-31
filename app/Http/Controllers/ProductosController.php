<?php

namespace App\Http\Controllers;
use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        //$productos=BD::table('productos')->get();
        //->paginate(7); muestra 7 registro por paginador
        //return view('admin/home',['produtos'=>$productos],['searchText'=>$query]);
        $productos = Productos::all();
        return view('Admin/home',['productos'=>$productos]);
    }

    public function listproductos()
    {
        //$productos=BD::table('productos')->get();
        //->paginate(7); muestra 7 registro por paginador
        //return view('admin/home',['produtos'=>$productos],['searchText'=>$query]);
        $productos = Productos::all();
        return (['productos'=>$productos]);
    }

    //buscar
    public function seach(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            //% em where siginifica buscar palabra sea en inicio o fin de la palabra
            $productos=BD::table('productos')->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','desc');
            //->paginate(7); muestra 7 registro por paginador
            return view('admin/home',['produtos'=>$productos],['searchText'=>$query]);
        }
    }
    

    public function action(Request $request)
    {   


        if ($request->input('producto-status') == 'new')
        {
            $producto = New Productos;
            $producto->name=$request->input('producto-name');
            $producto->stock=$request->input('producto-stock');
            $producto->precios=$request->input('producto-precios');
            
            $producto->save();

            return Redirect::to('/home');
        }
        elseif($request->input('producto-status') == 'update')
        {
            $producto = Productos::find($request->input('producto-id'));
            $producto->name=$request->input('producto-name');
            $producto->stock=$request->input('producto-stock');
            $producto->precios=$request->input('producto-precios');
            
            $producto->save();

        return Redirect::to('/home');

        }
        else
        {
            
            Productos::destroy($request->input('producto-id'));

            return Redirect::to('/home');
        }

    }

}