<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index"><img src="<?= base_url; ?>/dist/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="<?= base_url; ?>/" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?php if($data['title'] == 'Dashboard') echo 'active'; ?>">
                    <a href="<?= base_url; ?>/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item <?php if(stripos($data['title'],'Category') !== FALSE) echo 'active'; ?>">
                    <a href="<?= base_url; ?>/category" class='sidebar-link'>
                        <i class="bi bi-list-ul"></i>
                        <span>Category</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Extra Components</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="extra-component-avatar.html">Avatar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-sweetalert.html">Sweet Alert</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-toastify.html">Toastify</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-rating.html">Rating</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-divider.html">Divider</a>
                        </li>
                    </ul>
                </li>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="form-element-input.html">Input</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Layout</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="<?= base_url; ?>/auth/logout" class='sidebar-link text-white' style="background-color: #e46774;">
                        <i class="bi bi-arrow-right-square-fill text-white" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>