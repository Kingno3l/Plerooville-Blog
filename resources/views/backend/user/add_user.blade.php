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
                        <form method="POST" action="{{ route('save.user') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Name</label>
                                        <input type="text" class="form-control" name="name" placeholder=" Name"
                                            @error('name') is-invalid @enderror>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username"
                                            @error('username') is-invalid @enderror>
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                            @error('email') is-invalid @enderror>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter city"
                                            @error('phone') is-invalid @enderror>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->



                                <div class="mb-3 col-sm-4">
                                    <label for="Status" class="form-label">Status</label>
                                    <select class="form-select" name="status" id="Status">
                                        <option selected="" disabled="">Select Status</option>
                                        <option value="active">Active</option>
                                        <option value="inctive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-sm-4">
                                    <label for="Role" class="form-label">Role</label>
                                    <select class="form-select" name="role" id="Role">
                                        <option selected="" disabled="">Select Role</option>
                                        <option value="user">User</option>
                                        <option value="editor">Editor</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label"> Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            @error('password') is-invalid @enderror>
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
