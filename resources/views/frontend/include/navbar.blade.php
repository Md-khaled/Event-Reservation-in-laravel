<div class="top_panel_bottom">
                        <div class="content_wrap clearfix">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul id="menu_main" class="menu_main_nav">
                                <span style="float: left; margin-top: 3px;"><img  src="{{asset('public/front')}}/images/logo.png"></span>

                                    <li class="menu-item  menu-item-has-children current-menu-ancestor">
                                        <a href="{{route('home')}}"><span>Home</span></a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="{{ route('user.contact.create') }}"><span>About</span></a>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('user.teams.create') }}"><span>Team</span></a></li>
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ route('user.services.create') }}"><span>Services</span></a>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('user.contact.index') }}"><span>Contacts</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="#"><img data-cfsrc="{{asset('public/front')}}/images/logo.png" class="logo_main" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/logo.png" class="logo_main" alt=""></noscript></a>
                    </div>
                    <div class="menu_main_cart top_panel_icon">
                        <a  class="top_panel_cart_button"> <span class="contact_icon icon-icon_cart"></span><span class="contact_label contact_cart_label">Email</span> <span class="contact_cart_totals">
                        <span class="cart_items">(2)</span> </span>
                        </a>
                        
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                            <ul id="menu_mobile" class="menu_main_nav">
                                <li class="menu-item ">
                                    <a href="{{route('home')}}"><span>Home</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#"><span>About</span></a>
                                </li>
                                <li class="menu-item"><a href="our-team.html"><span>Team</span></a></li>
                                <li class="menu-item ">
                                    <a href="#"><span>Services</span></a>
                                </li>
                                <li class="menu-item"><a href="contacts.html"><span>Contacts</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="panel_middle">
                        <div class="contact_field contact_phone">
                             <span class="contact_icon icon-phone"></span>
                             <span class="contact_label contact_phone">800-123-4567</span>
                             <span class="contact_icon icon-mail"></span>
                             <span class="contact_label contact_email ">info@yoursite.com</span>
                        </div>
                    </div>
                </div>
                <div class="mask"></div>
            </div>