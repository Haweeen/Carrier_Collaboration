<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarrierRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required|string|max:250',
      'address' => 'required|string|max:250',
      'contact_name' => 'required|string|max:250',
      'email' => 'required|email|max:250',
      'phone' => 'required|string|max:50',
      'description' => 'required|string',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];
  }
}
