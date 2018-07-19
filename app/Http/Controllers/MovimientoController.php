<?php namespace almacen\Http\Controllers;

use almacen\Http\Requests;
use almacen\Http\Requests\MovimientoCreateRequest;
// use almacen\Http\Requests\MovimientoUpdateRequest;
use almacen\Http\Controllers\Controller;
use almacen\Movimiento;
use almacen\Product;
use almacen\Storehouse;
use Session;
use Redirect;
use Illuminate\Http\Request;

class MovimientoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


  public function index()
  {
 	 //
 	 // $user = Movimiento::find(1);

 	 // var_dump($user);
 	 $rows=Movimiento::paginate(10);

 	 return view('traspasos.index',compact('rows'));

  }

  /**
 	* Show the form for creating a new resource.
 	*
 	* @return Response
 	*/
  public function create(){
 	 //
 	 // return "Estoy en el create";
	 $products=Product::all();
	 $almacenes=Storehouse::all();
	  // var_dump($products);
	//  $worktypes_list = Worktype::lists('id', 'name');
 	 		return view('traspasos.create',compact('products','almacenes'));
 		// 	return view('traspasos.create');
  }

  /**
 	* Store a newly created resource in storage.
 	*
 	* @return Response
 	*/
  public function store(MovimientoCreateRequest $request){
 	 Movimiento::create([
 		 'almacenentrada_id'=>$request['almacenentrada_id'],
 		 'product_id'=>$request['product_id'],
 		 'notas'=>$request['notas']
 	 ]
 	 );

 	 Session::flash('message',"Traspaso guardado correctamente");
 	 return Redirect::to('/traspasos');
 	 // return redirect('/traspasos')->with('mensaje','store');
  }

  /**
 	* Display the specified resource.
 	*
 	* @param  int  $id
 	* @return Response
 	*/

  /**
 	* Show the form for editing the specified resource.
 	*
 	* @param  int  $id
 	* @return Response
 	*/
  public function edit($id)
  {
 	 $row=Movimiento::find($id);
	 $products=Product::all();
	 $almacenes=Storehouse::all();
	  // var_dump($products);
	//  $worktypes_list = Worktype::lists('id', 'name');
 // 	 return view('traspasos.edit',['row'=>$row]);
	 return view('traspasos.edit',compact('products','almacenes','row'));
  }

  /**
 	* Update the specified resource in storage.
 	*
 	* @param  int  $id
 	* @return Response
 	*/
  public function update($id, MovimientoCreateRequest $request)
  {
 	 $row=Movimiento::find($id);
 	 $row->fill($request->all());
 	 $row->save();
 	 Session::flash('message',"traspaso editado correctamente");
 	 return Redirect::to('/traspasos');
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
