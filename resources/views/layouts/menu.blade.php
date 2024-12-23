<div class="sidebar-menu">
    <ul id="accordion-menu">
        <li>
            <a href="{{route('dashboard.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('dashboard.*')) active @endif">
                <span class="micon bi bi-house"></span
                ><span class="mtext">Dashboard</span>
            </a>
        </li>
        @if(Auth::user()->role->rights_0)
        <li>
            <a href="{{route('roles.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('roles.*')) active @endif">
                <span class="micon bi bi-people-fill"></span
                ><span class="mtext">Roles</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->rights_1)
        <li>
            <a href="{{route('instructions.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('instructions.*')) active @endif">
                <span class="micon bi bi-book"></span
                ><span class="mtext">Instructions</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->rights_2)
        <li>
            <a href="{{route('orders.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('orders.*')) active @endif">
                <span class="micon bi bi-list-columns-reverse"></span
                ><span class="mtext">Orders</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->rights_3)
        <li>
            <a href="{{route('finance.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('finance.*')) active @endif">
                <span class="micon bi bi-currency-exchange"></span
                ><span class="mtext">Finance</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->rights_4)
        <li>
            <a href="{{route('supplies.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('supplies.*')) active @endif">
                <span class="micon bi bi-inboxes-fill"></span
                ><span class="mtext">Supplies</span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role->rights_5)
        <li>
            <a href="{{route('settings.index')}}" class="dropdown-toggle no-arrow @if(request()->routeIs('settings.*')) active @endif">
                <span class="micon icon-copy ti-settings"></span
                ><span class="mtext">Settings</span>
            </a>
        </li>
        @endif
        <!-- <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-house"></span
                ><span class="mtext">Home</span>
            </a>
            <ul class="submenu">
                <li><a href="index.html">Dashboard style 1</a></li>
                <li><a href="index2.html">Dashboard style 2</a></li>
                <li><a href="index3.html">Dashboard style 3</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-textarea-resize"></span
                ><span class="mtext">Forms</span>
            </a>
            <ul class="submenu">
                <li><a href="form-basic.html">Form Basic</a></li>
                <li>
                    <a href="advanced-components.html">Advanced Components</a>
                </li>
                <li><a href="form-wizard.html">Form Wizard</a></li>
                <li><a href="html5-editor.html">HTML5 Editor</a></li>
                <li><a href="form-pickers.html">Form Pickers</a></li>
                <li><a href="image-cropper.html">Image Cropper</a></li>
                <li><a href="image-dropzone.html">Image Dropzone</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-table"></span
                ><span class="mtext">Tables</span>
            </a>
            <ul class="submenu">
                <li><a href="basic-table.html">Basic Tables</a></li>
                <li><a href="datatable.html">DataTables</a></li>
            </ul>
        </li>
        
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-archive"></span
                ><span class="mtext"> UI Elements </span>
            </a>
            <ul class="submenu">
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-cards.html">Cards</a></li>
                <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                <li><a href="ui-modals.html">Modals</a></li>
                <li><a href="ui-tabs.html">Tabs</a></li>
                <li>
                    <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                </li>
                <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                <li><a href="ui-notification.html">Notification</a></li>
                <li><a href="ui-timeline.html">Timeline</a></li>
                <li><a href="ui-progressbar.html">Progressbar</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
                <li><a href="ui-list-group.html">List group</a></li>
                <li><a href="ui-range-slider.html">Range slider</a></li>
                <li><a href="ui-carousel.html">Carousel</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-command"></span
                ><span class="mtext">Icons</span>
            </a>
            <ul class="submenu">
                <li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
                <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                <li><a href="foundation.html">Foundation Icons</a></li>
                <li><a href="ionicons.html">Ionicons Icons</a></li>
                <li><a href="themify.html">Themify Icons</a></li>
                <li><a href="custom-icon.html">Custom Icons</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-pie-chart"></span
                ><span class="mtext">Charts</span>
            </a>
            <ul class="submenu">
                <li><a href="highchart.html">Highchart</a></li>
                <li><a href="knob-chart.html">jQuery Knob</a></li>
                <li><a href="jvectormap.html">jvectormap</a></li>
                <li><a href="apexcharts.html">Apexcharts</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-file-earmark-text"></span
                ><span class="mtext">Additional Pages</span>
            </a>
            <ul class="submenu">
                <li><a href="video-player.html">Video Player</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="forgot-password.html">Forgot Password</a></li>
                <li><a href="reset-password.html">Reset Password</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-bug"></span
                ><span class="mtext">Error Pages</span>
            </a>
            <ul class="submenu">
                <li><a href="400.html">400</a></li>
                <li><a href="403.html">403</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="500.html">500</a></li>
                <li><a href="503.html">503</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-back"></span
                ><span class="mtext">Extra Pages</span>
            </a>
            <ul class="submenu">
                <li><a href="blank.html">Blank</a></li>
                <li><a href="contact-directory.html">Contact Directory</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-detail.html">Blog Detail</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="product-detail.html">Product Detail</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="pricing-table.html">Pricing Tables</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-hdd-stack"></span
                ><span class="mtext">Multi Level Menu</span>
            </a>
            <ul class="submenu">
                <li><a href="javascript:;">Level 1</a></li>
                <li><a href="javascript:;">Level 1</a></li>
                <li><a href="javascript:;">Level 1</a></li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon fa fa-plug"></span
                        ><span class="mtext">Level 2</span>
                    </a>
                    <ul class="submenu child">
                        <li><a href="javascript:;">Level 2</a></li>
                        <li><a href="javascript:;">Level 2</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Level 1</a></li>
                <li><a href="javascript:;">Level 1</a></li>
                <li><a href="javascript:;">Level 1</a></li>
            </ul>
        </li>
        <li>
            <a href="sitemap.html" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-diagram-3"></span
                ><span class="mtext">Sitemap</span>
            </a>
        </li>
        <li>
            <a href="chat.html" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-chat-right-dots"></span
                ><span class="mtext">Chat</span>
            </a>
        </li>
        <li>
            <a href="invoice.html" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-receipt-cutoff"></span
                ><span class="mtext">Invoice</span>
            </a>
        </li>
        
    </ul> -->
</div>