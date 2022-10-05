<head>
    <title>Sửa dữ liệu trong Database</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../../bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <?php
    // Kết nối Database
    require_once 'posts_connect.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from `posts` where id='$id'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <form method="POST" class="form m-4">
        <h2>Sửa thành viên</h2>
        <label>Tiêu đề:<br />
            <input type="text" value="<?php echo $row['title']; ?>" name="title" id="title" /></label><br />
        <label>URL:<br />
            <input type="text" value="<?php echo $row['url']; ?>" name="url" id="url" /></label><br />
        <label>Nội dung:<br />
            <textarea value="" name="content" id="content" rows="10" cols="80" /><?php echo $row['content']; ?></textarea></label><br />
        <label>Hình ảnh: <br />
            <input type="text" value="<?php echo $row['image']; ?>" name="image" /></label><br />
        <input type="submit" value="Update" name="update_posts">
        <?php require_once 'posts_update.php'; ?>
    </form>
</body>

</html>