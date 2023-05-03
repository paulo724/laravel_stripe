<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'cpf' => ['string', 'max:20'],
            'birthDate' => ['date'],
            'numberPhone' => ['string', 'max:24'],
            'zipCode' => ['string', 'max:24'],
            'address' => ['string', 'max:255'],
            'city' => ['string', 'max:54'],
            'state' => ['string', 'max:64'],

        ];
    }
}
