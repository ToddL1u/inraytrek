<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>
    </head>
    <?php
    session_start();
    require_once('database.php');

    if ($_POST['A'] == 1) {
        switch ($_POST['B']) {
            case 1:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(1, 1, 1, 1, 1);
                        else
                            $senerio = array(1, 1, 1, 1, 2);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(1, 1, 1, 1, 3);
                        else
                            $senerio = array(1, 1, 1, 1, 4);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(1, 1, 1, 1, 5);
                        else
                            $senerio = array(1, 1, 1, 1, 6);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(1, 1, 1, 1, 7);
                        else
                            $senerio = array(1, 1, 1, 1, 8);
                        break;
                }
                break;
            case 2:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(2, 1, 1, 1, 1);
                        else
                            $senerio = array(2, 1, 1, 1, 2);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(2, 1, 1, 1, 3);
                        else
                            $senerio = array(2, 1, 1, 1, 4);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(2, 1, 1, 1, 5);
                        else
                            $senerio = array(2, 1, 1, 1, 6);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(2, 1, 1, 1, 7);
                        else
                            $senerio = array(3, 1, 1, 1, 8);
                        break;
                }

                break;
            case 3:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 1);
                        else
                            $senerio = array(3, 1, 1, 1, 2);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 3);
                        else
                            $senerio = array(3, 1, 1, 1, 4);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 5);
                        else
                            $senerio = array(3, 1, 1, 1, 6);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 7);
                        else
                            $senerio = array(3, 1, 1, 1, 8);
                        break;
                }

                break;
            case 4:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 1);
                        else
                            $senerio = array(3, 1, 1, 1, 2);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 3);
                        else
                            $senerio = array(3, 1, 1, 1, 4);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 5);
                        else
                            $senerio = array(3, 1, 1, 1, 6);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(3, 1, 1, 1, 7);
                        else
                            $senerio = array(3, 1, 1, 1, 8);
                        break;
                }

                break;
        }
    }else {
        switch ($_POST['B']) {
            case 1:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(4, 2, 2, 2, 9);
                        else
                            $senerio = array(4, 2, 2, 2, 10);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(4, 2, 2, 2, 11);
                        else
                            $senerio = array(4, 2, 2, 2, 12);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(4, 2, 2, 2, 13);
                        else
                            $senerio = array(4, 2, 2, 2, 14);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(4, 2, 2, 2, 15);
                        else
                            $senerio = array(4, 2, 2, 2, 16);
                        break;
                }
                break;
            case 2:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(5, 2, 2, 2, 9);
                        else
                            $senerio = array(5, 2, 2, 2, 10);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(5, 2, 2, 2, 11);
                        else
                            $senerio = array(5, 2, 2, 2, 12);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(5, 2, 2, 2, 13);
                        else
                            $senerio = array(5, 2, 2, 2, 14);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(5, 2, 2, 2, 15);
                        else
                            $senerio = array(5, 2, 2, 2, 16);
                        break;
                }

                break;
            case 3:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 9);
                        else
                            $senerio = array(6, 2, 2, 2, 10);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 11);
                        else
                            $senerio = array(6, 2, 2, 2, 12);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 13);
                        else
                            $senerio = array(6, 2, 2, 2, 14);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 15);
                        else
                            $senerio = array(6, 2, 2, 2, 16);
                        break;
                }

                break;
            case 4:
                switch ($_POST['C']) {
                    case 1:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 9);
                        else
                            $senerio = array(6, 2, 2, 2, 10);
                        break;
                    case 2:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 11);
                        else
                            $senerio = array(6, 2, 2, 2, 12);
                        break;
                    case 3:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 13);
                        else
                            $senerio = array(6, 2, 2, 2, 14);
                        break;
                    case 4:
                        if ($_POST['D'] == 1)
                            $senerio = array(6, 2, 2, 2, 15);
                        else
                            $senerio = array(6, 2, 2, 2, 16);
                        break;
                }
                break;
        }
    }

    if (!mysqli_connect_errno($db)) {
        $result = new stdClass();
        $result->condition = array($_POST['A'],$_POST['B'],$_POST['C'],$_POST['D']);
        $result->senerio = $senerio;
        for ($i = 1; $i <= 5; $i++) {
            $result->{'step' . $i} = new stdClass();
        }
        $condition = json_encode($result);
        $db->query("INSERT INTO outcome (survey) VALUES ('$condition')");
        $_SESSION['uid'] = mysqli_insert_id($db);
        $_SESSION['step'] = 1;
        $_SESSION['senerio'] = $senerio;
        header("Location:question.php");
        exit(0);
    }
    ?>
    <body>
    </body>
</html>