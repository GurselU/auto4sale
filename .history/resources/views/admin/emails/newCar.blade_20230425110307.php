<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        element.style {}

        #header.topbar-dark {
            background: #ffffff;
            z-index: 999;
            padding: 0px;
            margin: 0px;
            position: relative;
            width: 100%;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        user agent stylesheet header {
            display: block;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: normal;
            font-style: normal;
            font-size: 14px;
            line-height: 24px;
            color: #999999;
        }

        body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        ::selection {
            background: #db2d2e;
            color: #fff;
            text-shadow: none;
        }
    </style>
</head>

<body>
    <header id="header" class="topbar-dark">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="topbar-left text-lg-start text-center">
                            <ul class="list-inline">
                                <li> <i class="fa fa-envelope-o"> </i> auto@autoforsale.be</li>
                                <li> <i class="fa fa-clock-o"></i> 7/7 jours 24/24 heures</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="topbar-right text-lg-end text-center">
                            <ul class="list-inline">
                                <li> <i class="fa fa-phone"></i> +32 491 76 77 28</li>
                                <li><a href="https://www.facebook.com/profile.php?id=100090436626844"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://instagram.com/auto4sale.be?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=================================
 mega menu -->

        <div class="menu">
            <!-- menu start -->
            <nav id="menu" class="mega-menu" style="">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 position-relative">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="http://localhost:8000"><img id="logo_dark_img" src="http://localhost:8000/images/logo-dark.png" alt="logo"> </a>
                                        <div class="menu-mobile-collapse-trigger"><span></span></div>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <ul class="menu-links" style="display: none; max-height: 400px; overflow: auto;">
                                    <!-- active class -->
                                    <li class=""><a href="http://localhost:8000/admin/user">Utilisateurs</a></li>
                                    <li class=""><a href="http://localhost:8000/admin/seller/create">Formulaire</a></li>
                                    <li class=""><a href="http://localhost:8000/admin/archive">Archives</a></li>
                                    <li class=""><a href="http://localhost:8000/admin/form">To Call</a></li>
                                    <li class=""><a href="http://localhost:8000/admin/car">Véhicules</a></li>
                                    <li class="hoverTrigger"><a href="javascript:void(0)"> Gursel Unlu <i class="fa fa-angle-down fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel effect-fade" style="transition: all 400ms ease 0s;">
                                            <li><a href="http://localhost:8000/profile">Profile</a></li>
                                            <li>
                                                <form method="POST" action="http://localhost:8000/logout">
                                                    <input type="hidden" name="_token" value="p0NlNBh8YE7k41YSsIwh9wRYPoI8ZBBtwdHEBZ6i"> <button class="dropdown-item" type="submit">Se déconnecter</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 position-relative">
                <!-- menu logo -->
                <ul class="menu-logo">
                    <li>
                        <a href="http://localhost:8000"><img id="logo_dark_img" src="http://localhost:8000/images/logo-dark.png" alt="logo"> </a>
                        <div class="menu-mobile-collapse-trigger"><span></span></div>
                    </li>
                </ul>
                <!-- menu links -->
                <ul class="menu-links" style="display: none; max-height: 400px; overflow: auto;">
                    <!-- active class -->
                    <li class=""><a href="http://localhost:8000/admin/user">Utilisateurs</a></li>
                    <li class=""><a href="http://localhost:8000/admin/seller/create">Formulaire</a></li>
                    <li class=""><a href="http://localhost:8000/admin/archive">Archives</a></li>
                    <li class=""><a href="http://localhost:8000/admin/form">To Call</a></li>
                    <li class=""><a href="http://localhost:8000/admin/car">Véhicules</a></li>
                    <li class="hoverTrigger"><a href="javascript:void(0)"> Gursel Unlu <i class="fa fa-angle-down fa-indicator"></i>
                            <div class="mobileTriggerButton"></div>
                        </a>
                        <!-- drop down multilevel  -->
                        <ul class="drop-down-multilevel effect-fade" style="transition: all 400ms ease 0s;">
                            <li><a href="http://localhost:8000/profile">Profile</a></li>
                            <li>
                                <form method="POST" action="http://localhost:8000/logout">
                                    <input type="hidden" name="_token" value="p0NlNBh8YE7k41YSsIwh9wRYPoI8ZBBtwdHEBZ6i"> <button class="dropdown-item" type="submit">Se déconnecter</button>
                                </form>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    </section>
</body>

</html>