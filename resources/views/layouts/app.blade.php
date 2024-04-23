<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Site favicon -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/images/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/images/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/images/favicon-16x16.png"
        />

        <!-- Mobile Specific Metas -->
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />

        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="/styles/icon-font.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="/plugins/datatables/css/dataTables.bootstrap4.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="/plugins/datatables/css/responsive.bootstrap4.min.css"
        />
        <link rel="stylesheet" type="text/css" href="/styles/style.css" />

        @vite(['resources/js/app.js'])
    </head>
    <body >
        @include('layouts.header')
        <div class="right-sidebar">
            <div class="sidebar-title">
                <h3 class="weight-600 font-16 text-blue">
                    Layout Settings
                    <span class="btn-block font-weight-400 font-12"
                        >User Interface Settings</span
                    >
                </h3>
                <div class="close-sidebar" data-toggle="right-sidebar-close">
                    <i class="icon-copy ion-close-round"></i>
                </div>
            </div>
            <div class="right-sidebar-body customscroll">
                <div class="right-sidebar-body-content">
                    <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary header-white active"
                            >White</a
                        >
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary header-dark"
                            >Dark</a
                        >
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary sidebar-light"
                            >White</a
                        >
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary sidebar-dark active"
                            >Dark</a
                        >
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                    <div class="sidebar-radio-group pb-10 mb-10">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebaricon-1"
                                name="menu-dropdown-icon"
                                class="custom-control-input"
                                value="icon-style-1"
                                checked=""
                            />
                            <label class="custom-control-label" for="sidebaricon-1"
                                ><i class="fa fa-angle-down"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebaricon-2"
                                name="menu-dropdown-icon"
                                class="custom-control-input"
                                value="icon-style-2"
                            />
                            <label class="custom-control-label" for="sidebaricon-2"
                                ><i class="ion-plus-round"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebaricon-3"
                                name="menu-dropdown-icon"
                                class="custom-control-input"
                                value="icon-style-3"
                            />
                            <label class="custom-control-label" for="sidebaricon-3"
                                ><i class="fa fa-angle-double-right"></i
                            ></label>
                        </div>
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                    <div class="sidebar-radio-group pb-30 mb-10">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebariconlist-1"
                                name="menu-list-icon"
                                class="custom-control-input"
                                value="icon-list-style-1"
                                checked=""
                            />
                            <label class="custom-control-label" for="sidebariconlist-1"
                                ><i class="ion-minus-round"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebariconlist-2"
                                name="menu-list-icon"
                                class="custom-control-input"
                                value="icon-list-style-2"
                            />
                            <label class="custom-control-label" for="sidebariconlist-2"
                                ><i class="fa fa-circle-o" aria-hidden="true"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebariconlist-3"
                                name="menu-list-icon"
                                class="custom-control-input"
                                value="icon-list-style-3"
                            />
                            <label class="custom-control-label" for="sidebariconlist-3"
                                ><i class="dw dw-check"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebariconlist-4"
                                name="menu-list-icon"
                                class="custom-control-input"
                                value="icon-list-style-4"
                                checked=""
                            />
                            <label class="custom-control-label" for="sidebariconlist-4"
                                ><i class="icon-copy dw dw-next-2"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebariconlist-5"
                                name="menu-list-icon"
                                class="custom-control-input"
                                value="icon-list-style-5"
                            />
                            <label class="custom-control-label" for="sidebariconlist-5"
                                ><i class="dw dw-fast-forward-1"></i
                            ></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                id="sidebariconlist-6"
                                name="menu-list-icon"
                                class="custom-control-input"
                                value="icon-list-style-6"
                            />
                            <label class="custom-control-label" for="sidebariconlist-6"
                                ><i class="dw dw-next"></i
                            ></label>
                        </div>
                    </div>

                    <div class="reset-options pt-30 text-center">
                        <button class="btn btn-danger" id="reset-settings">
                            Reset Settings
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="/">
                    <x-application-logo height="69px" class="dark-logo" />
                    <x-application-logo height="69px" class="light-logo" />
                    
                </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                @include('layouts.menu')
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>
                                    @if (isset($header))
                                        {{ $header }}
                                    @endif
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $slot }}
                @include('layouts.quick')
                <div class="footer-wrap pd-20 mb-20 card-box">
                    DeskApp By
                    <a href="#" target="_blank"
                        >{{ config('app.name', 'Laravel') }}</a
                    >
                </div>
            </div>
        </div>
        <!-- js -->
        <script src="/scripts/core.js"></script>
        <script src="/scripts/script.min.js"></script>
        <script src="/scripts/process.js"></script>
        <script src="/scripts/layout-settings.js"></script>
        <script src="/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <script src="/scripts/dashboard3.js"></script>
    </body>
</html>

