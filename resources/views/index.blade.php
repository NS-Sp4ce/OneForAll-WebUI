<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>OneForAll - WebUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <h4 class="text-center">OneForAll Web-UI</h4>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
        </div>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">数据表</li>
                        @if (!empty($resDomains))
                            @foreach($resDomains as $key => $data)
                                <li>
                                    <a href="#" class="font-icon-lg">
                                        <i class="metismenu-icon pe-7s-server"></i>
                                        {{ $key }}
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        @foreach($data as $value)
                                            <li>
                                                <a href="/tables/{{ $value }}">
                                                    {{ $value }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        @else
                            <p>暂无数据</p>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-midnight-bloom">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <h4 class="widget-heading">表数量</h4>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{ $tabCounts }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <h4 class="widget-heading">站点数量</h4>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{ $uniDomainCounts }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-plum-plate">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <h4 class="widget-heading">存活域名数量</h4>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{ $columnNums }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/assets/scripts/main.js"></script>
</body>

</html>