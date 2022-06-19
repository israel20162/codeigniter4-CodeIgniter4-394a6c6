<!doctype html>
<html>

<head>
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js') ?>"></script>
</head>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>


    <script>
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        const d = new Date();
    </script>


    <script>
        $(document).ready(function() {

            jQuery(function($) {
                var path = window.location.href;
                $('.nav-link').each(function() {
                    if (this.href === path) {
                        $(this).addClass('active');
                    }
                });
            });
        });

        $('.counter-count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 20000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <div class=" sticky-top bg-white mx-auto   " style="box-shadow: 0px 1px 0px 0px grey">
        <nav class="navbar  navbar-expand-lg w-100  me-auto  mx-auto  bg-white  " style="max-width: 1100px;">
            <div class="container-fluid  " style=" background-color:white; ; padding-top:0px">
                <a class=" navbar-brand" href="/"><img src="<?php echo base_url('assets/images/Kweta-1536x521.jpg') ?>" alt="" class=" nav-img" style="width:15vw;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  " id="collapsibleNavbar">
                    <ul class="navbar-nav nav-list ms-lg-auto navbar-nav-scroll d-flex">
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link a " href="/">HOME</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link a " href="/about-us">ABOUT US</a>
                        </li>
                        <li class="nav-item mx-lg-3">
                            <a class="nav-link a " href="/contact-us">CONTACT US / DONATE</a>
                        </li>
                       
                    </ul>


                </div>
            </div>
        </nav>
    </div>