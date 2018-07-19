<?php namespace almacen\Http\Controllers;

use almacen\Http\Requests;
use almacen\Http\Requests\ProductCreateRequest;
use almacen\Http\Requests\ProductUpdateRequest;
use almacen\Http\Controllers\Controller;
use almacen\Product;
use Session;
use Redirect;
use Illuminate\Http\Request;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// $user = Product::find(1);

		// var_dump($user);
		$rows=Product::paginate(10);

		return view('productos.index',compact('rows'));

	}

	public function search(){
		$rows=Product::paginate(10);
		return view('productos.search',compact('rows'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		//
		// return "Estoy en el create";
		return view('productos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductCreateRequest $request){
		Product::create([
			'codigo'=>$request['codigo'],
			'nombre'=>$request['nombre'],
			'precio'=>$request['precio'],
			'stock'=>$request['stock']
		]
		);

		Session::flash('message',"Producto guardado correctamente");
		return Redirect::to('/products');
		// return redirect('/products')->with('mensaje','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$row=Product::find($id);
		return view('productos.edit',['row'=>$row]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProductUpdateRequest $request)
	{
		$row=Product::find($id);
		$row->fill($request->all());
		$row->save();
		Session::flash('message',"Producto editado correctamente");
		return Redirect::to('/products');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
