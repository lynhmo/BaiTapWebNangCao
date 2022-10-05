<?php require_once 'header.php' ?>

<div class="container" style="width: 100%;">

    <div class="row">
        <div class="col-sm">
            <?php
            include 'connect.php';
            if (isset($_REQUEST['url']) and $_REQUEST['url'] != "") {
                $url = $_GET['url'];
                $sql = "SELECT * FROM posts WHERE url = '$url' ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<img src='/STUDYDOC/WebNangCao/news-bootrap/admin/photo/$row[image]' width='100%'/>";
                    echo "<h2>" . $row['title'] . "</h2>";
                    echo "" . $row['content'] . "";
                }
            }
            ?>
        </div>


    </div>

    <!-- /.Row-->
</div>

<!-- /.Container-->
<?
// require_once 'footer.php'
?>