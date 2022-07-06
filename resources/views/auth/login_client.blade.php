@extends('index')
@section('contenu')
     <!--section contacts-->
     <section id="models" class="py-5" style="margin-top: 5.5em">
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Login card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Login From Here</h5>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>

                        </div>
                        <div class="card-block">
                            <div class="j-wrapper j-wrapper-400">
                                <form action="j-pro/php/action.php" method="post" class="j-pro" id="j-pro" novalidate="">
                                    <!-- end /.header -->
                                    <div class="j-content">
                                        <!-- start login -->
                                        <div class="j-unit">
                                            <div class="j-input">
                                                <label class="j-icon-right" for="login">
                                                    <i class="icofont icofont-ui-user"></i>
                                                </label>
                                                <input type="text" id="login" name="login" placeholder="your login...">
                                            </div>
                                        </div>
                                        <!-- end login -->
                                        <!-- start password -->
                                        <div class="j-unit">
                                            <div class="j-input">
                                                <label class="j-icon-right" for="password">
                                                    <i class="icofont icofont-lock"></i>
                                            </label>
                                                <input type="password" id="password" name="password" placeholder="your password...">
                                                <span class="j-hint">
                                                    <a href="#" class="j-link">Mot de passe oublié?</a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- end password -->
                                        <!-- start reCaptcha -->
                                        <div class="j-unit">
                                            <!-- start an example of the site key -->
                                            <div class="g-recaptcha" data-sitekey="6LeV7gwUAAAAAKOX-B12lNcg1ids8dFylMP6XihO"></div>
                                            <!-- end an example of the site key -->
                                            <!-- <div class="g-recaptcha" data-sitekey="your-site-key"></div> -->
                                        </div>
                                        <!-- end reCaptcha -->
                                        <!-- start response from server -->
                                        <div class="j-response"></div>
                                        <!-- end response from server -->
                                    </div>
                                    <!-- end /.content -->
                                    <div class="j-footer">
                                        <button type="submit" class="btn btn-primary">Se connecter</button>
                                    </div>
                                    <!-- end /.footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Login card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </section>
    <!--section contacts-->
@endsection