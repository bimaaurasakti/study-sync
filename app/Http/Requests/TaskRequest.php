<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'subject_id' => 'sometimes|nullable|exists:subjects,id',
        ];
    }

    protected function prepareForValidation()
    {
        $modifiedData = $this->all();
        if (isset($modifiedData['subject_id'])) {
            if (!$modifiedData['subject_id']) {
                unset($modifiedData['subject_id']);
            }
        }
        $this->replace($modifiedData);
    }
}
