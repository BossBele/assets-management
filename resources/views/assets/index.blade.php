@extends('layouts.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Assets</h1>
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
                    <h3 class="card-title">List Of All Assets</h3>

                    <a href="{{ route('assets.create') }}" class="btn btn-primary float-right">Add Asset</a>

                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Purchase Date</th>
                                <th>Status</th>
                                <th>Added By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset)
                                <tr>
                                    <td>{{ $asset->name }}</td>
                                    <td>{{ $asset->type->name }}</td>
                                    <td>{{ $asset->purchase_date }}</td>
                                    <td>{{ $aset->status }}</td>
                                    <td>{{ $asset->user->name }}</td>
                                    <td>
                                        <a href="{{ route('assets.edit', $asset) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('assets.destroy', $asset) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this asset?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
