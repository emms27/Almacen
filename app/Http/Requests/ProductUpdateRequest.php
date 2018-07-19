<?php namespace almacen\Http\Requests;

use almacen\Http\Requests\Request;

class ProductUpdateRequest extends Request {

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
			'codigo'=>'required',
			'nombre'=>'required',
			'precio'=>'required',
			'stock'=>'required|numeric',
			'notas'=>'required'
		];
	}

}
