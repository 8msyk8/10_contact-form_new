<!DOCTYPE html>
<htm llang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewprt" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>

 <main>

<div class="container">
    <div class="admin__heading">
     <h2>管理システム</h2>
    </div>
     <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->

<div class="search-form__container">
<form class="search-form" action="/contacts/search" method="get">
  @csrf
<div class="search-form__item">
       <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-last">
                    <div class="form__input--text">
                        <input class="search-form__item-input" type="text" name="fullname" value="{{ old('fullname') }}">
                    </div>
                </div>    
            </div>
            {{-- <div class="form__group-title">
                <span class="form__label--item">性別</span>
            </div>
            <div class="form__group-content">
                <input type="radio" class = "gender" name="gender" id="all" value='0'{{ old('like','all') == 'all' ? 'checked' : '' }}>
                <label for="male">  全て</label>
                <input type="radio" class = "gender" name="gender" id="male" value='1' >
                <label for="male">  男性</label>
                <input type="radio" class = "gender" name="gender" id="female" value='2'>
                <label for="male">  女性</label>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">登録日</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-last">
                    <div class="form__input--text">
                        <input class="search-form__item-input" type="text" name="startdate" value="{{ old('startdate') }}">
                    </div>
                </div>    
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-last">
                    <div class="form__input--text">
                        <input class="search-form__item-input" type="text" name="email" value="{{ old('email') }}">
                    </div>
                </div> 
            </div>  --}}
        </div>
</div>
<div class="search-form__button">
<button class="search-form__button-submit" type="submit">検索</button>
</div>
<input class="search-form_reset" type="reset" value="リセット">
</form>
</div>

<div class="pagination">{{ $contacts->links() }}</div>
<table class="admin_table">
<tr>
<th>ID</th>
<th>お名前</th>
<th>性別</th>
<th>メールアドレス</th>
<th>ご意見</th>
<th></th>
</tr>
@foreach ($contacts as $contact)
<tr>
<td>
{{$contact->id}}
</td>
<td>
{{$contact->fullname}}
</td>
<td>
@if($contact['gender'] ==1)
男性
@else
女性
@endif
</td>
<td >
{{$contact->email}}
</td>
<td class ="opinion" title="{{ $contact['opinion'] }}">
{{ Str::limit($contact->opinion, 15, '...') }}
</td>
<td>
<form class="delete-form" action="/contacts/delete" method="post">
@method('DELETE')
@csrf
<div class="delete-form__button">
<input type="hidden" name="id" value="{{ $contact['id'] }}">
<button class="delete-form__button-submit" type="submit">削除</button>
</div>
</form>
</td>
</tr>
@endforeach
</table>
</div>
</main>
</body>
</html>