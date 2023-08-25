@extends('layouts.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Asset Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Assests</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Fill the details to update asset</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('assets.update', $asset) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $asset->name }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="purchase_date">Purchase Date</label>
                            <input type="date" name="purchase_date" id="purchase_date" class="form-control" value="{{ $asset->purchase_date }}" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Active" {{ $asset->status === 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="In-Active" {{ $asset->status === 'In-Active' ? 'selected' : '' }}>In-Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user_added_id">Asset Type</label>
                            <select name="type_id" id="type_id" class="form-control" required>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ $asset->type_id === $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Asset</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
