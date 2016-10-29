<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            .round_border{
                -moz-border-radius: 5px;
                border-radius: 5px;
                border-width: 1px;
                border-color: #afdded;
                border-style: solid;
            }

            dl{
                padding-left: 33px;
            }

            dl li{
                margin: 0 20px;
            }

        </style>
        <title></title>
    </head>
    <?php
//    echo $_POST['result'];
    $indicator_result = array('極度<br/>危險', '高度<br/>風險', '中度<br/>風險', '低<br/>風險');
    $result = json_decode($_POST['result'], true);

//    echo $result['indicator'];

    function getColor($index) {
        switch ($index) {
            case 0:
            case 1:
                return 'text-error';
                break;
            case 2:
                return 'text-warning';
                break;
            case 3:
                return 'text-success';
                break;
            default:
                break;
        }
    }
    ?>

    <body>
        <div class="wrap round_border" >            
            <!-- Begin page content -->
            <div class="container-narrow">
                <p class="title">市場風險指數</p>
                <ul class=" inline text-center">
                    <?php
                    foreach ($indicator_result as $r => $item) {
                        ?>
                        <li>
                            <span >
                                <?php
                                if ($result['indicator'] == $r) {
                                    switch ($r) {
                                        case 0:
                                            $url = 'indicator-red.png';
                                            break;
                                        case 1:
                                            $url = 'indicator-yellow.png';
                                            break;
                                        case 2:
                                            $url = 'indicator-blue.png';
                                            break;
                                        case 3:
                                            $url = 'indicator-green.png';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                    <img class="img-circle" src="img/<?php echo $url; ?>" width="87" height="87" alt="color"/><br/>
                                    <?php
                                } else {
                                    ?>
                                    <img class="img-circle" src="img/indicator-white.png" width="87" height="87" alt="color"/><br/>
                                <?php }echo $item;
                                ?>
                            </span>
                        </li>
                    <?php } ?>
                </ul>
                <div >


                    <?php if (isset($result['strength']) && count($result['strength']) > 0) { ?>
                        <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
                        <p class="title">強項</p>
                        <ol style="padding-left: 33px;">
                            <?php foreach ($result['strength'] as $item) { ?>
                                <li><?php echo $item ?></li>
                            <?php } ?>
                        </ol>
                        <?php
                    }
                    if (isset($result['risk']) && count($result['risk']) > 0) {
                        ?>
                        <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
                        <p class="title">風險</p>
                        <dl>
                            <?php
                            foreach ($result['risk'] as $item) {
                                echo $item;
                            }
                            ?>                            
                        </dl>
                    <?php } ?>
                </div>
            </div>
    </body>
</html>
