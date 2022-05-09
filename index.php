<?php include('partial/header.php') ?>
<?php include('partial/sidebar.php') ?>


<!--Container Main start-->
<main class=" content">

    <div class="site-header content-wrap">
        <h5>Welcome! to the admin Dashboard!</h5>
        <span>20% completed, keep up the good work!</span>
    </div>
    <section class="content-wrap custom--wrap">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="wrap-custom">
                    <div class="head-custom">
                        <h6>You Can Add Content Of Products From Here Directly.</h6>
                        <p>Please <span> Fill Up </span>Desire Fields.</p>
                    </div>
                    <div class="block-custom">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-wrap">
                                        <label for="">Category</label>
                                        <select class="form-control form-control-line" id="type">
                                            <option value="item0">--Select an Item--</option>
                                            <option value="item1">item1</option>
                                            <option value="item2">item2</option>
                                            <option value="item3">item3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-wrap">
                                        <label for="">Brand</label>
                                        <select id="size" class="form-control form-control-line">
                                            <option value="" disabled selected>-- select category --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-wrap">
                                        <label for="">Series</label>
                                        <select id="size" class="form-control form-control-line">
                                            <option value="" disabled selected>-- select category --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-wrap">
                                        <label for="">Product</label>
                                        <select id="size" class="form-control form-control-line">
                                            <option value="" disabled selected>-- select category --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="site-button  mt-4 all-button">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-wrap">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <div class="icon">
                        <i class="bx bx-bookmark nav_icon"></i>
                    </div>
                    <div class="custom-head">
                        <h6>22k</h6>
                        <p>total user</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <div class="icon">
                        <i class="bx bx-bookmark nav_icon"></i>
                    </div>
                    <div class="custom-head">
                        <h6>22k</h6>
                        <p>Total Member</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <div class="icon">
                        <i class="bx bx-bookmark nav_icon"></i>
                    </div>
                    <div class="custom-head">
                        <h6>22k</h6>
                        <p>Total Experts</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <div class="icon">
                        <i class="bx bx-bookmark nav_icon"></i>
                    </div>
                    <div class="custom-head">
                        <h6>22k</h6>
                        <p>Total Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </section>






</main>
<!--Container Main end-->


<?php include('partial/footer.php') ?>