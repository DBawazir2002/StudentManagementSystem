<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePublicNoticeRequest extends FormRequest
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
        $publicNotice = $this->route('publicNotice');
        return [
            'noticeTitle' => ['required','string','min:3',Rule::unique('public_notices')->ignore($publicNotice)],
            'noticeMessage' => ['required','string','min:3',Rule::unique('public_notices')->ignore($publicNotice)],
        ];
    }
}
