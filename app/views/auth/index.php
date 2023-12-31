    <div class="container mt-4">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="card mt-3 mb-3">
                    <div class="card-header bg-dark text-start text-white" style="letter-spacing: 1px; font-size: 17px;">
                        <span>
                            <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                        </span>
                        <strong>
                            ADMIN LOGIN
                        </strong>
                    </div>
                    <div class="card-body border border-secondary my-card-body">
                        <?php Flasher::flash(); ?>
                        <form action="auth/login" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="showPassword()">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Show Password
                                </label>
                            </div>
                            <div class="text-end mt-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-sign-in me-1" aria-hidden="true"></i>
                                    Log in
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-dark">
                        <div class="row">
                            <div class="text-start text-white">
                                <span class="text-muted">Insert <strong>Username</strong> and <strong>Password</strong>...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>