<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Kendo UI -->
    <link href="https://kendo.cdn.telerik.com/2021.3.1207/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2021.3.1207/styles/kendo.default.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2021.3.1207/js/kendo.all.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <script id="notification-body" type="text/x-kendo-template">
                            <div class="notification-item" style="padding: 18px 16px 13px 16px; border-bottom: 1px solid rgba(0,0,0,.08);">
                                <span class="badge-missed"></span>
                                <div class="user-photo" style="background-image: url(img/Content/Employees-images/9.jpg); margin:0px 16px 0px 8px;"></div>
                                <div class="customer-name">
                                    <div style="font-size: 18px">Rudolf joined the Team</div>
                                    <div style="font-size: 14px; color: \#8F8F8F">Congratulate her</div>
                                </div>
                            </div>
                            <div class="notification-item" style="padding: 13px 16px 13px 16px; border-bottom: 1px solid rgba(0,0,0,.08);">
                                <span class="badge-missed"></span>
                                <div class="user-photo" style="background-image: url(img/Content/Employees-images/4.jpg); margin:0px 16px 0px 8px;"></div>
                                <div class="customer-name">
                                    <div style="font-size: 18px">Joy invited you to the class</div>
                                    <div style="font-size: 14px; color: \#8F8F8F">You have 3 more messages from Joy</div>
                                </div>
                            </div>
                            <div class="notification-item" style="padding: 13px 16px 13px 16px; background-color: rgba(66, 66, 66, 0.04); border-bottom: 1px solid rgba(0,0,0,.08);">
                                <div class="user-photo" style="background-image: url(img/Content/images/initials.jpg); margin:0px 16px 0px 8px;"></div>
                                <div class="customer-name">
                                    <div style="font-size: 18px">Your order has been shipped</div>
                                    <div style="font-size: 14px; color: \#8F8F8F">MD Inc. order update</div>
                                </div>
                            </div>
                            <button id="mark-as-read" style="margin: 15px 15px 0px 0px; background-color: \#FFFFFF; border-color: \#FF6358; color:\#FF6358; width: 165px; float: right;">Mark all as read</button>
                        </script>

                        <script id="notification-header" type="text/x-kendo-template">
                            <div class="k-hstack">
                                <div style="font-size: 19px">Notifications</div>
                                <div class="k-spacer"></div>
                                <div id="new-count">2 New</div>
                            </div>
                        </script>

                        <div id="drawer">
                            <div id="drawer-content">
                                <div id="appbar"></div>
                                <main></main>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $("main").load("dashboard.html");
                                $("#appbar").kendoAppBar({
                                    themeColor: "inherit",
                                    items: [
                                        { template: '<a id="toggleDrawer" class="k-button" style="border:0px; background:\\#FFFFFF;" href="\\#"><span class="k-icon k-i-menu"></span></a>', type: "contentItem" },
                                        { template: '<div class="appTitle" style="color:\\#2D73F5; font-size:18px;">Overview</div>', type: "contentItem" },
                                        { width: 0, type: "spacer" },
                                        { template: "<a class='k-link app-bar-link'><span class='k-icon k-i-notification'><span data-role='badge' class='k-badge k-badge-solid k-badge-error k-badge-md k-badge-dot k-badge-outside k-top-end'></span></span></a>", type: "contentItem" },
                                        { width: 26, type: "spacer" },
                                        { template: "<a class='k-link app-bar-link aboutPage'>About</a>" }
                                    ]
                                }).on("click", ".aboutPage", function (e) {
                                    $("div.k-drawer-items").find(".k-state-selected").removeClass("k-state-selected");

                                    var aboutTitle = $(".aboutPage").text();
                                    $("div.appTitle").text(aboutTitle);
                                    $("main").load("about.html");
                                    document.title = aboutTitle + " - AdminDashboard";
                                });

                                var drawer = $("#drawer").kendoDrawer({
                                    template: "<ul> \
                                                <li data-role='drawer-item' class='k-state-selected'><span class='k-icon k-i-grid'></span><span class='k-item-text' data-id='Inbox'>Dashboard</span></li> \
                                                <li data-role='drawer-item'><span class='k-icon k-i-aggregate-fields'></span><span class='k-item-text' data-id='Calendar'><a href='{{route('productos')}}'>Productos</a></span></li> \
                                                <li data-role='drawer-item'><span class='k-icon k-i-notification k-i-globe'></span><span class='k-item-text' data-id='Notifications'>Pedidos</span></li> \
                                                <li data-role='drawer-separator'></li> \
                                                <li data-role='drawer-item'><span class='k-icon k-i-gear'></span><span class='k-item-text' data-id='Attachments'>Settings</span></li> \
                                            </ul>",
                                    mode: "push",
                                    autoCollapse: false,
                                    mini: false,
                                    itemClick: function (e) {
                                        if (!e.item.hasClass("k-drawer-separator")) {
                                            var tabName = e.item.find(".k-item-text").text().split(" ")[0];
                                            var titleName = e.item.find(".k-item-text").text();
                                            e.sender.drawerContainer.find("#drawer-content > main").empty();
                                            $("main").load(tabName + ".html");

                                            document.title = titleName + " - AdminDashboard";
                                            $("div.appTitle").text(titleName);

                                            if ($("div.appTitle").text() === "Dashboard") {
                                                $("div.appTitle").text("Overview");
                                            }

                                            if ($(window).width() <= 980) {
                                                var drawerInstance = e.sender;
                                                drawerInstance.hide();
                                            }
                                        }
                                    },
                                    position: 'left',
                                    width: 240,
                                    swipeToOpen: true
                                }).getKendoDrawer();

                                var userContentTemplate = kendo.template("\
                                        <div class='user-container' style='text-align: center;'> \
                                            <img id='avatar' src='img/Content/Avatar/avatar.png' /> \
                                            <h1 style='font-size: 14px;'>{{ Auth::user()->name }}</h1> \
                                            <div style='text-decoration-line: underline; font-size: 12px;'>{{ Auth::user()->email }}</div> \
                                            <button id='signOutButton'>Sign Out</button> \
                                        </div>");
                                drawer.drawerWrapper.prepend(userContentTemplate);

                                document.title = $("div.appTitle").text(); + " - AdminDashboard";

                                $("#appbar").kendoPopover({
                                    showOn: "click",
                                    filter: ".k-i-notification",
                                    width: "400px",
                                    height: "392px",
                                    position: "bottom",
                                    header: kendo.template($("#notification-header").html()),
                                    body: kendo.template($("#notification-body").html()),
                                    show: function (e) {
                                        $("#new-count").kendoBadge({
                                            themeColor: "warning",
                                            shape: "rectangle"
                                        });

                                        $('.badge-missed').kendoBadge({
                                            themeColor: 'warning',
                                            shape: 'circle',
                                            size: 'small'
                                        });

                                        $("#mark-as-read").kendoButton({
                                            click: function () {
                                                $(".k-badge-dot").remove();
                                                $('.badge-missed').remove();
                                                $("#new-count").text("0 New");
                                                $(".notification-item").css("background-color", "rgba(66, 66, 66, 0.04)")
                                            }
                                        });
                                    }
                                });



                                $("#signOutButton").kendoButton({
                                    click: signOut
                                });

                                function signOut() {
                                    location.href = "login.html";
                                };

                                $("#drawer").data("kendoDrawer").show();

                                $("#toggleDrawer").click(function () {
                                    var drawerInstance = $("#drawer").data("kendoDrawer");
                                    var drawerContainer = drawerInstance.drawerContainer;

                                    if (drawerContainer.hasClass("k-drawer-expanded")) {
                                        drawerInstance.hide();
                                    } else {
                                        drawerInstance.show();
                                    };

                                    setTimeout(function () {
                                        kendo.resize($(".k-chart"));
                                    }, 350);
                                });

                                if ($(window).width() <= 980) {
                                    setTimeout(function () {
                                        var drawerInstance = $("#drawer").data("kendoDrawer");
                                        drawerInstance.hide();
                                    });
                                };
                            });
                        </script>

                        <style>
                            body {
                                margin: 0px;
                                font-family: Roboto;
                                font-style: normal;
                                font-weight: normal;
                            }

                            #appbar {
                                padding: 0px 25px 0px 24px;
                                height: 48px;
                                background: #FFFFFF;
                                box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.06);
                            }

                            #avatar {
                                margin: 32px auto 0;
                                width: 64px;
                                border-radius: 50%;
                            }

                            #signOutButton {
                                pointer-events: auto;
                                margin: 12px 0 9px 0;
                                background: rgba(66, 66, 66, 0.16);
                            }

                            #drawer-content {
                                background-color: #FAFAFA;
                            }

                            .k-popover-callout {
                                display: none;
                            }

                            .k-popover-body {
                                padding: 0px;
                            }

                            .user-photo {
                                display: inline-block;
                                width: 64px;
                                height: 64px;
                                border-radius: 50%;
                                background-size: 60px 64px;
                                background-position: center center;
                                vertical-align: middle;
                                line-height: 64px;
                                box-shadow: inset 0 0 1px #999, inset 0 0 10px rgba(0, 0, 0, 0.2);
                                margin-left: 5px;
                            }

                            .customer-name {
                                display: inline-block;
                                vertical-align: middle;
                                padding-left: 3 px;
                            }
                        </style>
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
