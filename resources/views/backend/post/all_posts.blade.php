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

                                {{-- <tbody>
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $post->post_name }}</td>
                                            <td>{{ $post->post_slug }}</td>
                                            <td>{{ $post->post_description }}</td>
                                            <td>{{ $post->meta_title }}</td>
                                            <td>{{ $post->meta_description }}</td>
                                            <td>{{ $post->meta_keyword }}</td>
                                            <td>{{ $post->status }}</td>
                                            
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
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
