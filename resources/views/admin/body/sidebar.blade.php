<nav class="sidebar">
                    <div class="sidebar-header">
                        <a href="#" class="sidebar-brand">
                   Real<span>Estate</span>
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
                    <li class="nav-item nav-category">Real Estate</li>

                    @if(Auth::user()->can('type.menu'))
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Property Type</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="emails">
                        <ul class="nav sub-menu">
                            @if(Auth::user()->can('all.type'))
                            <li class="nav-item">
                            <a href="{{route('all.type')}}" class="nav-link">All Type</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('add.type'))
                            <li class="nav-item">
                            <a href="{{route('add.type')}}" class="nav-link">Add Type</a>
                            </li>
                            @endif
                        </ul>
                        </div>
                    </li>
                    @endif

                    @if(Auth::user()->can('state.menu'))
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#states" role="button" aria-expanded="false" aria-controls="states">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Property State</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="states">
                        <ul class="nav sub-menu">
                            @if(Auth::user()->can('all.state'))
                            <li class="nav-item">
                            <a href="{{route('all.state')}}" class="nav-link">All State</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('add.type'))
                            <li class="nav-item">
                            <a href="{{route('add.type')}}" class="nav-link">Add State</a>
                            </li>
                            @endif
                        </ul>
                        </div>
                    </li>
                    @endif

                    @if(Auth::user()->can('amenity.menu'))
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false" aria-controls="emails">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Amenity</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="amenities">
                        <ul class="nav sub-menu">
                            @if(Auth::user()->can('all.amenity'))
                            <li class="nav-item">
                            <a href="{{route('all.amenities')}}" class="nav-link">All Amenities</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('add.amenity'))
                            <li class="nav-item">
                            <a href="{{route('add.amenity')}}" class="nav-link">Add Amenity</a>
                            </li>
                            @endif
                        </ul>
                        </div>
                    </li>
                    @endif
  
                    <li class="nav-item">
                        <a href="pages/apps/calendar.html" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Components</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
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
                            <li class="nav-item">
                            <a href="pages/ui-components/tooltips.html" class="nav-link">Tooltips</a>
                            </li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Roles and Permissions</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Roles & Permissions</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="advancedUI">
                        <ul class="nav sub-menu">
                            
                            <li class="nav-item">
                            <a href="{{route('all.permissions')}}" class="nav-link">Permissions</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{route('all.roles')}}" class="nav-link">Roles</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{route('add.roles.permission')}}" class="nav-link">Role in Permission</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{route('all.roles.permission')}}" class="nav-link">All Roles in Permission</a>
                            </li>
                             
                        </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Manage Admin User</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="admin">
                        <ul class="nav sub-menu">
                            
                            <li class="nav-item">
                            <a href="{{route('all.admin')}}" class="nav-link">All Admins</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{route('add.admin')}}" class="nav-link">Add Admin</a>
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