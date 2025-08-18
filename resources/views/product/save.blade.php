@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="alert alert-success">
        Product created successfully!
    </div>

    <p><strong>Name:</strong> {{ $viewData['product']['name'] }}</p>
    <p><strong>Price:</strong> {{ $viewData['product']['price'] }}</p>

</div>
@endsection