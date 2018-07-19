<?php namespace almacen\Http\Controllers;

	use almacen\Http\Requests;
	use almacen\Http\Requests\StorehouseCreateRequest;
	use almacen\Http\Controllers\Controller;
	use almacen\Storehouse;
	use almacen\Movimiento;
	use Session;
	use Redirect;
	use Illuminate\Http\Request;

	class StorehouseController extends Controller {

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		 public function all(){
 		// 	return view('all');
			$rows=Storehouse::all();
			// dd($rows);
			$status=$reg=NULL;

		foreach ($rows as $almacen) {
			$products=Movimiento::find(1)->where(
				'almacenentrada_id', '=', $almacen->id
				)->get();
			if (count($products)<1) {
				$status="Falta stock";
			}else{
				foreach ($products as $row) {
			 		 if ($row->product->stock<5) {
			 			 $status="Falta stock";
			 			 break;
			 		 }else $status="Con stock";
			 	}
			}
			$reg[$almacen->id]=[
				'almacen_id'=>$almacen->id,
				'stock'=>$status
			];
			  // dump($almacen->nombre);
		}
		// dump($reg);


	  //  echo count($products);



			return view('all',compact('rows','reg'));
 		}

		public function index()
		{
			//
			// $user = Storehouse::find(1);

			// var_dump($user);
			$rows=Storehouse::paginate(10);

			return view('almacenes.index',compact('rows'));

		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return Response
		 */
		public function create(){
			//
			// return "Estoy en el create";
			return view('almacenes.create');
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @return Response
		 */
		public function store(StorehouseCreateRequest $request){
			Storehouse::create([
				'codigo'=>$request['codigo'],
				'nombre'=>$request['nombre'],
				'precio'=>$request['precio'],
				'stock'=>$request['stock']
			]
			);

			Session::flash('message',"Almacen guardado correctamente");
			return Redirect::to('/almacenes');
			// return redirect('/almacenes')->with('mensaje','store');
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
			$row=Storehouse::find($id);
			return view('almacenes.edit',['row'=>$row]);
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function update($id, StorehouseCreateRequest $request)
		{
			$row=Storehouse::find($id);
			$row->fill($request->all());
			$row->save();
			Session::flash('message',"Almacén editado correctamente");
			return Redirect::to('/almacenes');
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
