@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->image }} image">
                    <div class="card-body">
                        <h4 class="card-title">{{ $car->model }}</h4>
                        <span>{{ $car->brand }}</span>
                        <span>{{ $car->price }}</span>
                        <span>{{ $car->fuel_type }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
