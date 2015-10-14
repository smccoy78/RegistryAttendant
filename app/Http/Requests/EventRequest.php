<?php namespace RegistryAttendant\Http\Requests;

use RegistryAttendant\Http\Requests\Request;

class EventRequest extends Request {

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
			'event_name' => 'required|min:5',
			'event_description' => 'required|min:10',
			'event_date' => 'required|date'
		];
	}

}
