@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome to {{ config('app.name') }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
