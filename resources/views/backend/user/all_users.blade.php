@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.post') }}" class="btn btn-inverse-info">Add Post</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Table</h6>
                        <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official
                                DataTables Documentation </a>for a full list of instructions and other options.</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Email Verified At</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td> {{ $user->email_verified_at ? $user->email_verified_at : 'Not Verified' }}
                                            </td>
                                            <td>{{ $user->phone ? $user->phone : 'No Phone Added' }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->status }}</td>
                                            {{-- <td>
                                                <a href="{{ route('edit.user', $user->id)}}" class="btn btn-inverse-warning">Edit</a>
                                                <a href="{{ route('delete.user', $user->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                                            </td> --}}

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
