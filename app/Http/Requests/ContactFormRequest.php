public function rules()
{
    return [
        'name' => 'required|string|max:8',
        'gender' => 'required|in:1,2,3',
        'email' => 'required|email',
        'tel' => 'required|digits_between:1,5',
        'address' => 'required',
        'category_id' => 'required|exists:categories,id',
        'detail' => 'required|max:120',
    ];
}

public function messages()
{
    return [
        'name.required' => 'お名前を入力してください',
        'name.max' => 'お名前は8文字以内で入力してください',
        'gender.required' => '性別を選択してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => 'メールアドレスはメール形式で入力してください',
        'tel.required' => '電話番号を入力してください',
        'tel.digits_between' => '電話番号は5桁まで数字で入力してください',
        'address.required' => '住所を入力してください',
        'category_id.required' => 'お問い合わせの種類を選択してください',
        'detail.required' => 'お問い合わせ内容を入力してください',
        'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
    ];
}
