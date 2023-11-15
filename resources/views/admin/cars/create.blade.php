@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{ route('admin.cars.post') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="model" class="form-label text-uppercase">Model</label>
                    <input type="text" class="form-control" name="model" id="model" aria-describedby="helpId"
                        placeholder="">
                    <small id="modelHelper" class="form-text text-muted">Type a model</small>
                </div>

                <div class="mb-5">
                    <label for="brand" class="form-label text-uppercase">brand</label>
                    <input type="text" class="form-control" name="brand" id="brand" aria-describedby="helpId"
                        placeholder="">
                    <small id="brandHelper" class="form-text text-muted">Type a brand</small>
                </div>



                <div class="mb-5">
                    <label for="image" class="form-label text-uppercase">image</label>
                    <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                        placeholder="">
                    <small id="imageHelper" class="form-text text-muted">Type a image</small>
                </div>

                <div class="mb-5">
                    <label for="price" class="form-label text-uppercase">price</label>
                    <input type="number" step="0.1" class="form-control" name="price" id="price"
                        aria-describedby="helpId" placeholder="">
                    <small id="priceHelper" class="form-text text-muted">Type a price</small>
                </div>

                <div class="mb-5">
                    <label for="seats" class="form-label text-uppercase">seats</label>
                    <input type="text" class="form-control" name="seats" id="seats" aria-describedby="helpId"
                        placeholder="">
                    <small id="seatsHelper" class="form-text text-muted">Type a seats</small>
                </div>

                <div class="mb-3">
                    <label for="transmission" class="form-label text-uppercase">Transmission</label>
                    <select class="form-select" name="transmission" id="transmission">
                        <option selected>Select one</option>
                        <option value="manual">Manual</option>
                        <option value="authomatic">Automatic</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fuel_type" class="form-label text-uppercase">fuel type</label>
                    <select class="form-select" name="fuel_type" id="fuel_type">
                        <option selected>Select one</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Gas">Gas</option>
                        <option value="Electric">Electric</option>
                        <option value="Petrol">Petrol</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="notes" class="form-label text-uppercase">notes</label>
                    <textarea class="form-control" name="notes" id="notes" rows="4">Insert the notes here</textarea>
                </div>
            </form>
        </div>
    </div>
@endsection
