<?php require 'layout/active.php' ?>;
<div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li class="<?= $page == 'index.php' ? 'active' : '' ?>"><a href="index.php"><i class="menu-icon icon-home"></i>Home</a>
        </li>
        <li class="<?= $page == 'message.php' ? 'active' : '' ?>"><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
        </li>
        <li class="<?= $page == 'student.php' ? 'active' : '' ?>"><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
        </li>
        <li class="<?= $page == 'book.php' ? 'active' : '' ?>"><a href="book.php"><i class="menu-icon icon-book"></i>All
                Books </a></li>
        <li class="<?= $page == 'addbook.php' ? 'active' : '' ?>"><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
        <li class="<?= $page == 'requests.php' ? 'active' : '' ?>"><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a>
        </li>
        <li class="<?= $page == 'recommendations.php' ? 'active' : '' ?>"><a href="recommendations.php"><i class="menu-icon icon-list"></i>Book Recommendations
            </a></li>
        <li class="<?= $page == 'current.php' ? 'active' : '' ?>"><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a>
        </li>
    </ul>
    <ul class="widget widget-menu unstyled">
        <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
    </ul>
</div>