@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in, but here is nothing interesting, <a href="{{ url('/') }}">go back to the home page!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
