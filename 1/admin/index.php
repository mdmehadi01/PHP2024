<?php
include('header.php');
include('sidebar.php');
if (isset($_REQUEST['page'])) {
    $PageName = $_REQUEST['page'] . ".php";

    include('templates/' . $PageName);
} else {
    include('templates/home.php');
}
include('footer.php');
