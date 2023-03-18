@extends('layouts.app')


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
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
<tr>
<th>Data</th>
</tr>
@foreach ($contacts as $contact)
<tr>
<td>
{{$contact->getDetail()}}
</td>
</tr>
@endforeach
</table>
{{ $contacts->links() }}
@endsection