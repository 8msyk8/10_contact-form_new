<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<title>Contact Form</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>

<main>
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content-name">
                <div class="form__group-first-name">
                <div class="form__input--text">
                    <input type="text" name="fullname" />
                </div>
                <span class="form__label--item-sample">例) 山田</span>
                <div class="form__error">
                    @error('fullname')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            <div class="form__group-last-name">
                <div class="form__input--text">
                    <input type="text" name="last_name" />
                </div>
                <span class="form__label--item-sample">例) 太郎</span>
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
            
            </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
            <dd>
            <input type="radio" name="gender" id="male" value='1' {{ old('like','male') == 'male' ? 'checked' : '' }}>
            <label for="male">男性</label>
            <input type="radio" name="gender" id="female" value='2'>
            <label for="male">女性</label>
        </dd>
                <div class="form__error">
                    <!--set validation-->
                </div>
            </div>
        </div>

<div class="form__group">
<div class="form__group-title">
<span class="form__label--item">メールアドレス</span>
<span class="form__label--required">※</span>
</div>
<div class="form__group-content">
<div class="form__input--text">
<input type="email" name="email"/>
</div>
<div class="form__error">
<!--set validation-->
@error('email')
                    {{ $message }}
                    @enderror
</div>
</div>
</div>
<div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <!-- ▼郵便番号入力フィールド(7桁) -->
<input type="text" name="postcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                </div>
                <div class="form__error">
                    <!--set validation-->
                    @error('postcode')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input id="address" type="text" name="address"/>
                </div>
                <div class="form__error">
                    <!--set validation-->
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name"/>
                </div>
                <div class="form__error">
                    <!--set validation-->
                    @error('building_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">ご意見</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--textarea">
            <textarea name="opinion" ></textarea>
        </div>
        <div class="form__error">
                    <!--set validation-->
                    @error('opinion')
                    {{ $message }}
                    @enderror
                </div>
    </div>
</div>
<div class="form__button">
    <button class="form__button-submit" type="submit">確認</button>
</div>
</form>
</div>
</main>
</body>
</html>