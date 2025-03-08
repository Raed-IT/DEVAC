<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateJobOfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
             'employer_name' => 'nullable|string|max:255',
            'from_canadian_employer' => 'nullable|boolean',
            'offer_full_time' => 'nullable|boolean',
            'offer_non_seasonal' => 'nullable|boolean',
            'offer_outside_quebec' => 'nullable|boolean',
            'offer_meets_teer_requirement' => 'nullable|boolean',
            'salary_range' => 'nullable|numeric|max:100',
            'contract_duration' => 'nullable|numeric',
            'eligibility_criterion_id' => 'nullable|exists:eligibility_criterion,criterion_id',
        ];
    }
    public function messages()
    {
        return [

            'employer_name.string' => 'The employer name must be a valid string.',
            'employer_name.max' => 'The employer name cannot exceed 255 characters.',

            'from_canadian_employer.boolean' => 'The from Canadian employer field must be a boolean value.',

            'offer_full_time.boolean' => 'The offer full-time field must be a boolean value.',
            'offer_non_seasonal.boolean' => 'The offer non-seasonal field must be a boolean value.',
            'offer_outside_quebec.boolean' => 'The offer outside Quebec field must be a boolean value.',
            'offer_meets_teer_requirement.boolean' => 'The offer meets TEER requirement field must be a boolean value.',

            'salary_range.string' => 'The salary range must be a valid string.',
            'salary_range.max' => 'The salary range cannot exceed 100 characters.',

            'contract_duration.integer' => 'The contract duration must be a valid integer.',

            'eligibility_criterion_id.exists' => 'The selected eligibility criterion ID does not exist in the database.',
        ] ;
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(["error"=>$validator->errors()->first()], 400));
    }
}
