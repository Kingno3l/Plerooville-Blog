@extends('admin.admin_dashboard')
@section('admin')
    <!-- Jquery CDN for Image show on select -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Form Grid</h6>
                        <form method="POST" action="{{ route('save.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                  <div class="mb-3 col-sm-4" data-select2-id="7">
                                    <label class="form-label">Select Category</label>
                                    <select class="js-example-basic-single form-select select2-hidden-accessible"
                                        name="category_id" data-width="100%" data-select2-id="1" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="" disabled selected>Select a Category</option>
                                        @foreach ($category as $cat_item)
                                            <option value="{{ $cat_item->id }}" data-select2-id="3">
                                                {{ $cat_item->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Post Name</label>
                                        <input type="text" class="form-control" name="post_name" placeholder="Enter city"
                                            @error('post_name') is-invalid @enderror>
                                        @error('post_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                              



                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Post Slug</label>
                                        <input type="text" class="form-control" name="post_slug"
                                            placeholder="Enter state"@error('post_slug') is-invalid                          @enderror>
                                        @error('post_slug')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->



                            </div><!-- Row -->
                            <div class="row">
                                <div class="card-body">
                                    <h4 class="card-title">Description</h4>
                                    <textarea class="form-control @error('post_description') is-invalid @enderror" name="post_description"
                                        id="tinymceExample" rows="10"></textarea>
                                    {{-- Laravel Blade error handling --}}
                                    @error('post_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Meta Keyword</h4>
                                        <textarea class="form-control @error('meta_keyword') is-invalid @enderror" name="meta_keyword" id=""
                                            rows="4"></textarea>
                                        {{-- Laravel Blade error handling --}}
                                        @error('meta_keyword')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Meta Description</h4>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" id=""
                                            rows="4"></textarea>
                                        {{-- Laravel Blade error handling --}}
                                        @error('meta_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                            name="meta_title" placeholder="Enter meta title">
                                        {{-- Laravel Blade error handling --}}
                                        @error('meta_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Youtube iFrame</label>
                                        <input type="text" class="form-control" name="post_yt_iframe"
                                            placeholder="Enter state"@error('post_yt_iframe') is-invalid                          @enderror>
                                        @error('post_yt_iframe')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->

                                <div class="mb-3 col-sm-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file"
                                        name="image" id="image">
                                    {{-- Laravel Blade error handling --}}
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> <!-- col -->

                                <div class="col-sm-2">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="status"
                                            id="checkCheckedStatus">
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
