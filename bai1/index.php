<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
</head>

<body>
    <style>
        html {
            font-family: Arial, Helvetica, sans-serif
        }

        input {
            width: auto;
        }

        button {
            margin-top: 20px;
        }
    </style>
    <h2>Xử lý phương trình bậc nhất</h2>
    <?php
    $result = '';
    if (isset($_POST['calculate'])) {
        // Bước 1: Lấy thông tin
        $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
        $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';

        // Bước 2: Validate thông tin và tính toán
        if ($a == '') {
            $result = 'Bạn chua nhập số a';
        } else if ($b == '') {
            $result = 'Bạn chưa nhập số b';
        } else if ($a == 0) {
            $result = 'Số a phải nhập khác 0';
        } else {
            $result = - ($b) / $a;
        }
    }
    ?>
    <form action="" method="POST">
        <!-- number a -->
        <div id="calc">
            <div>
                <label for="a">Số A: </label>
                <br>
                <input type="text" id="a" name="a">
                <br>
            </div>
            <!-- number b -->
            <div>
                <label for="b">Số B: </label>
                <br>
                <input type="text" id="b" name="b">
                <br>
            </div>
            <!-- nut bam -->
            <input type="submit" name="calculate">
            <br>
            <span>Ket Qua: </span> <?php echo $result ?>
        </div>
    </form>
</body>

</html>