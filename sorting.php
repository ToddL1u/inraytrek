<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>           
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="css/inray_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">


            /* Supporting marketing content */

            caption{
                text-align: left;
                font-size:20px;
                color: #0C8CAF;
                font-weight: bold;
            }
            
            .header{
                font-weight: bold;
                font-size: 20px;
                padding: 20px 0;
            }
            
            table td img{
                padding-top: 30px;
            }
            
            .dash{
                padding-bottom: 15px;
            }

        </style>
    </head>

    <body>
        <div class="container-narrow">
            <p class=" header text-center">開始前請點選A-D，系統會自動為您配出客製化的檢測表單。</p>
            <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
            <form name="survey" action="senerio.php" method="post" onsubmit="return OnOptionCheck()">
                <div class="row-fluid">
                    <table >
                        <tbody>
                            <tr>
                                <td align="center"><img src="img/chart1.png" />
                                </td>
                                <td width="50%" valign="top">
                                    <table class="table" >
                                        <caption> A. 客戶類型</caption>
                                        <thead>
                                            <tr>
                                                <td>您的客戶若為企業用戶，請選B2B；您的客戶若為一般消費者，請選B2C。</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="radio">
                                                        <input name="A" type="radio" value="1" />Ⅰ        
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="A" value="2" />Ⅱ
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>

                    <table >
                        <tbody>
                            <tr>
                                <td align="center"><img src="img/chart2.png" width="371" height="252" alt="chart2"/></td>
                                <td width="50%" valign="top"><table class="table">
                                        <caption>
                                            B. 產品(技術)和市場位置
                                        </caption>
                                        <thead>
                                            <tr>
                                                <td >根據產品(技術)的密集程度、和即將進入的市場位置，來選擇(I)、(Ⅱ)、(Ⅲ)、(Ⅳ)。</td>
                                            </tr>
                                        </thead>
                                        <tr >
                                            <td><p>
                                                    <label class="radio">
                                                        <input type="radio" name="B" value="1" />Ⅰ
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="B" value="2" />Ⅱ
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="B" value="3" />Ⅲ
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="B" value="4" />Ⅳ
                                                    </label>
                                                </p></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </tbody>
                    </table>
                    <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
                    <table >
                        <tbody>
                            <tr>
                                <td align="center"><img src="img/chart3.png" /></td>
                                <td width="50%" valign="top"><table class="table">
                                        <caption>
                                            C. 產品生命週期
                                        </caption>
                                        <thead>
                                            <tr>
                                                <td>依照產品生命週期的階段，來選擇(I)、(Ⅱ)、(Ⅲ)、(IV)。
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td><label class="radio">
                                                    <input name="C" type="radio" value="1" />Ⅰ
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="C" value="2" />Ⅱ
                                                </label>
                                                <label class="radio">
                                                    <input name="C" type="radio" value="3" />Ⅲ
                                                </label>
                                                <label class="radio">
                                                    <input name="C" type="radio" value="4" />Ⅳ
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
                    <table >
                        <tbody>
                            <tr>
                                <td align="center"><img src="img/chart4.png" /></td>
                                <td width="50%" valign="top"><table class="table" >
                                        <caption>
                                            D. 產品技術和客戶需求
                                        </caption>
                                        <thead>
                                            <tr>
                                                <td>針對「產品技術」是否超越「客戶需求」，來判斷不同的位置。
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </td>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td><p>
                                                    <label class="radio">
                                                        <input name="D" type="radio" value="1" />Ⅰ
                                                    </label>
                                                    <label class="radio">
                                                        <input name="D" type="radio" value="2" />Ⅱ
                                                    </label>
                                                </p></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </tbody>
                    </table>
                    <img class=" dash" src="img/line-horizon.png" width="998" height="1"/>
                </div>

                <div class="footer" style=" text-align: center">
                    <h3>準備好了嗎?</h3><br>
                        <button id="next" class="btn btn-large btn-custom" type="submit" data-loading-text="loading...">GO!!</button>
                </div>
            </form>
        </div>
        <script src="js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" >
                function OnOptionCheck() {
                    if ($("input[name='A']:checked").length > 0
                            & $("input[name='B']:checked").length > 0
                            & $("input[name='C']:checked").length > 0
                            & $("input[name='D']:checked").length > 0) {
                             $('#next').button('loading');
                        return true;
                    } else {
                        alert('You haven\'t finished your options!!');
                        return false;
                    }
                }
        </script>
    </body>
</html>