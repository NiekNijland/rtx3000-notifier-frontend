<!doctype html>
<html class="no-js" lang="" style="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GeForce Tracker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="SoonLaunch">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.5.0.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body style="height: 100vh; position: relative">
        <main class="main-06" style="height: 100vh; position: relative">
            <div class="header header-06">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <a href="#" class="logo"> <img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                        </div>
                        <div class="col-md-8">
                            <div class="header-right text-right">
                                <a href="https://github.com/NiekNijland" target="_blank">Say hello! My GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-wrapper demo-06">
                <div class="hero-area mx-auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="heading">
                                    <h1 class="text-white wow fadeInUp" data-wow-delay=".2s" style="font-size: 60px"><?php print($subscriber['email']); ?></h1>
                                </div>
                            </div>
                            <div class="col-xs-11 col-lg-8" style="padding-bottom: 1px">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex mx-auto">
                                        <a id="block-RTX3090" onclick="UpdatePreferences(this, 'RTX3090')" href="javascript:;" style="display: block" class="card <?php if(isset($subscriber['cards']['RTX3090']) && $subscriber['cards']['RTX3090'] == true) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count" style="font-size: 30px">RTX 3090</span>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a id="block-RTX3080" onclick="UpdatePreferences(this, 'RTX3080')" href="javascript:;" style="display: block" class="card <?php if(isset($subscriber['cards']['RTX3080']) && $subscriber['cards']['RTX3080'] == true) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count" style="font-size: 30px">RTX 3080</span>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a id="block-RTX3070" onclick="UpdatePreferences(this, 'RTX3070')" href="javascript:;" style="display: block" class="card <?php if(isset($subscriber['cards']['RTX3070']) && $subscriber['cards']['RTX3070'] == true) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count" style="font-size: 30px">RTX 3070</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer" style="position: absolute; bottom: 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5">
                            <div class="credit wow fadeInRight" data-wow-delay=".4s">
                                <p>Made by <a rel="nofollow" class="githubfooter" href="https://github.com/NiekNijland">Niek Nijland</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
		<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap-4.5.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            function UpdatePreferences(element, cardtype) {
                $.ajax({
                    "url": "https://geforce.nieknijland.com/voorkeuren/opslaan",
                    "type": "POST",
                    "data": {
                            "cardtype": cardtype,
                            "subscriber-id": "<?php print($subscriber['_id']); ?>",
                            "_token": "{{ csrf_token() }}"},
                    "success": function (response) {
                        Swal.fire({
                            "icon": "success",
                            "title": "Opgeslagen!",
                            "showConfirmButton": false,
                            "timer": 1500
                        });
                        if($(element).hasClass("bg-success")){
                            $(element).addClass("bg-danger");
                            $(element).removeClass("bg-success");
                        }else{
                            $(element).addClass("bg-success");
                            $(element).removeClass("bg-danger");
                        }
                    },
                    "error": function (response) {
                        Swal.fire({
                            "icon": "error",
                            "title": "Error!",
                            "showConfirmButton": false,
                            "timer": 1500
                        });
                    }
                });
            }
        </script>
    </body>
</html>
