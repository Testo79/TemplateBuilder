@extends('layouts.app')

@section('title', 'Liste des Templates')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>List of Templates</h2>
                </div>
                <div class="card-body">
                <div class="cards">
                    @foreach($templates as $template)
                        <div class="card {{ $template->color }}">
                            <a href="{{ url('/templates/' . $template->id) }}" class="text-decoration-none">
                                {{ $template->nom }}
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
