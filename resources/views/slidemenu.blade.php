<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Easy Mart</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
<script>$(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

});</script>
<!--
<script>$(document).ready(function () {

    $("#sidebar").mCustomScrollbar({
         theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        // open or close navbar
        $('#sidebar').toggleClass('active');
        // close dropdowns
        $('.collapse.in').toggleClass('in');
        // and also adjust aria-expanded attributes we use for the open/closed arrows
        // in our CSS
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

});</script>-->

<style>
    .wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
    background-color: lightcoral;
    position: sticky;
}

#sidebar.active {
    margin-left: -250px;
}




.togglebutton
{
    background: #7386D5;
    border-color: whitesmoke;
    
}
.togglebutton:hover
{
    color: #7386D5;
    background: #fff;
    border-color:#7386D5;

    
}


  /*
    ADDITIONAL DEMO STYLE, NOT IMPORTANT TO MAKE THINGS WORK BUT TO MAKE IT A BIT NICER :)
*/



body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
}
</style>


<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-paw"></i> Easy Mart</h3>
        </div>

        <ul class="list-unstyled components">
            <p></p>

           <!-- <img src="F:\mypics\DSCN2506.JPG" alt="my">-->
            <li class="menu_section active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-home"></i> Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                   
                </ul>
            </li>

            <li>
                <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-box"></i> Category</a>
                <ul class="collapse list-unstyled" id="categorySubmenu">
                    <li>
                        <a href="\addcategory">Add Category</a>
                    </li>
                    <li>
                        <a href="\item">View Category</a>
                    </li>
                   
                </ul>
            </li>

            <li>
                <a href="#subcategorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-boxes"></i> Sub Category</a>
                <ul class="collapse list-unstyled" id="subcategorySubmenu">
                    <li>
                        <a href="/addsubcategory">Add Sub Category</a>
                    </li>
                    <li>
                        <a href="/subcategories">View Sub Category</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-industry"></i> Product</a>
                <ul class="collapse list-unstyled" id="productSubmenu">
                    <li>
                        <a href="#">Add Product</a>
                    </li>
                    <li>
                        <a href="#">View Product</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#sellerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-chalkboard-teacher"></i> Seller</a>
                <ul class="collapse list-unstyled" id="sellerSubmenu">
                    <li>
                        <a href="\addseller">Add Seller</a>
                    </li>
                    <li>
                        <a href="\seller">View Seller</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-user"></i> Customer</a>
                <ul class="collapse list-unstyled" id="customerSubmenu">
                    <li>
                        <a href="/addcustomer">Add Customer</a>
                    </li>
                    <li>
                        <a href="/customer">View Customer</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#shopSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-building"></i> Shop</a>
                <ul class="collapse list-unstyled" id="shopSubmenu">
                    <li>
                        <a href="#">Add Shop</a>
                    </li>
                    <li>
                        <a href="#">View Shop</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#couponSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-tags"></i> Coupon</a>
                <ul class="collapse list-unstyled" id="couponSubmenu">
                    <li>
                        <a href="#">Add Coupon</a>
                    </li>
                    <li>
                        <a href="#">View Coupon</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#pointsystemSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-money-bill"></i> Point System</a>
                <ul class="collapse list-unstyled" id="pointsystemSubmenu">
                    <li>
                        <a href="#">Add Point</a>
                    </li>
                    <li>
                        <a href="#">View Point</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#notificationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-envelope"></i> Notification</a>
                <ul class="collapse list-unstyled" id="notificationSubmenu">
                    <li>
                        <a href="#">Add Notification</a>
                    </li>
                    <li>
                        <a href="#">View Notification</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#searchingareaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-chart-bar"></i> Searching Area</a>
                <ul class="collapse list-unstyled" id="searchingareaSubmenu">
                    <li>
                        <a href="#">Search List</a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="#additionalpagesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-bug"></i> Additional Pages</a>
                <ul class="collapse list-unstyled" id="additionalpagesSubmenu">
                    <li>
                        <a href="#">E-commerce</a>
                    </li>
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li>
                        <a href="#">Project Detail</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                    <li>
                        <a href="#">Profile</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="#extrasSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-th-large"></i> Extras</a>
                <ul class="collapse list-unstyled" id="extrasSubmenu">
                    <li>
                        <a href="#"> </a>
                    </li>

                    <li>
                        <a href="#"> </a>
                    </li>

                    <li>
                        <a href="#"> </a>
                    </li>

                    <li>
                        <a href="#"> </a>
                    </li>
                </ul>
            </li>
            
        </ul>

    </nav>
    <!-- Page Content -->
    <div id="content">

        <nav class="navbar">
            <div class="container navbar">

                <button type="button" id="sidebarCollapse" class="btn btn-info togglebutton">
                    <i class="fas fa-align-left"></i>
                </button>

                
            </div>
        </nav>


    </div>
</div>

</body>

</html>