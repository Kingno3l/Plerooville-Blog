@extends('admin.admin_dashboard')
@section('admin')
    <!-- Jquery CDN for Image show on select -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Category</h6>
                        <form method="POST" action="{{ route('update.category') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="hidden" name="id" value="{{ $categories->id }}">
                                    <div class="mb-3">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" class="form-control" value="{{ $categories->category_name }}"
                                            name="category_name" placeholder="Enter city"
                                            @error('category_name') is-invalid @enderror>
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Category Slug</label>
                                        <input type="text" class="form-control" name="category_slug"
                                            value="{{ $categories->category_slug }}"
                                            placeholder="Enter state"@error('category_slug') is-invalid                          @enderror>
                                        @error('category_slug')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="mb-3 col-sm-4">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file"
                                        name="image" id="image">
                                    {{-- Laravel Blade error handling --}}
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> <!-- col -->

                            </div><!-- Row -->
                            <div class="row">
                                <div class="card-body">
                                    <h4 class="card-title">Description</h4>
                                    <textarea class="form-control  @error('category_description') is-invalid @enderror" name="category_description"
                                        id="tinymceExample" rows="10">{{ $categories->category_description }}</textarea>
                                    {{-- Laravel Blade error handling --}}
                                    @error('category_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Meta Keywords</h4>
                                        <textarea class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords" id=""
                                            rows="4">{{ $categories->meta_keywords }}</textarea>
                                        {{-- Laravel Blade error handling --}}
                                        @error('meta_keywords')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Meta Description</h4>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" id=""
                                            rows="4">{{ $categories->meta_description }}</textarea>
                                        {{-- Laravel Blade error handling --}}
                                        @error('meta_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                            name="meta_title" value="{{ $categories->meta_title }}"
                                            placeholder="Enter meta title">
                                        {{-- Laravel Blade error handling --}}
                                        @error('meta_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="navbar_status"
                                            id="checkCheckedNavbar" value="{{ $categories->navbar_status }}"
                                            {{ $categories->navbar_status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="checkCheckedNavbar">
                                            Navbar Status
                                        </label>
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="status"
                                            id="checkCheckedStatus" value="{{ $categories->status }}"
                                            {{ $categories->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="checkCheckedStatus">
                                            Status
                                        </label>
                                    </div>
                                </div><!-- Col -->



                            </div>

                            <div class="row">

                            </div><!-- Row -->

                            <button type="submit" class="btn btn-primary submit">Submit form</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
