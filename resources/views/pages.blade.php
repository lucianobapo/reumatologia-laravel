@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row" style="margin-bottom: 30px">
        <div class="col-md-12 text-center">
            <h1>{{ $pageData->h1 }}</h1>
            <h2>{{ $pageData->h2 }}</h2>
        </div>
    </div>

    @if(view()->exists('pages.'.$pageData->view))
        @include('pages.'.$pageData->view)
    @endif

</div>
@endsection
