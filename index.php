<?php
include ("aesclass.php");
$p = new xuly();
?>
<?php
    $mh='';
    $gm = '';
    switch($_POST['btn'])
    {
        case 'Encrypt':
        {
            $text = $_REQUEST['txt'];
            $key = $_REQUEST['key'];
            if ($text != '' && $key != ''){
                $mh = $p->showmahoa($text,$key);
            }
            break;
        }

        case 'Decrypt':
            {
                $text = $_REQUEST['txt'];
                $key = $_REQUEST['key'];
                if ($text != '' && $key != ''){
                    $gm = $p->showgiaima($text,$key);
                }
                break;
            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AES</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>

        .kq .inputtext {
            font-size: 1.4rem;
            width: 631px;
            border-radius: 2px;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class='container'>
        <div class='encrypt'>
            <form action="" method="post" enctype="multipart/form-data" name="form1" autocomplete="off">
                <h1 class="header">Mã hóa AES</h1>
                <input class="inputtext" name="txt" required="" placeholder='Thông điệp:'></input>
                <input class="inputtext" name="key" required="" placeholder='Khóa:' />
                <input type='submit' class="mahoa" name="btn" value="Encrypt" />
                <input type='submit' name="btn" class="giaima" value="Decrypt" />
                <div class="kq">
                    <input type="text" class="inputtext" placeholder="Output" value="<?php echo $mh; ?> <?php echo $gm; ?>">
                </form>
        </div>
    </div>

</body>

</html>