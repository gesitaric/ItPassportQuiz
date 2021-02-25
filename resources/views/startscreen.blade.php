@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">Start Screen</div>

                    <div class="card-body">
                        <a href="{{ route('quiz') }}" class="btn btn-primary btn-block">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection