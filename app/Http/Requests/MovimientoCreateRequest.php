<?php namespace almacen\Http\Requests;

use almacen\Http\Requests\Request;

class MovimientoCreateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			// 'product_id'=>'required|unique:almacenes_products',
			// 'almacene_id'=>'required|unique:almacenes_products',
			'product_id'=>'required',
			'almacenentrada_id'=>'required',
			'notas'=>'required',
		];
	}

}
