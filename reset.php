<?php include('partial/header.php') ?>
<?php include('partial/sidebar.php') ?>


<!--Container Main start-->
<main class=" content">

    <section class="content-wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="content-block custom--block">
                    <div class="content__head">
                        <div class="head">
                            <ul>
                                <li class="active"> <a href="account-edit.php">setting</a>
                                </li>
                                <li> <a href="reset.php">Reset password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content__body ">
                        <div class="form">

                            <form action="">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label for="confirm-password">Current
                                                    Password</label>
                                            </div>
                                            <div class="password">
                                                <input class="form-control " type="password" id="confirm-password"
                                                    placeholder="Your password">
                                                <div class="form-alert-icon"
                                                    onclick="showPassword('confirm-password',this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3">
                                                        </circle>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label for="confirm-password">New
                                                    Password</label>
                                            </div>
                                            <div class="password">
                                                <input class="form-control " type="password" id="show-password"
                                                    placeholder="Your password">
                                                <div class="form-alert-icon"
                                                    onclick="showPassword('show-password',this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3">
                                                        </circle>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label for="confirm-password">Confirm new
                                                    Password</label>
                                            </div>
                                            <div class="password">
                                                <input class="form-control " type="password" id="new-password"
                                                    placeholder="new password">
                                                <div class="form-alert-icon"
                                                    onclick="showPassword('new-password',this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3">
                                                        </circle>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="buttons-group m-0 all-button">
                                            <button class="site-button all-button" role="button">Update
                                            </button>
                                            <button class="site-button all-button cancel" role="button">cancel
                                            </button>
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
</main>
<!--Container Main end-->


<?php include('partial/footer.php') ?>