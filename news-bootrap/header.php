<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        VNEXPRESS
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="./includes/style.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    -->
    <link rel="stylesheet" href="../bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>

    <!-- offline code here-->
    <!-- <link rel="stylesheet" href="../../bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.2.1-dist/js/bootstrap.min.js"></script> -->


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="header">
            <!-- <nav class="navbar navbar-inverse navbar-expand-sm">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">VN-Express</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./index.php">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </nav> -->
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/VnExpress_logo.png" alt="vnexpress" height="33">
                    </a>
                    <!-- <a class="navbar-brand" href="#">VNEXPRESS</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./admin/posts_add.php">ADD</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search" method="post">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- Close Header -->