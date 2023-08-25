@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create New Asset</h1>
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
                <h3 class="card-title">Fill the details to create asset</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('assets.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required pattern="^[a-zA-Z0-9 ]{3,}$">

                    </div>
                    <div class="form-group">
                        <label for="purchase_date">Purchase Date</label>
                        <input type="date" name="purchase_date" id="purchase_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Active">Active</option>
                            <option value="In-Active">In-Active</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_added_id">Asset Type</label>
                        <select name="type_id" id="type_id" class="form-control" required>
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Asset</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection