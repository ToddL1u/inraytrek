<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>InrayTek</title>        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="css/inray_style.css" rel="stylesheet" type="text/css" />
        <?php
        session_start();
        require_once("data.php");
        $tag = array('市場區隔', '目標市場', '客戶需求', '定位和利潤模式', '動態競爭');
        $numeric = array('Ⅰ', 'Ⅱ', 'Ⅲ', 'Ⅳ', 'Ⅴ');
        $index = $_SESSION['step'];
        $index = 5;

        $current_step = $localdb["step" . $index];
        if (isset($_SESSION['senerio']))
            $current_table = $current_step['table' . $_SESSION['senerio'][$index - 1]];
        else
            header("Location:index.html");
        $type = $current_step['type'];
        $g_id = 1;
        $q_id = 1;
        $q_count = 0;
        $section_count = 0;
        $current_section = 1;
        ?>
        <style type="text/css">
            .wrap{
                padding: 10px;
                margin-top: 50px;
            }

            button{
                margin: 15px;
            }

            .info{
                font-size: 17px;
                font-weight: bold;
            }

            table li{
                padding-left: 20px;
                font-size: 10px;
            }

            tbody{
                font-size: 15px;
            }

            #sub_nav{
                padding-left: 24px;
            }

        </style>
    </head>

    <body>
        <div class="container-fluid" style=" padding-top: 10px; padding-right: 10px;">
            <ul class="inline pull-right" >
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <li><img src="img/step<?php
                        echo $i + 1;
                        if ($index > $i)
                            echo '-a';
                        ?>.png" width="60" height="60"/></li>
                        <?php
                    }
                    ?>                
            </ul>
        </div>
        <div class=" container-narrow" >

            <form id="survey-form" name="survey-form" method="post">
                <p class="title"><?php echo $numeric[$index - 1] . '.' . $current_step['title']; ?></p>
                <p id="sub_nav" ><?php echo $current_step['des']; ?>                                             
                </p>           

                <div >
                    <div id="result"></div>
                    <div class=" text-center">
                        <button href="#" id="next_step" class="btn btn-custom btn-large" onclick="onNextStep()" >下一步</button>
                        <button href="#" id="final_result" class="btn btn-custom btn-large " >檢驗評估結果</button>
                    </div>
                </div>
                <?php
                foreach ($current_table['question'] as $item) {
                    $section_count++;
                    ?>
                    <div class="wrap" id="table<?php echo $section_count ?>">
                        <table class="table table-hover"  >
                            <thead>
                                <tr>
                                    <td valign="bottom" rowspan="2" ><h4 class=" text-center">問題</h4></td>
                                    <td colspan="<?php echo count($question_type[$type]) ?>"><h4 class="text-center">掌握程度</h4></td>
                                </tr>
                                <tr>
                                    <?php
                                    foreach ($question_type[$type] as $sort) {
                                        echo "<td>" . $sort . "</td>";
                                    }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>        
                                <?php
                                if (!empty($item['q']))
                                    echo "<tr class=\" info\" ><td colspan=\"" . (count($question_type[$type]) + 1) . "\">" . $item['q'] . "</td></tr>";
                                foreach ($item['section'] as $g) {    //group    
                                    foreach ($g as $title) {
                                        $q_count++;
                                        ?>
                                        <tr >
                                            <td><?php echo $q_count . '.' . $title; ?></td>
                                            <?php
                                            switch ($type) {
                                                case 0:
                                                    for ($i = 5; $i >= 1; $i--) {
                                                        echo "<td><label class=\"radio \"><input name=\"" . $g_id . "-" . $q_id . "\" type=\"radio\" value=\"" . $i . "\" /></label></td>";
                                                    }
                                                    break;
                                                case 1:
                                                    for ($i = 1; $i >= 0; $i--) {
                                                        echo "<td><label class=\"radio\"><input name=\"" . $g_id . "-" . $q_id . "\" type=\"radio\" value=\"" . $i . "\" /></label></td>";
                                                    }
                                                    break;
                                                case 2;
                                                    for ($i = 1; $i >= 0; $i--) {
                                                        echo "<td><label class=\"radio\"><input name=\"" . $g_id . "-" . $q_id . "\" type=\"radio\" value=\"" . $i . "\" /></label></td>";
                                                    }
                                                    break;
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                        $q_id++;
                                    }
                                    $g_id++;
                                    $q_id = 1;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
<?php } ?>
                <input name="section" id="section" type="hidden" value="<?php echo $section_count; ?>"></input>
                <input name="type" type="hidden" value="<?php echo $type ?>"></input>  
                <div class="text-center">
                    <button href="#" id="show_result" class="btn btn-custom btn-large " data-loading-text="loading...">觀看結果</button>                    
                    <button href="#" id="next_page" class="btn btn-custom btn-large " >下一頁</button>                        

                </div>
            </form>

        </div>        
        <script src="js/jquery-1.10.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" >
                            $('#next_step').hide();
                            $('#final_result').hide();

                            window.onload = function() {
                                var section = parseInt(document.getElementById('section').value);
                                if (section > 1)
                                    $('#show_result').hide();
                                else
                                    $('#next_page').hide();

                                for (i = 2; i <= section; i++) {
                                    $('#table' + i).hide();
                                }
                            };

                            var current_section = 1;
                            var total_section = parseInt(document.getElementById('section').value);

                            $("#next_page").click(function() {
                                if ($('#table' + current_section + ' input:radio:checked').length === ($('#table' + current_section + ' input:radio').length / <?php echo count($question_type[$type]) ?>)) {
                                    if (current_section < total_section) {
                                        $('#table' + current_section).hide();
                                        current_section++;
                                        $('#table' + current_section).show();
                                        if (current_section === total_section) {
                                            $('#next_page').hide();
                                            $('#show_result').show();
                                        }
                                    }
                                } else
                                    alert('you haven\'t finished your question!!');

                                return false;
                            });

                            function onOptionCheck(result) {
                                $('#result').load('result.php', {'result': result});

//                                location.href = "#anchor";
                                if (total_section > 1) {
                                    for (i = 1; i <= total_section; i++) {
                                        $('#table' + i).show();
                                    }
                                }

                                $('input:radio').attr('disabled', true);
                                if (5 ><?php echo $index; ?>)
                                    $('#next_step').show();
                                else
                                    $('#final_result').show();
                                $('#show_result').hide();
                                $('#show_result').button('reset');

                            }

                            $("#show_result").click(function() {

                                if ($('input:radio:checked').length === <?php echo $q_count ?>) {
                                    $('#show_result').button('loading');
                                    $.ajax({
                                        type: "POST",
                                        url: "caculate.php",
                                        data: $('#survey-form').serialize(),
                                        success: function(data)
                                        {
                                            onOptionCheck(data);
                                        }
                                    });
                                } else
                                    alert('you haven\'t finished your question!!');

                                return false;
                            });

                            function onNextStep() {
                                window.location.reload();
                                window.onload();
//                                location.hash = "#anchor";
//                                return false;
                            }



                            $('#final_result').click(function() {
                                window.location.replace("conclution.php");
                                return false;
                            });
        </script>
    </body>

</html>