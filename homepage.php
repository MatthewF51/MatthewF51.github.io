<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/sidebar-style.css">
    <script src="Scripts/sidebar-scripts.js" defer></script>
    <script src="https://kit.fontawesome.com/63ca113504.js" crossorigin="anonymous"></script>
    <?php
    // $uname = $_GET['uname'];
    // session_start();
    // $_SESSION['name'] = $uname;
    //                                                      ?>
</head>

<body>
    <nav class="sidebar">
        <div class="logo">
            <img src="Images/ChronoConnect Black.png" alt="ChronoConnect Logo" style="height: 50px;">
            <span>ChronoConnect</span>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>

        <!-- Main Navigation -->
        <button data-page="Pages/dashboard.php"><i class="fa-solid fa-lg fa-house"></i>Dashboard</button>
        <button data-page="Pages/timebox.php"><i class="fa-solid fa-lg fa-brain"></i>TimeBox</button>
        <button data-page="Pages/messages.php"><i class="fa-regular fa-lg fa-message"></i>Messages</button>
        <button data-page="Pages/calendar.php"><i class="fa-regular fa-lg fa-calendar"></i>Calendar</button>
        <button data-page="Pages/projects.php"><i class="fa-solid fa-lg fa-bars-progress"></i>Projects</button>


        <div class="dropdown">
            <button class="dropbtn" onclick="toggleDropdown()"><i class="fa-regular fa-bookmark"></i> Favorites</button>
            <div id="dropdownContent" class="dropdown-content">
                <!-- Dynamically loaded favorite projects will go here -->
            </div>
        </div>
        <script src="Scripts/sidebar-scripts.js"></script>



        <!-- Separator -->
        <hr>

        <!-- Secondary Navigation -->
        <button data-page="Pages/company.php"><i class="fa-regular fa-lg fa-building"></i>My Company</button>
        <button data-page="Pages/teams.php"><i class="fa-solid fa-lg    fa-people-group"></i>Teams</button>
        <button data-page="Pages/user-profile.php"><i class="fa-regular fa-lg    fa-user"></i>Account Details</button>
        <button data-page="Pages/settings.php"> <i class="fa-solid fa-lg    fa-gear"></i>Settings</button>
        <button id="logoutButton"><i class="fa-solid fa-lg fa-right-from-bracket"></i>Log Out</button>
    </nav>

    <div class="content">
        <!-- Content goes here -->
        <iframe id="contentFrame" src="Pages/dashboard.php" style="width:100%; height:100%; border:none;"></iframe>
    </div>
</body>

</html>