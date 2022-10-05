<!-- <div class="row">
    <div class="col col-sm-9">
        <div class="main-content">
        <?php
        // include_once('connect.php');
        // //include_once('articles_seo_friendly.php');
        // include_once('seo_friendly.php');
        // $query = mysqli_query($conn, "SELECT * FROM posts");

        // if (mysqli_num_rows($query) == 0) {
        //     echo "No articles found";
        // } else {
        //     while ($row = mysqli_fetch_assoc($query)) {

        //         echo "<div class='item-post'>";
        //         echo "<img src='./admin/photo/$row[image]' width='30%' height='auto'/> <br>";
        //         echo "<a href={$row['url']}.html>{$row['title']}</a><br>";
        //         $readmore = '<a href="' . $row['url'] . '">
        //     Đọc thêm...</a>';
        //         echo "

        //     " . substr($row['content'], 0, 160) . $readmore . "

        //     ";
        //         echo "</div>

        //     ";
        //     }
        // }

        ?> -->
<!-- BÀI THỰC HÀNH 5_10 -->
<?php
include "config.php";
?>

<head>
    <title>Load more data using jQuery,AJAX, and PHP</title>
    <link href="./main.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <script src="./script.js"></script> -->
</head>

<div class="container">

    <?php
    $rowperpage = 2;

    // counting total number of posts
    $allcount_query = "SELECT count(*) as allcount FROM posts";
    $allcount_result = mysqli_query($con, $allcount_query);
    $allcount_fetch = mysqli_fetch_array($allcount_result);
    $allcount = $allcount_fetch['allcount'];

    // select first 5 posts
    $query = "select * from posts order by id asc limit 0,$rowperpage ";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {

        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $shortcontent = substr($content, 0, 160) . "...";
        $link = $row['url'];
        $img = $row['image'];
    ?>

        <div class="post" id="post_<?php echo $id; ?>">
            <!-- <h2><?php echo $title; ?></h2>
                    <p>
                        <?php echo $shortcontent; ?>
                    </p> -->
            <?php
            echo "<div class='item-post'>";
            echo "<img src='./admin/photo/$row[image]' width='30%' height='auto'/> <br>";
            echo "<a href={$row['url']}.html>{$row['title']}</a><br>";
            $readmore = '<a href="' . $row['url'] . '">
                    Đọc thêm...</a>';
            echo "" . substr($row['content'], 0, 150) . $readmore . "";
            echo "</div>";
            ?>
            <!-- <a href="'.$link.'" target="_blank" class="more">More</a> -->
        </div>

    <?php
    }
    ?>

    <h2 class="load-more">Load More</h2>
    <input type="hidden" id="row" value="0">
    <input type="hidden" id="all" value="<?php echo $allcount; ?>">

</div>
</div>
</div><!-- Close Col -->

<div class="col col-sm-3">
    <?php include 'sidebar.php'; ?>
</div>

</div>