<div id="sidebar">
    <!-- Sidebar Brand -->
    <div id="sidebar-brand" class="themed-background">
        <a href="index.html" class="sidebar-title">
            <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">App<strong>UI</strong></span>
        </a>
    </div>
    <!-- END Sidebar Brand -->

    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="index.html"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
              
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-database sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Master</span></a>
                    <ul>
                        <li>
                            <a href="{{ url('categories') }}">Category</a>
                        </li>
                        <li>
                            <a href="">Gallery</a>
                        </li>
                    </ul>
                </li>
        
            </ul>
            <!-- END Sidebar Navigation -->

        
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->

    <!-- Sidebar Extra Info -->
    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
        <div class="text-center">
            <small>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="" target="_blank">Eshop</a></small><br>
            <small>{{ date('Y') }} &copy; <a href="" target="_blank">Eshop</a></small>
        </div>
    </div>
    <!-- END Sidebar Extra Info -->
</div>