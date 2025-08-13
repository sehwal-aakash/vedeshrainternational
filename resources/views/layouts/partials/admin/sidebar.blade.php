

<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="" class="sidebar-logo">
            <img src="{{ asset('assets/img/logo/vedeshra_logo_180w_tr.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/img/logo/vedeshra_logo_180w_tr.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/img/logo/vedeshraicon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> AI</a>
                    </li>
                    <li>
                </ul>
            </li>
            <li class="sidebar-menu-group-title">Application</li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Contacts</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/contacts/listcontacts"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Contacts</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Contact</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/invoice/listinvoice"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Invoice</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Invoice</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Emails</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="{{ route('admin.sendcustommail.send') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Send Email</a>
                    </li>
                    <li>
                    <a href="{{ route('admin.sendcustommail.list') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>List Sent Emails</a>
                    </li>
                    <li>
                    <a href="{{ route('admin.emailtemplates.list') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Email Templates</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Forms</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="{{ route('admin.forms.contact.list') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Contact Forms</a>
                    </li>
                    <li>
                    <a href="{{ route('admin.forms.newsletter.list') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Newsletter Forms</a>
                    </li>
                    <li>
                    <a href="{{ route('admin.forms.getquote.list') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Quote Forms</a>
                    </li>
                    <li>
                    <a href="{{ route('admin.forms.popup.list') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Popup Forms</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="{{ route('admin.forms.contact.list') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Users</a>
                    </li>
                    <li>
                    <a href="{{ route('admin.forms.newsletter.list') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add User</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Pages</li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Main</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/pages/mainpages/listmainpages"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Main</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Main</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Industries</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/pages/industries/listindustries"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Industry</a>
                    </li>
                    <li>
                    <a href="/nimdav/pages/industries/addindustry"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Industry</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Services</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/pages/services/listservices"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Services</a>
                    </li>
                    <li>
                    <a href="/nimdav/pages/services/addservice"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Services</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Technologies</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/pages/technologies/listtechnologies"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Technologies</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Technologies</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Location</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="/nimdav/pages/locations/listlocations"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Location</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Location</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Blogs</li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Blog Posts</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Blog Posts</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Blog Post</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Blog Categories</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Blog Category</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Blog Category</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Locations</li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Regions</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Regions</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Regions</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Countries</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Countries</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Country</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>States</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List States</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add State</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Cities</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Cities</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add City</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Towns</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Towns</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Town</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Villages</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List Villages</a>
                    </li>
                    <li>
                    <a href=""><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Add Village</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>