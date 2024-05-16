<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>


<body>
    <!-- Login 13 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <a href="#!">
                                    <!-- <img src="./assets/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="175" height="57"> -->
                                </a>
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign up to your admin account</h2>
                            <form action="{{route('admin.register')}}" method="POST">
                                @csrf
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="name@example.com">
                                            <label for="email" class="form-label">Email</label>
                                            @error('email')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" value="{{old('password')}}" id="password" value="" placeholder="Password">
                                            <label for="password" class="form-label">Password</label>
                                            @error('password')
                                            <div class="error" style="color:red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="repassword" value="{{old('repassword')}}" id="repassword" value="" placeholder="RePassword">
                                            <label for="password" class="form-label">RePassword</label>
                                            @error('repassword')
                                            <div class="error" style="color:red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select name="role" id="" class="form-control">
                                                <option value="admin" selected>Admin</option>
                                                <option value="superadmin">Super Admin</option>
                                            </select>
                                            <label for="" class="form-label">Role</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="submit">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>