<div class="sidebar-header">
    <div>
        <img src="{{ asset('assets/admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
        <h4 class="logo-text"> Eagle Eye Security</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
    </div>
</div>
<!--navigation-->
<ul class="metismenu" id="menu">

    <li>
        <a href="{{ url('/admin/dashboard') }}" >
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    <li>
        <a href="{{ url('/admin/enquiry') }}" >
            <div class="parent-icon"><i class='bx bx-mail-send'></i>
            </div>
            <div class="menu-title">Online Enquiry</div>
        </a>
    </li>

    <li>
        <a href="{{ url('/admin/job-application') }}" >
            <div class="parent-icon"><i class='bx bx-notepad'></i>
            </div>
            <div class="menu-title">Jobs Application</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-images'></i>
            </div>
            <div class="menu-title">Gallery Photos</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/gallery/search') }}"><i class="bx bx-right-arrow-alt"></i>Gallery Search</a>
                <li> <a href="{{ url('/admin/gallery/create') }}"><i class="bx bx-right-arrow-alt"></i>Gallery Create</a>
            </li>
            </li>
        </ul>
    </li>



    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-network-chart'></i>
            </div>
            <div class="menu-title">Clients Logos</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/client/client-search') }}"><i class="bx bx-right-arrow-alt"></i>Client Search</a>
            </li>
            <li> <a href="{{ url('/admin/client/create-client') }}"><i class="bx bx-right-arrow-alt"></i>Create Client</a>
            </li>


        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-news'></i>
            </div>
            <div class="menu-title">News &amp; Notice</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/news/search') }}"><i class="bx bx-right-arrow-alt"></i>Search Users</a>
            </li>
            <li> <a href="{{ url('/admin/news/create-news') }}"><i class="bx bx-right-arrow-alt"></i>Create New User</a>
            </li>


        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cog'></i>
            </div>
            <div class="menu-title">Settings</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/setting/gallery-category') }}"><i class="bx bx-right-arrow-alt"></i>Gallery Category</a></li>
            <li> <a href="{{ url('/admin/setting/client-category') }}"><i class="bx bx-right-arrow-alt"></i>Client Category</a></li>

        </ul>
    </li>

    <li>
        <a href="#" onclick="document.getElementById('log-form').submit(); return false; ">
            <div class="parent-icon"><i class="bx bx-log-out"></i>
            </div>

            <div class="menu-title" >Logout</div>
        </a>
    </li>

<!-- Nav Real End -->




</ul>
<!--end navigation-->
