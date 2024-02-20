<?php
$user_level = $_SESSION['user_level'];
?>

<div class="sidebar">
    <div class="logo-details">
        <img src="//IMAGE.ICO" alt="ICO" class="logo">
        <div class="logo_name"><!--A NAME OF YOUR COMPANY--></div>
        <i class='bx bx-menu' id="btn" onclick="toggerBlur"></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="links_name">Values</span>
            </a>
            <span class="tooltip">Values</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user'></i>
                <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-chat'></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-folder'></i>
                <span class="links_name">File Manager</span>
            </a>
            <span class="tooltip">Files</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
        <?php if ($user_level == 1): ?>
            <li>
                <a href="#">
                    <i class='bx bx-server'></i>
                    <span class="links_name">Admin</span>
                </a>
                <span class="tooltip">Admin</span>
            </li>
        <?php endif; ?>
        <li>
            <a href="#">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Logof</span>
            </a>
            <span class="tooltip">Logof</span>
        </li>
    </ul>
</div>