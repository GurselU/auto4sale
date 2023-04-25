<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

element.style {
}
.mega-menu > section.menu-list-items {
    margin: 0;
    padding: 0;
    display: block;
    float: left;
    width: 100%;
    background-color: transparent;
}

.mega-menu * {
    outline: none;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box !important;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    -webkit-tap-highlight-color: transparent;
    text-align: left;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
.mega-menu {
    margin: 0 auto;
    padding: 0;
    display: block;
    float: none;
    position: relative;
    z-index: 999;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    min-height: 102px;
    clear: both;
    box-sizing: border-box;
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
:root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-font-sans-serif: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
}
*, ::after, ::before {
    box-sizing: border-box;
}
*, ::after, ::before {
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