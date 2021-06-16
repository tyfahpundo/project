<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label">Main</li>
        <?PHP if(isset($_SESSION['id']))
				{ ?>
        <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>

        </li>
        <li><a href="#"><i class="fa fa-house"></i> Accommodation</a>
            <ul>
                <li><a href="pgi/index.php">On Campus</a></li>
                <li><a href="offrez.php">Off Campus</a></li>
                <li><a href="offrez.php">Room Details</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-user-shield"></i> Administration</a>
            <ul>
                <li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
                <li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
                <li><a href="CVs.php"><i class="fa fa-file-o"></i>Upload CV</a></li>
                <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li>
            </ul>
        </li>



        <?php } else { ?>

        <li><a href="#"><i class="fas fa-user-circle"></i> Account Services</a>
            <ul>
                <li><a href="register.php"><i class="fa fa-files-o"></i> User Registration</a></li>
                <li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
                <li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
            </ul>
        </li>



        <?php } ?>

    </ul>
</nav>