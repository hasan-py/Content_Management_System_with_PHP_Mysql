<?php include "./includes/header.php" ?>
<?php include "./includes/navigation.php" ?>
<?php ob_start(); ?>
<!-- this is for sideNav bar -->
<?php include "./includes/sidebarNav.php" ?>
<?php include "./function.php" ?>

<div id="layoutSidenav_content">
    <main>
            <div class="container-fluid">
                <h1 class='mt-4'>Users</h1>
                <ol class='breadcrumb mb-4'>
                    <li class='breadcrumb-item'><a href='/cms/admin/index.php'>Dashboard</a></li>
                    <li class='breadcrumb-item active'>All Users</li></ol></div>


            <!-- <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-0">This page is an example of using static navigation. By removing the <code>.sb-nav-fixed</code> class from the <code>body</code>, the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.</p>
                </div>
            </div> -->


<?php 

if (isset($_GET['source'])){
    $source = $_GET['source'];
}
else {
    $source = '';
}

switch ($source) {
    case 'add_user':
        include './includes/addUser.php';
        break;
    case 'edit_user':
        include './includes/editUser.php';
        break;
    default:
        include './includes/viewAllUser.php';
        break;
}



?>

    </main>
    <!-- Footer Part -->
    <?php include "./includes/footer.php" ?>