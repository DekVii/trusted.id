
<!-- Start Login Register Area -->
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/bg/5.jpg')?>) no-repeat scroll center center / cover ;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <ul class="login__register__menu nav justify-contend-center" role="tablist">
                    <li role="presentation" class="login active"><a class="active" href="#login" role="tab" data-toggle="tab">Login</a></li>
                    <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Login Register Content -->
        <div class="row tab-content">
            <div class="col-md-6  ml-auto mr-auto">
                <div class="htc__login__register__wrap">
                <div class="flash-auth" data-flashauth="<?=$this->session->flashdata('auth')?>"></div>
                    <!-- Start Single Content -->
                    <div id="login" role="tabpanel" class="single__tabs__panel tab-pane active">
                        <form action="<?php echo base_url('index.php/auth/login_procces') ?>" class="login" method="post">
                            <input type="text" placeholder="Your Email* "name="Email" class="login" required="required">
                            <input type="password" placeholder="Your Password*" name="Password" class="login" required="required">
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="tabs__checkbox">
                                        <input type="checkbox">
                                        <span> Remember me</span>
                                        <span class="forget"><a href="#">Forget Pasword?</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="htc__login__btn mt--30">
                                <button type="submit" name="login" class="btn btn-primary btn-block" >Login</button>
                            </div>
                            <div class="htc__social__connect">
                                <h2>Or Login With</h2>
                                <ul class="htc__soaial__list">
                                    <li><a class="bg--twitter" href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>

                                    <li><a class="bg--instagram" href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>

                                    <li><a class="bg--facebook" href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>

                                    <li><a class="bg--googleplus" href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div id="register" role="tabpanel" class="single__tabs__panel tab-pane">
                        <form action="<?php echo base_url('index.php/main/input_process') ?>" class="login" method="post">
                            <input type="text" placeholder="Your Name*" name="name" class="login" required="required">
                            <input type="text" placeholder="Your Email* "name="email" class="login" required="required">
                            <input type="password" placeholder="Your Password*" name="password" class="login" required="required">
                            <input type="text" placeholder="Your Contact" name="Contact" class="login" required="required">
                            <input type="text" placeholder="Your Address" name="Address" class="login" required="required">
                        </form>
                        <div class="tabs__checkbox">
                            <input type="checkbox">
                            <span> Remember me</span>
                        </div>
                        <div class="htc__login__btn mt--30">
                           <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="htc__social__connect">
                            <h2>Or Login With</h2>
                            <ul class="htc__soaial__list">
                                <li><a class="bg--twitter" href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a class="bg--instagram" href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a class="bg--facebook" href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a class="bg--googleplus" href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
        <!-- End Login Register Content -->
    </div>
</div>
<script>
        
        const flashAuth = $('.flash-auth').data('flashauth');

        if(flashAuth)
        {
            Swal.fire({
                title: 'Login ' + flashAuth ,
                text: 'Username / Password Salah !!!',
                type: 'error',
                timer: 2000
            });
        }

    </script>