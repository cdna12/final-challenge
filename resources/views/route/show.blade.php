@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <h1 class="mb-4">{{ $page_title }}</h1>

            <form action="{{ route('sales.store') }}" method="post">
                @csrf
                
                <div class="mb-4">
                    <label for="client_id" class="form-label">Client *</label>
                    <select class="form-select" name="client_id">
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <p>Order Details *</p>
                        </div>
                    </div>

                    <table class="table" id="products_table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr id="product0">
                                <td>
                                    <select class="form-select" name="products[]">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }} ${{ number_format($product->price, 2) }}</option>
                                        @endforeach
                                    </select>
                                </td>

                                <td>
                                    <input type="number" name="quantities[]" class="form-control" step="1" value="1" min="1">
                                </td>
                            </tr>

                            <tr id="product1"></tr>
                        </tbody>
                    </table>
                </div>

                <div class="mb-5">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-danger" id="delete_row">Delete row</button>
                        </div>
                        <div class="col text-end">
                            <button class="btn btn-info" id="add_row">Add row +</button>
                        </div>
                    </div>
                </div> 

                <div class="mb-3 text-end">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Create Order</button>
                    </div>
                </div>
            </form>

            {{-- <pre>{{ print_r($products) }}</pre> --}}
        </div>
    </div>
</div>
@endsection