<?php

session_start();
require_once('formula.php');
$db->query("SET NAMES 'utf8'");

$uid = $_SESSION['uid'];
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$career = $_POST['career'];
$query = "INSERT INTO user (uid,name,company,email,career) VALUES ('$uid','$name','$company','$email','$career')";

$db->query($query);
echo $career;

$query = "SELECT survey FROM outcome WHERE uid='" . $uid . "'";
$result = $db->query($query)->fetch_object();
$survey = json_decode($result->survey);
$content = file_get_contents('summary.php');
$risks = '';
$step = array('第一關：市場區隔', '第二關：目標市場', '第三關：客戶需求', '第四關：定位和利潤模式', '第五關：動態競爭');
for ($i = 0; $i < 5; $i++) {
    $risks .= "<div class=\"step\" style=\"font-size:18px;font-weight:bold;margin-top:30px;padding-bottom:5px;margin-left:50px;text-decoration:underline;\">" . $step[$i] . '</div>';
    if (isset($survey->{'step' . ($i + 1)}->risk)) {
        foreach ($survey->{'step' . ($i + 1)}->risk as $item) {
            $current_step = $localdb["step" . ($i + 1)];
            $current_table = $current_step['table' . $survey->senerio[$i]];
            $risk = explode('-', $item);
            $risks .= $current_table['risk'][$risk[0]][$risk[1]];
        }
    }
}
$content = str_replace("%risks%", $risks, $content);
$solution = '';

for ($i = 0; $i < 5; $i++) {
    if (isset($survey->{'step' . ($i + 1)}->solution)) {
        if ($survey->{'step' . ($i + 1)}->solution > 0) {
            $current_step = $localdb["step" . ($i + 1)];
            $current_table = $current_step['table' . $survey->senerio[$i]];
            $solution = $solution . $current_table['solution'];
        }
    }
}

$content = str_replace("%solution%", $solution, $content);
//$content = str_replace("<ol>", "<ol style=\"margin-left: -10px 0 35px 0 \">", $content);
$content = str_replace("<dt>", "<dt style=\"margin-left:73px; font-size:16px\">", $content);
$content = str_replace("<li>", "<li style=\"margin:0 0 0 35px; font-size:13px\">", $content);
echo $content;


require_once ('phpmailer/class.phpmailer.php');
mb_internal_encoding('UTF-8');
$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
$mail->IsSMTP();

try {
//    $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
//    $mail->SMTPAuth = true;                  // enable SMTP authentication
//    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "seed.net.tw";      // sets GMAIL as the SMTP server
    $mail->Port = 25;                   // set the SMTP port for the GMAIL server
//    $mail->AddReplyTo('apps@otouching.com', 'InrayTek');
    $mail->AddAddress($_POST['email'], $_POST['name']);
//    $mail->AddAddress('gd.lin@otouching.com', 'Goodspeed');
    $mail->AddBCC('service@inraytek.com');
//    $mail->AddAddress('seruziu@hotmail.com', 'Todd');
//    $mail->AddAddress('todd.liu@otouching.com', 'Todd');
    $mail->SetFrom('service@inraytek.com', 'InrayTek');
//  $mail->AddReplyTo('name@yourdomain.com', 'First Last');

    $mail->CharSet = "UTF-8";

    $mail->Subject = mb_encode_mimeheader('InrayTek – 新產品風險評估報告', 'UTF-8');
    $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
    $mail->MsgHTML($content);
//  $mail->AddAttachment('images/phpmailer.gif');      // attachment
//  $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
    $mail->Encoding = "base64";
    $mail->Send();
//    echo '<pre>';
//    print_r($mail);
    echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
}
session_destroy();
?>