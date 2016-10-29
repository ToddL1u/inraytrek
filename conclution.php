<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        if (!isset($_SESSION['uid']))
            header("Location:index.html");

        require_once('formula.php');
        $orien = array('極高', '偏高', '中等', '低');
        $orien_content = array('請當心，新產品恐怕無法通過市場嚴苛的考驗！<br/>請參考下方的診斷說明，立即找出具體的解決方向！',
            '請小心，新產品存在數個致命危機!<br/>請參考下方的診斷說明，立即找出具體解決方向！',
            '提醒您注意，新產品存在些許的關鍵性盲點。<br/>請參考下方的診斷說明，立即找出具體解決方向！',
            '恭喜您，新產品應可順利跨越市場鴻溝。<br/>請參考下方的診斷說明，讓新產品一舉晉級大賣的行列！');

        $indicator_result = array('極度<br/>危險', '高度<br/>風險', '中度<br/>風險', '低<br/>風險');
        $indicator_region = array(2.5, 3.5, 4.5, 5);
        $query = "SELECT survey FROM outcome WHERE uid='" . $_SESSION['uid'] . "'";
//        $query = "SELECT survey FROM outcome WHERE uid='" . $_SESSION['uid'] . "'";
        $result = $db->query($query)->fetch_object();

        $survey = json_decode($result->survey);

        $score = 0;
        for ($i = 1; $i <= 5; $i++) {
            $current_score = $survey->{'step' . $i}->score;
            $score+=$current_score;
        }
        $score = $score / 5;
        $indicator_region[] = $score;
        sort($indicator_region);
        $indicator_index = array_search($score, $indicator_region);
        if ($indicator_index == 4)
            $indicator_index = 3;

        $survey->indicator = $indicator_index;
        $query = "UPDATE outcome SET survey='" . json_encode($survey) . "' WHERE uid='" . $_SESSION['uid'] . "'";
        $db->query($query);

        function getColor($index) {
            switch ($index) {
                case 0:
                    return '#CC2D3F';
                case 1:
                    return '#eca554';
                case 2:
                    return '#40a3c4';
                case 3:
                    return '#5aa001';
                default:
                    break;
            }
        }
    

        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="css/inray_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">

            #thanks{
                text-align: center;
            }
            .jumbotron{
                padding-top: 60px;
            }

            .partition{
                padding: 20px 0;
                width: 49%;
            }
            
            dt{
                font-size: 16px;
                margin-left: 73px;
            }

            dd{
                margin-left: 80px;
                font-size: 13px;
            }

            .step{
                font-size: 18px;
                font-weight: bold;
                margin-top:30px;
                margin-left:50px;
                text-decoration:underline;
            }

        </style>
        <title>InrayTrek</title>
    </head>
    <body>
        <div class="container-narrow">

            <div class=" partition pull-left">
                <h2 style="color:<?php echo getColor($indicator_index); ?>">新產品市場風險指數: <?php echo $orien[$indicator_index] ?></h2>
                <p > <?php echo $orien_content[$indicator_index] ?></p>
            </div>
            <img src="img/line-vertical.png" width="1" height="150" alt="line-vertical"/>

            <div class=" partition pull-right">
                <ul class=" inline text-center">
                    <?php
                    foreach ($indicator_result as $r => $item) {
                        ?>
                        <li>
                            <span >
                                <?php
                                if ($indicator_index == $r) {
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
            </div>
            <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
            <div id="result" class="jumbotron">
                <p class=" title">檢驗評估結果</p>
                <dl>
                    <?php
                    $risks='';
                    $step=array('第一關：市場區隔', '第二關：目標市場', '第三關：客戶需求', '第四關：定位和利潤模式', '第五關：動態競爭');
                    for ($i = 0; $i < 5; $i++) {
                        $risks = $risks ."<div class=\" step\" >".$step[$i].'</div>' ;
                        foreach ($survey->{'step' . ($i+1)}->risk as $item) {
                            $current_step = $localdb["step" . ($i + 1)];
                            $current_table = $current_step['table' . $survey->senerio[$i]];
                            $risk= explode('-', $item);                            
                            $risks = $risks . $current_table['risk'][$risk[0]][$risk[1]];
                        }
                    }
                    echo $risks;
                    ?>
                </dl>
                <br>
                <h4 class="text-center" >請協助填寫以下資訊，我們會將「<span class="text-info">新產品的風險評估報告</span>」和「<span class="text-info">具體的解決方向</span>」寄給您，謝謝！</h4>
                <br/>
                <form id="user_data" class="bs-docs-example form-horizontal">

                    <div class="control-group">
                        <label class="control-label" for="name">姓名</label>
                        <div class="controls">
                            <input name="name" class="input-xxlarge" type="text" id="name">
                        </div>                            
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="company">公司名稱</label>
                        <div class="controls">
                            <input name="company" class="input-xxlarge" type="text" id="company">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input name="email" class="input-xxlarge"  type="text" id="email">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >職務類別</label>
                        <div class="controls">
                            <select id="career" name="career">
                                <option value="業務(Sales)">業務(Sales)</option>
                                <option value="行銷(Marketing)">行銷(Marketing)</option>
                                <option value="產品(Product)">產品(Product)</option>
                                <option value="研發(R&D)">研發(R&D)</option>
                                <option value="企業營運(Business operation)">企業營運(Business operation)</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div id="thanks" class="jumbotron">
                <h2 class=" text-info">謝謝，資料已成功送出！</h2>
                <h4>理解更多標竿企業的獲利秘密, 輕參考我們的<a href="http://inraytek.com/case.php" target="_blank">「經典個案例」</a></h4>
            </div>  

            <div style="text-align: center">
                <button id="data_submit" class="btn btn-large btn-custom" data-loading-text="loading..." >送出</button>
            </div>
        </div>
        <script src="js/jquery-1.10.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" >
            $('#thanks').hide();
            $('#data_submit').click(function() {
                if ($('#name').val().length != 0 && $('#company').val().length != 0 && $('#email').val().length != 0) {
                    $('#data_submit').button('loading');
                    $.ajax({
                        type: "POST",
                        url: "sendFeedback.php",
                        data: $('#user_data').serialize(),
                        success: function(data)
                        {
                            onSubmit();
                        }
                    });
                } else
                    alert('you haven\'t finished your profile!!');

                return false;
            });

            function onSubmit() {
                $('#thanks').show();
                $('#result').hide();
                $('#data_submit').hide();
            }
        </script>
    </body>
</html>
