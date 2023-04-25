<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <header id="header" class="topbar-dark">


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