<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckArticlesRequest extends FormRequest
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
            'name' => 'required|min:6',
            'author' => 'required',
            
        ];
    }
    public function messages()
    {
    return [
    'name.required' => "Bạn chưa nhập tiêu đề bài viết",
    'name.min' => "Tiêu đề bài viết phải tối thiểu 6 ký tự",
    'author.required' => "Bạn chưa nhập tác giả",
    'created_at.required' => "Bạn chưa nhập ngày tạo",
    'created_at.data' => "Ngày tạo không hợp lệ",
    ];
    }
  
}
