<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        ADD
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="width:100%">
    <div class="container-fluid p-0">
        <div class="header">
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../assets/VnExpress_logo.png" alt="vnexpress" height="33">
                    </a>
                    <!-- <a class="navbar-brand" href="#">VNEXPRESS</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  active" href="../admin/posts_add.php">ADD</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search" method="post">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- ADD form -->
        <h2 class="ms-5 mt-2">Them noi dung vao database</h2>
        <form action="posts_add.php" enctype="multipart/form-data" method="post" class="form m-3">
            <table cellspacing="5" cellpadding="5" class="table border border-dark table-bordered w-600">
                <tr>
                    <td class="w-25">Tiêu đề </td>
                    <td width="w-auto"><input type="text" name="title" class="w-75" /></td>
                </tr>
                <tr>
                    <td>URL </td>
                    <td><input type="text" name="url" class="w-75" disabled></td>
                </tr>
                <tr>
                    <td>Nội dung</td>
                    <td><textarea name="content" id="content" placeholder="Đây là nội dung..." class="noidung w-75" rows="10" cols="80"></textarea></td>
                </tr>
                <tr>
                    <td>Ảnh (only png or jpeg)</td>
                    <td>
                        <input type="hidden" name="size" value="1000000">
                        <input type="file" name="image" class="hinhanh"><br /><br />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Save Data" class="btn btn-secondary" /></td>
                </tr>
            </table>
        </form>
        <h2 class="ms-5">Nội dung trong Database</h2>
        <br>
        <?php require 'posts_xuly.php'; ?>
        <br>
        <div class="mt-4 p-4 bg-secondary text-black rounded w-50 bg-opacity-25 ms-5">
            <h6 class="mb-0">Copyright VNEXPRESS@ 2022</h6>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
        </div>
    </div>
    <!--/. Container-->
</body>

</html>