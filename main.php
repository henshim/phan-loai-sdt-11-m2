<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action=""method="post">
    <input type="text" name="phone" placeholder="nhap so vao day"><br>
    <button type="submit">Check</button>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $phone=$_POST['phone'];
    $arr=explode(',',$phone);
    $head=substr($phone,0,3);

    foreach ($arr as $number){
        switch ($head){
            case '032';
            case '033';
            case '034';
            case '035';
            case '036';
            case '037';
            case '038';
            case '039';
            case '086';
            case '096';
            case '097';
            case '098';
                echo $phone.' la so nha mang viettel';
                break;
            case '081';
            case '082';
            case '083';
            case '084';
            case '085';
            case '088';
            case '091';
            case '094';
                echo $phone.' la so nha mang vina';
                break;
            case '070';
            case '076';
            case '077';
            case '078';
            case '079';
            case '089';
            case '090';
            case '093';
                echo $phone.' la so nha mang mobi';
                //array_push($mobiPhone, $number);
                break;
        }
    }
}

