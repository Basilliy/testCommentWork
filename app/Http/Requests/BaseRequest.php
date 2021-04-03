<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class BaseRequest extends FormRequest
{

    public const ERROR_MESSAGE_PREFIX = 'Error_';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool|\Illuminate\Contracts\Auth\Authenticatable
     *
     * Checked facade \Illuminate\Contracts\Auth\Authenticatable.
     *
     * If false throw failed authorization.
     */
    public function authorize()
    {
        return true; //default
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [];
    }

    /**
     * @return void
     *
     * Http 401 error.
     */
    protected function failedAuthorization(): void
    {
        throw new HttpResponseException(response()->json(['errors' => 'You must be logged in'], Response::HTTP_UNAUTHORIZED));
    }

    /**
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     *
     * @return void
     *
     * Http 422 error.
     */
    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
