@extends('layouts.admin')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <tr>
                    <th>Image</th>
                    <th>Model</th>
                    <th>Brand</th>
                    <th>Fuel Type</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse ($cars as $car)
                    <tr class="table-primary">
                        <td scope="row"><img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->image }} image">
                        </td>
                        <td scope="row">{{ $car->model }}</td>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->fuel_type }}</td>
                        <td>{{ $car->price }}</td>
                        <td>
                            <a href="{{ route('admin.cars.show', $car) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('admin.cars.edit', $car) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            No cars found yet!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $cars->links('pagination::bootstrap-5') }}
    </div>
@endsection
