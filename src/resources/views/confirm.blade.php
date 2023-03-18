<?php print_r($contact) ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Contact Form</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
<main>
<div class="confirm__content">
<div class="confirm__heading">
<h2>内容確認</h2>
</div>
<form class="form" action="/contacts/store" method="post">
    @csrf
<div class="confirm-table">
<table class="confirm-table__inner">
<tr class="confirm-table__row">
<th class="confirm-table__header">お名前</th>
<td class="confirm-table__text">
<input type="text" name="fullname" value="{{ $contact['fullname'] }}" readonly />
</td>
</tr>
<tr class="confirm-table__row">
<th class="confirm-table__header">性別</th>
<input type="postcode" name="gender" value="{{ $contact['gender'] }}" readonly />
<td class="confirm-table__text">
</td>
</tr>
<tr class="confirm-table__row">
<th class="confirm-table__header">メールアドレス</th>
<td class="confirm-table__text">
<input type="email" name="email" value="{{ $contact['email'] }}" readonly />
</td>
</tr>
<tr class="confirm-table__row">
<th class="confirm-table__header">郵便番号</th>
<td class="confirm-table__text">
<input type="postcode" name="postcode" value="{{ $contact['postcode'] }}" readonly />
</td>
</tr>
<tr class="confirm-table__row">
<th class="confirm-table__header">住所</th>
<td class="confirm-table__text">
<input type="address" name="address" value="{{ $contact['address'] }}" readonly />
</td>
</tr>
<tr class="confirm-table__row">
<th class="confirm-table__header">建物名</th>
<td class="confirm-table__text">
<input type="building_name" name="building_name" value="{{ $contact['building_name'] }}" readonly />
</td>
</tr>
<tr class="confirm-table__row">
<th class="confirm-table__header">ご意見</th>
<td class="confirm-table__text">
<input type="text" name="opinion" value="{{ $contact['opinion'] }}" readonly />
</td>
</tr>
</table>
</div>
<div class="form__button">
<button class="form__button-submit" type="submit">送信</button>
</div>
</form>
<form class="form" action="/contacts/edit" method="post">
    @csrf
<input type="text" name="fullname" type="hidden" value="{{ $contact['fullname'] }}" readonly />
<input type="postcode" name="gender" type="hidden" value="{{ $contact['gender'] }}" readonly />
<input type="email" name="email" type="hidden" value="{{ $contact['email'] }}" readonly />
<input type="postcode" name="postcode" type="hidden" value="{{ $contact['postcode'] }}" readonly />
<input type="address" name="address" type="hidden" value="{{ $contact['address'] }}" readonly />
<input type="building_name" name="building_name" type="hidden" value="{{ $contact['building_name'] }}" readonly />
<input type="text" name="opinion" type="hidden" value="{{ $contact['opinion'] }}" readonly />
<div class="form__button">
<button class="link-style-btn" type="submit">修正する</button>
</div>
</form>
</div>
</main>
</body>
</html>
<style>
button.link-style-btn{
  cursor: pointer;
  border: none;
  background: none;
  color: #0033cc;
}
button.link-style-btn:hover{
  text-decoration: underline;
  color: #002080;
}
</style>