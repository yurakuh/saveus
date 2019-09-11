@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <input type="radio" name="foo" data-url="//google.com"> гугл
<input type="radio" name="foo" data-url="//habr.com"> хабр
<hr>
<a href="//example.com" id="target">some link</a>

<script>
    document.addEventListener('change', function(evt){
  if (evt.target.matches('[data-url]')) {
     target.href = evt.target.dataset.url
  }
})
</script>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
