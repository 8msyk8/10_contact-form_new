<?php

namespace App\Http\Requests;
use App\Rules\ZipCodeRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
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
            'fullname' => ['required', 'string', 'max:1'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode'=> ['required', new ZipCodeRule()],
            'address' => ['required', 'string', 'max:1'],
            'building_name' => ['required', 'string', 'max:1'],
            'opinion' => ['required', 'string', 'max:1'],
        ];
    }

    public function messages()
    {
          return [
             'fullname.required' => '名前を入力してください',
             'name.string' => '名前を文字列で入力してください',
             'name.max' => '名前を255文字以下で入力してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.string' => 'メールアドレスを文字列で入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'email.max' => 'メールアドレスを255文字以下で入力してください',

             'address.required' => '住所を入力してください',
             'address.max' => '住所を255文字以下で入力してください',
             'building_name.required' => '建物名を入力してください',
             'building_name.max' => '建物名を255文字以下で入力してください',
             'opinion.required' => 'ご意見を入力してください',
             'opinion.max' => 'ご意見を120文字以下で入力してください',
          ];
      }
}
