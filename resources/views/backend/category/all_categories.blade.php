@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.category') }}" class="btn btn-inverse-info">Add Category</a>
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
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Meta Title</th>
                                        <th>Meta Description</th>
                                        <th>Meta Keyword</th>
                                        <th>Navbar Status</th>
                                        <th>Status</th>
                                        <th>Created By</th>
                                        <th>Image</th>
                                        <th>action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td>{{ $category->category_slug }}</td>
                                            <td>{{ $category->category_description }}</td>
                                            <td>{{ $category->meta_title }}</td>
                                            <td>{{ $category->meta_description }}</td>
                                            <td>{{ $category->meta_keywords }}</td>
                                            <td>{{ $category->navbar_status }}</td>
                                            <td>{{ $category->status }}</td>
                                            
                                            <td> {{ $category->created_by }} </td>
                                            <td>
                                                @if (!empty($category->image) && file_exists(public_path('uploads/category/' . $category->image)))
                                                    <img src="{{ url('uploads/category/' . $category->image) }}"
                                                        alt="Category Image">
                                                @else
                                                    <img src="{{ url('upload/no_image.jpg') }}" alt="Default Image">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.category', $category->id)}}" class="btn btn-inverse-warning">Edit</a>
                                                <a href="{{ route('delete.category', $category->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                                            </td>

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
