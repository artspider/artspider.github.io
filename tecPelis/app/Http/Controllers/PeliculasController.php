<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller {

    const MODEL = "App\Peliculas";

    use RESTActions;

    function index(){
        $m = self::MODEL;
        return response()->json($m::all(), '200');
    }

    function show($id){
        $pelicula = Peliculas::find($id);
        return 'metodo show: ' . $pelicula ;
    }

    public function create(Request $request)
    {
        $m =self::MODEL;
        $pelicula = $m::create($request->all());
        return  response()->json($pelicula, '200');
    }

}
