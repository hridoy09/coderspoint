<div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Website Information</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.sitesetting.manage') }}">Site Information Settings</a></li>
                            <li><a href="{{ route('admin.siteseo.settings') }}">Site SEO Settings</a></li>
                            <li><a href="{{ route('admin.client.add') }}">Client Add</a></li>
                            <li><a href="{{ route('admin.client.list') }}">List Client</a></li>
                            <li><a href="{{ route('admin.blog.add') }}">Add Blog</a></li>
                            <li><a href="{{ route('admin.blog.list') }}">Blog list</a></li>
                            <li><a href="{{ route('admin.portfoliocategory.index') }}">Add Portfolio Category</a></li>
                            <li><a href="{{ route('admin.portfolio.add') }}">Add Portfolio</a></li>
                            <li><a href="{{ route('admin.video.index') }}">Add video</a></li>
                        </ul>
                    </li>
                     <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Website banner</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.banner.list') }}">All Banners</a></li>
                            <li><a href="{{ route('admin.banner.add') }}">Add Banner</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Admin Settings</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Manage Profile</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.password.reset') }}">Change Password</a></li>
                            <li><a href="{{ route('admin.profile') }}">Edit Profile</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Management</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Customer Message</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.customer.contact.list') }}">All Messages</a></li>

                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Category</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.category.show') }}">All Category</a></li>
                            <li><a href="{{ route('admin.category.insert') }}">Add Category</a></li>

                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Sub-Category</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.category.subcategory.show') }}">All Sub-Category</a></li>
                            <li><a href="{{ route('admin.category.subcategory.insert') }}">Add Sub-Category</a></li>

                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Sub Sub-Category</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.category.subsubcategory.show') }}">All Sub Sub-Category</a></li>
                            <li><a href="{{ route('admin.category.subcategory.subsubcategory.insert') }}">Add Sub Sub-Category</a></li>
                        </ul>
                    </li>


                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Products</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.product.show') }}" aria-expanded="false">All Product</a></li>
                            <li><a href="{{ route('admin.product.insert') }}" aria-expanded="false">Add Product</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Customer Project Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.customer.inquery.show') }}" aria-expanded="false">All Inquery</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
