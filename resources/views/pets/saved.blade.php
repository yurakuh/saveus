@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">@foreach($pets as $pet)
                <div class="card-header">Dashboard</div>

              
                {{$pet->title}}
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
