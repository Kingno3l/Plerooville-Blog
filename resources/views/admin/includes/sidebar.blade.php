<nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="false"
                            aria-controls="category">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Category</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{ route('all.category')}}" class="nav-link">All Category</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/read.html" class="nav-link">Read</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#post" role="button"
                            aria-expanded="false" aria-controls="post">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">Post</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="post">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{ route('all.post')}}" class="nav-link">All Post</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#user" role="button"
                            aria-expanded="false" aria-controls="user">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">User</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="user">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="{{ route('all.user')}}" class="nav-link">All User</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item nav-category">Components</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button"
                            aria-expanded="false" aria-controls="uiComponents">
                            <i class="link-icon" data-feather="feather"></i>
                            <span class="link-title">UI Kit</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="uiComponents">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                            aria-expanded="false" aria-controls="advancedUI">
                            <i class="link-icon" data-feather="anchor"></i>
                            <span class="link-title">Advanced UI</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="advancedUI">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item nav-category">Pages</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button"
                            aria-expanded="false" aria-controls="general-pages">
                            <i class="link-icon" data-feather="book"></i>
                            <span class="link-title">Special pages</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/general/faq.html" class="nav-link">Faq</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button"
                            aria-expanded="false" aria-controls="authPages">
                            <i class="link-icon" data-feather="unlock"></i>
                            <span class="link-title">Authentication</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="authPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/auth/login.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/auth/register.html" class="nav-link">Register</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button"
                            aria-expanded="false" aria-controls="errorPages">
                            <i class="link-icon" data-feather="cloud-off"></i>
                            <span class="link-title">Error</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="errorPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/error/404.html" class="nav-link">404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/error/500.html" class="nav-link">500</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Docs</li>
                    <li class="nav-item">
                        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                            <i class="link-icon" data-feather="hash"></i>
                            <span class="link-title">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <div class="theme-wrapper">
                    <h6 class="text-muted mb-2">Light Theme:</h6>
                    <a class="theme-item" href="../demo1/dashboard.html">
                        <img src="../assets/images/screenshots/light.jpg" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item active" href="../demo2/dashboard.html">
                        <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
                    </a>
                </div>
            </div>
        </nav>