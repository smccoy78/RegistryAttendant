<?php namespace RegistryAttendant\Http\Requests;

use RegistryAttendant\Http\Requests\Request;

class RegistryRequest extends Request {

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
			'attendee' => 'required|min:5',
			'attendee_email' => 'required|min:10',
			'event_id' => 'required',
		];
	}

}
