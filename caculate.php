<?php

session_start();
require_once("formula.php");

$index = $_SESSION['step'];
//$index = 5;
if (!isset($index))
    header("Location:index.php");

$current_step = $localdb["step" . $index];
if (isset($_SESSION['senerio']))
    $current_table = $current_step['table' . $_SESSION['senerio'][$index - 1]];
else
    header("Location:index.php");

$query = "SELECT survey FROM outcome WHERE uid='" . $_SESSION['uid'] . "'";
$history = $db->query($query);
$result = $history->fetch_object();
$survey = json_decode($result->survey);
$step = $survey->{'step' . $index};


$conclution = array();
$conclution['strength'] = array();
$conclution['risk'] = array();

$g_size = $current_table['size']['group'];
$q_size = $current_table['size']['q_count'];

$sum_weight = 0;
$summary = 0;
$sum_mid = 0;
$sum_mid_low = 0;
$score = 0;

$section_count = $_POST['section'];
$type = $_POST['type'];

//answer
$answer = array();
switch ($type) {
    case 0:
        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                for ($j = 0; $j < $q_size[$s][$i]; $j++) {
                    switch ($_POST[($i + 1) . '-' . ($j + 1)]) {
                        case 5:
                            $answer[] = 1;
                            break;
                        case 4:
                            $answer[] = 2;
                            break;
                        case 3:
                            $answer[] = 3;
                            break;
                        case 2:
                            $answer[] = 4;
                            break;
                        case 1:
                            $answer[] = 5;
                            break;
                    }
                }
            }
        }
        break;
    default:
        $g_index = 1;
        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                for ($j = 0; $j < $q_size[$s][$i]; $j++) {
                    if ($_POST[($g_index) . '-' . ($j + 1)] == 1)
                        $answer[] = 1;
                    else
                        $answer[] = 2;
                }
                $g_index++;
            }
        }
        break;
}

$step->ans = $answer;


$step->solution = 0;
$risk = array();
switch ($type) {
    case 0:
        foreach ($answer as $item) {
            if ($item == 4 || $item == 5) {
                $step->solution = 1;
                break;
            }
        }
        $mid = array();
        $mid_low = array();
        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                $temp_sum_mid = 0;
                $temp_sum_mid_low = 0;
                for ($j = 0; $j < $q_size[$s][$i]; $j++) {
                    $weight = $current_table['weight'][$i][$j];
                    $summary += $_POST[($i + 1) . '-' . ($j + 1)] * $weight;
                    $sum_weight += $weight;

                    if ($_POST[($i + 1) . '-' . ($j + 1)] == 3)
                        $temp_sum_mid+=3;

                    if ($_POST[($i + 1) . '-' . ($j + 1)] == 2 || $_POST[($i + 1) . '-' . ($j + 1)] == 1)
                        $temp_sum_mid_low+=$_POST[($i + 1) . '-' . ($j + 1)];
                }
                $mid[] = $temp_sum_mid;
                $mid_low[] = $temp_sum_mid_low;
                $sum_mid+=$temp_sum_mid;
                $sum_mid_low+=$temp_sum_mid_low;
            }
        }
        $score = $summary / $sum_weight;

        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                if ($mid[$i] != 0 || $mid_low[$i] != 0) {
                    if ($mid[$i] > $mid_low[$i]) {
                        $conclution['risk'][] = $current_table['risk'][$i][0];
                        $risk[] = $i . '-0';
                    } else {
                        $conclution['risk'][] = $current_table['risk'][$i][1];
                        $risk[] = $i . '-1';
                    }
                }
            }
        }

        break;
    case 1:
        foreach ($answer as $item) {
            if ($item == 2) {
                $step->solution = 1;
                break;
            }
        }

        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                for ($j = 0; $j < $q_size[$s][$i]; $j++) {
                    if ($_POST[($i + 1) . '-' . ($j + 1)] == 1)
                        $summary += 1;
                    $sum_weight++;
                }
            }
        }
        $score = ($summary / $sum_weight) * 5;

        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                for ($j = 0; $j < $q_size[$s][$i]; $j++) {
                    if ($_POST[($i + 1) . '-' . ($j + 1)] == 0) {
                        $conclution['risk'][] = $current_table['risk'][$i][0];
                        $risk[] = $i . '-0';
                        break;
                    }
                }
            }
        }
        break;
    case 2:
        $ans_index = 0;
        $g_index = 1;
        $aa=array();
        $temp_risk = array();
        for ($s = 0; $s < $section_count; $s++) {
            for ($i = 0; $i < $g_size[$s]; $i++) {
                for ($j = 0; $j < $q_size[$s][$i]; $j++) {                    
                    if ($current_table['answer'][$ans_index] == $_POST[($g_index) . '-' . ($j + 1)]){
                        $summary += 1;
                    }else{
                        $aa[]=$ans_index;
                        $step->solution = 1;
                        $temp_risk[]=$g_index-1;
                    }
                    
                    $sum_weight++;
                    $ans_index++;
                }
                $g_index++;
            }
        }
        $score = ($summary / $sum_weight) * 5;
        $conclution['score']="$summary/$sum_weight=$score";
//        $conclution['ans']= implode(',', $aa);
        
        
        $temp=-1;
//        $temp_r=array();
        foreach ($temp_risk as $item){
            if($temp!=$item){
                $temp=$item;
                $risk[]=$item. '-0';
                $conclution['risk'][]=$current_table['risk'][$item][0];
            }
        }
        
        
//        $conclution['risksss'] = implode(',', $temp_risk);
        break;
}

function getIndex($sum, $sec_count, $group_count, $q_size) {
    for($i=0; $i<$sec_count; $i++){
        for( $j=0; $j<$group_count; $j++){
            $sum=$sum+ $q_size[$sec_count][$group_count];
        }
    }
    return $sum;
}

$step->score = $score;
$step->risk = $risk;

//indicator
$a = $current_step['indicator'];
$a[] = $score;
sort($a);
$indicator_index = array_search($score, $a);
if ($indicator_index == 4)
    $indicator_index = 3;
$conclution['indicator'] = $indicator_index;
$step->indicator = $indicator_index;

//strength
if ($type == 0) {
    $strength = array();
    for ($s = 0; $s < $section_count; $s++) {
        for ($i = 0; $i < $g_size[$s]; $i++) {
            for ($j = 0; $j < $q_size[$s][$i]; $j++) {
                if ($_POST[($i + 1) . '-' . ($j + 1)] == 5) {
                    if (strlen($current_table['strength'][$i]) > 0) {
                        $conclution['strength'][] = $current_table['strength'][$i];
                        $strength[] = $i;
                    }
                    break;
                }
            }
        }
    }
    $step->strength = $strength;
}


$query = "UPDATE outcome SET survey='" . json_encode($survey) . "' WHERE uid='" . $_SESSION['uid'] . "'";
$db->query($query);

//echo '<pre>';
//var_dump($conclution);
if ($index < 5)
    $_SESSION['step'] = $index + 1;
echo json_encode($conclution);
?>