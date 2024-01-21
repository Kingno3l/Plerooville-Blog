@extends('admin.admin_dashboard')
@section('admin')
    <!-- Jquery CDN for Image show on select -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit User</h6>
                        <form method="POST" action="{{ route('update.user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $users->id }}">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Name</label>
                                        <input type="text" class="form-control" value="{{ $users->name }}"
                                            name="name" placeholder=" Name" @error('name') is-invalid @enderror>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Username</label>
                                        <input type="text" class="form-control" value="{{ $users->username }}"
                                            name="username" placeholder="Username"
                                            @error('username') is-invalid @enderror>
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Email</label>
                                        <input type="text" class="form-control" value="{{ $users->email }}"
                                            name="email" placeholder="Email" @error('email') is-invalid @enderror>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Phone</label>
                                        <input type="text" class="form-control" value="{{ $users->phone }}"
                                            name="phone" placeholder="Enter city" @error('phone') is-invalid @enderror>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="mb-3 col-sm-4" data-select2-id="7">
                                    <label class="form-label">Select Role</label>
                                    <select class="js-example-basic-single form-select select2-hidden-accessible"
                                        name="role" data-width="100%" data-select2-id="1" tabindex="-1"
                                        aria-hidden="true">

                                        <option value="user" @if ($users->role === 'user') selected disabled @endif>
                                            User</option>
                                        <option value="editor" @if ($users->role === 'editor') selected disabled @endif>
                                            Editor</option>
                                        <option value="admin" @if ($users->role === 'admin') selected disabled @endif>
                                            Admin</option>


                                    </select>
                                   
                                </div>

                                <div class="mb-3 col-sm-4" data-select2-id="7">
                                    <label class="form-label">Select Role</label>
                                    <select class="js-example-basic-single form-select select2-hidden-accessible"
                                        name="status" data-width="100%" data-select2-id="1" tabindex="-1"
                                        aria-hidden="true">

                                        <option value="active" @if ($users->status === 'active') selected disabled @endif>
                                            Active</option>
                                        <option value="inactive" @if ($users->status === 'inactive') selected disabled @endif>
                                            Inactive</option>


                                    </select>
                                    
                                </div>

                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Password</label>
                                        <input type="password" class="form-control" 
                                            name="password" placeholder="Password" @error('password') is-invalid @enderror>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div>

                            <div class="row">

                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Submit form</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
