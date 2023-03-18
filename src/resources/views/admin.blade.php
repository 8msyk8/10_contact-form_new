@extends('layouts.app')

<h2>管理システム</h2>
<div class="container">
    <div class="row justify-content-center">
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
    </div>
</div>

<form class="search-form" action="/todos/search" method="get">
  @csrf
<div class="search-form__item">
         <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
</div>
<div class="search-form__button">
<button class="search-form__button-submit" type="submit">検索</button>
</div>
</form>

<style>
th {
background-color: #289ADC;
color: white;
padding: 5px 40px;
}
tr:nth-child(odd) td{
background-color: #FFFFFF;
}
td {
padding: 25px 40px;
background-color: #EEEEEE;
text-align: center;
}

.text:hover+.opinion {
    display: block;
}

</style>
@section('title', 'index.blade.php')

@section('content')

<table>
<tr>
<th>ID</th>
<th>お名前</th>
<th>性別</th>
<th>メールアドレス</th>
<th>ご意見</th>
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
{{$contact->gender}}
</td>
<td >
{{$contact->email}}
</td>
<td class ="opinion">
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
{{ $contacts->links() }}
@endsection