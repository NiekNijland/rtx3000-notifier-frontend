<!doctype html>
<html class="no-js" lang="">
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
    <body>
        <main class="main-06">
            <div class="header header-06">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <a href="#" class="logo"> <img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                        </div>
                        <div class="col-md-8">
                            <div class="header-right text-right">
                                <a href="https://github.com/NiekNijland" target="_blank">Handig? bouw mee op GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-wrapper demo-06">
                <div class="hero-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="heading">
                                    <h1 class="text-white wow fadeInUp gpuname" data-wow-delay=".2s">Nvidia GeForce <br> RTX 3090</h1>
                                </div>
                            </div>
                            <div class="col-xs-11 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex mx-auto">
                                        <a href="https://www.megekko.nl/Computer/Componenten/Videokaarten/Nvidia-Videokaarten?f=f_429-169345_vrrd-3_s-populair_pp-50_p-1_d-list_cf-" target="_blank" class="card <?php if($megekko->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $megekko->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Megekko</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://azerty.nl/category/componenten/videokaarten#!sorting=15&limit=30&view=grid&Videochip_videokaarten=NVIDIA_GeForce_RTX_3090" target="_blank" class="card <?php if($azerty->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $azerty->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Azerty</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.cdromland.nl/" target="_blank" class="card <?php if($cdromland->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $cdromland->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">CD-ROM-LAND</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-area wow fadeIn col-xs-1 col-lg-5 mx-auto" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="col-xs-12">
                                    <div class="subscribe-content mt-10">
                                        <h2 class="subscribe-title"><span>Ontvang</span> Updates</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="subscribe-form mt-10">
                                        <form class="form-getupdates">
                                            @csrf
                                            <input type="hidden" value="RTX3090" name="cardtype"/>
                                            <input type="email" maxlength="255" placeholder="email@provider.nl" name="email">
                                            <button class="main-btn"><h5 class="text-white">Aanmelden</h5></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.informatique.nl/?m=sts&g=166&p=&sort=&ss=2&pr_min=&pr_max=&at529=27549" target="_blank" class="card <?php if($informatique->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $informatique->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Informatique</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
										 <a href="https://www.coolblue.nl/videokaarten/nvidia-chipset/nvidia-geforce-rtx-3000-serie/nvidia-geforce-rtx-3090" target="_blank" class="card <?php if($coolblue->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $coolblue->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Coolblue</p>
                                            </div>
                                        </a>
										<div class="col-1"></div>
										 <a href="https://www.cyberport.de/pc-und-zubehoer/komponenten/grafikkarten/nvidia-fuer-gaming.html?productsPerPage=50&sort=popularity&2E_Grafikchip=GeForce%20RTX%203090&page=1&stockLevelStatus=IMMEDIATELY" target="_blank" class="card <?php if($cyberport->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $cyberport->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Cyberport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.amazon.nl/s?k=3090&i=electronics&bbn=16366443031&rh=n%3A16366443031&dc&__mk_nl_NL=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1606476830&rnid=16332311031&ref=sr_nr_p_n_availability_2" target="_blank" class="card <?php if($amazon->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $amazon->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Amazon</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.centralpoint.nl/videokaarten/?Sorting=stockDESC&facet_716=GeForce+RTX+3090" target="_blank" class="card <?php if($centralpoint->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $centralpoint->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">Centralpoint</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.pcking.de/eshop.php?action=like_search&shopfilter_category=&s_group_id=*&s_order_name=&onlygroups=0&s_available=&articlelist_type=search&s_volltext=3090&security_token=60%3A36524297ff68fb75d5b2a63f11b733fa%3A46634" target="_blank" class="card <?php if($pcking->GetCardStock("RTX3090")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $pcking->GetCardStock("RTX3090") !!}</span>
                                                <p class="text text-white">PCKing</p>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="heading">
                                    <h1 class="text-white wow fadeInUp gpuname" data-wow-delay=".2s">Nvidia GeForce <br> RTX 3080</h1>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.megekko.nl/Computer/Componenten/Videokaarten/Nvidia-Videokaarten?f=f_429-169344_vrrd-3_s-populair_pp-50_p-1_d-list_cf-" target="_blank" class="card <?php if($megekko->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $megekko->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Megekko</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://azerty.nl/category/componenten/videokaarten#!sorting=15&limit=30&view=grid&Videochip_videokaarten=NVIDIA_GeForce_RTX_3080" target="_blank" class="card <?php if($azerty->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $azerty->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Azerty</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://https://www.cdromland.nl/" target="_blank" class="card <?php if($cdromland->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $cdromland->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">CD-ROM-LAND</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-area wow fadeIn col-md-12 col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="col-xs-12">
                                    <div class="subscribe-content mt-10">
                                        <h2 class="subscribe-title"><span>Ontvang</span> Updates</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="subscribe-form mt-10">
                                        <form class="form-getupdates">
                                            @csrf
                                            <input type="hidden" value="RTX3080" name="cardtype"/>
                                            <input type="email" maxlength="255" placeholder="email@provider.nl"  name="email">
                                            <button class="main-btn"><h5 class="text-white">Aanmelden</h5></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.informatique.nl/?m=sts&g=166&p=&sort=&ss=2&pr_min=&pr_max=" target="_blank" class="card <?php if($informatique->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $informatique->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Informatique</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
										 <a href="https://www.coolblue.nl/videokaarten/nvidia-chipset/nvidia-geforce-rtx-3000-serie/nvidia-geforce-rtx-3080" target="_blank" class="card <?php if($coolblue->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $coolblue->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Coolblue</p>
                                            </div>
                                        </a>
										<div class="col-1"></div>
										 <a href="https://www.cyberport.de/pc-und-zubehoer/komponenten/grafikkarten/nvidia-fuer-gaming.html?productsPerPage=50&sort=popularity&2E_Grafikchip=GeForce%20RTX%203080&page=1&stockLevelStatus=IMMEDIATELY" target="_blank" class="card <?php if($cyberport->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $cyberport->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Cyberport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.amazon.nl/s?k=3080&i=electronics&bbn=16366443031&rh=n%3A16366443031&dc&__mk_nl_NL=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1606476830&rnid=16332311031&ref=sr_nr_p_n_availability_2" target="_blank" class="card <?php if($amazon->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $amazon->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Amazon</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.centralpoint.nl/videokaarten/?Sorting=stockDESC&facet_716=GeForce+RTX+3080" target="_blank" class="card <?php if($centralpoint->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $centralpoint->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">Centralpoint</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.pcking.de/eshop.php?action=like_search&shopfilter_category=&s_group_id=*&s_order_name=&onlygroups=0&s_available=&articlelist_type=search&s_volltext=3080&security_token=60%3A36524297ff68fb75d5b2a63f11b733fa%3A46634" target="_blank" class="card <?php if($pcking->GetCardStock("RTX3080")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $pcking->GetCardStock("RTX3080") !!}</span>
                                                <p class="text text-white">PCKing</p>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="heading">
                                    <h1 class="text-white wow fadeInUp gpuname" data-wow-delay=".2s">Nvidia GeForce <br> RTX 3070</h1>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.megekko.nl/Computer/Componenten/Videokaarten/Nvidia-Videokaarten?f=f_429-169343_vrrd-3_s-populair_pp-50_p-1_d-list_cf-" target="_blank" class="card <?php if($megekko->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $megekko->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Megekko</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="" target="_blank" class="card <?php if($azerty->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $azerty->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Azerty</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://https://www.cdromland.nl/" target="_blank" class="card <?php if($cdromland->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $cdromland->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">CD-ROM-LAND</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-area wow fadeIn col-md-12 col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="col-xs-12">
                                    <div class="subscribe-content mt-10">
                                        <h2 class="subscribe-title"><span>Ontvang</span> Updates</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="subscribe-form mt-10">
                                        <form class="form-getupdates">
                                            @csrf
                                            <input type="hidden" value="RTX3070" name="cardtype"/>
                                            <input type="email" maxlength="255" placeholder="email@provider.nl" name="email">
                                            <button class="main-btn"><h5 class="text-white">Aanmelden</h5></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.informatique.nl/zoeken/?q=3070&k=20201125&g=166" target="_blank" class="card <?php if($informatique->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $informatique->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Informatique</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
										 <a href="https://www.coolblue.nl/videokaarten/nvidia-chipset/nvidia-rtx-3070" target="_blank" class="card <?php if($coolblue->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $coolblue->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Coolblue</p>
                                            </div>
                                        </a>
										<div class="col-1"></div>
										 <a href="https://www.cyberport.de/pc-und-zubehoer/komponenten/grafikkarten/nvidia-fuer-gaming.html?productsPerPage=50&sort=popularity&2E_Grafikchip=GeForce%20RTX%203070&page=1&stockLevelStatus=IMMEDIATELY" target="_blank" class="card <?php if($cyberport->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $cyberport->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Cyberport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.amazon.nl/s?k=3070&i=electronics&bbn=16366443031&rh=n%3A16366443031&dc&__mk_nl_NL=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1606476830&rnid=16332311031&ref=sr_nr_p_n_availability_2" target="_blank" class="card <?php if($amazon->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $amazon->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Amazon</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.centralpoint.nl/videokaarten/?Sorting=stockDESC&facet_716=GeForce+RTX+3070" target="_blank" class="card <?php if($centralpoint->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $centralpoint->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">Centralpoint</p>
                                            </div>
                                        </a>
										<div class="col-1"></div>
                                        <a href="https://www.pcking.de/eshop.php?action=like_search&shopfilter_category=&s_group_id=*&s_order_name=&onlygroups=0&s_available=&articlelist_type=search&s_volltext=3070&security_token=60%3A36524297ff68fb75d5b2a63f11b733fa%3A46634" target="_blank" class="card <?php if($pcking->GetCardStock("RTX3070")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $pcking->GetCardStock("RTX3070") !!}</span>
                                                <p class="text text-white">PCKing</p>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="heading">
                                    <h1 class="text-white wow fadeInUp gpuname" data-wow-delay=".2s">Nvidia GeForce <br> RTX 3060 ti</h1>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.megekko.nl/Computer/Componenten/Videokaarten/Nvidia-Videokaarten?f=f_429-169343_vrrd-3_s-populair_pp-50_p-1_d-list_cf-" target="_blank" class="card <?php if($megekko->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $megekko->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Megekko</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="" target="_blank" class="card <?php if($azerty->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $azerty->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Azerty</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://https://www.cdromland.nl/" target="_blank" class="card <?php if($cdromland->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="card-body single-count-content">
                                                <span class="count">{!! $cdromland->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">CD-ROM-LAND</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-area wow fadeIn col-md-12 col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="col-xs-12">
                                    <div class="subscribe-content mt-10">
                                        <h2 class="subscribe-title"><span>Ontvang</span> Updates</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="subscribe-form mt-10">
                                        <form class="form-getupdates">
                                            @csrf
                                            <input type="hidden" value="RTX3060TI" name="cardtype"/>
                                            <input type="email" maxlength="255" placeholder="email@provider.nl" name="email">
                                            <button class="main-btn"><h5 class="text-white">Aanmelden</h5></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.informatique.nl/zoeken/?q=3060&k=20201125&g=166" target="_blank" class="card <?php if($informatique->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $informatique->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Informatique</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
										 <a href="https://www.coolblue.nl/videokaarten/nvidia-chipset/nvidia-rtx-3060" target="_blank" class="card <?php if($coolblue->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $coolblue->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Coolblue</p>
                                            </div>
                                        </a>
										<div class="col-1"></div>
										 <a href="https://www.cyberport.de/pc-und-zubehoer/komponenten/grafikkarten/nvidia-fuer-gaming.html?productsPerPage=50&sort=popularity&2E_Grafikchip=GeForce%20RTX%203060&page=1&stockLevelStatus=IMMEDIATELY" target="_blank" class="card <?php if($cyberport->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $cyberport->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Cyberport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <div class="wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="countdown d-flex">
                                        <a href="https://www.amazon.nl/s?k=3060&i=electronics&bbn=16366443031&rh=n%3A16366443031&dc&__mk_nl_NL=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1606476830&rnid=16332311031&ref=sr_nr_p_n_availability_2" target="_blank" class="card <?php if($amazon->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $amazon->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Amazon</p>
                                            </div>
                                        </a>
                                        <div class="col-1"></div>
                                        <a href="https://www.centralpoint.nl/videokaarten/?Sorting=stockDESC&facet_716=GeForce+RTX+3060" target="_blank" class="card <?php if($centralpoint->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $centralpoint->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">Centralpoint</p>
                                            </div>
                                        </a>
										<div class="col-1"></div>
                                        <a href="https://www.pcking.de/eshop.php?action=like_search&shopfilter_category=&s_group_id=*&s_order_name=&onlygroups=0&s_available=&articlelist_type=search&s_volltext=3060&security_token=60%3A36524297ff68fb75d5b2a63f11b733fa%3A46634" target="_blank" class="card <?php if($pcking->GetCardStock("RTX3060TI")) { print('bg-success'); } else { print('bg-danger'); } ?> text-center col-3" style="display: block">
                                            <div class="single-count-content">
                                                <span class="count">{!! $pcking->GetCardStock("RTX3060TI") !!}</span>
                                                <p class="text text-white">PCKing</p>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
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
            $('.form-getupdates').submit(function(event){
                event.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "https://geforce.nieknijland.com/getupdates",
                    type:"POST",
                    data:formData,
                    success:function(response){
                        $('input[name ="email"]').val("");
                        Swal.fire({
                            icon: "success",
                            title: "Aangemeld!",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error : function(response){
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    processData: false, contentType: false,
                });
            });
        </script>
    </body>
</html>

