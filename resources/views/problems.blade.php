@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($problems as $problem)
                            <div class="col-sm-2">
                                <a href="/problemes/{{ $theme }}/{{ $subtheme }}/{{ $problem->id }}">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">Problème {{ $problem->id }}</h5>
                                      </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
