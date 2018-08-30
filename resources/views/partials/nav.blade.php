@extends('layouts')
<head>
    <link href="css/sidebar.css" rel="stylesheet">
</head>

<body>
<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
    <div id="wrapper">
  

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              
                <li class="sidebar-brand">
                    <a href="/profile/">
                     Profile
                    </a>
                </li>
                <li>
                    <a href="/followers/followingme">People following me</a>
                </li>
                <li>
                    <a href="/followers/iamfollowing">People I am Following</a>
                </li>
                <li>
                    <a href="/followers/listusers">People I might like</a>
            </ul>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="js/nav.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

