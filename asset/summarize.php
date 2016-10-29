<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $indicator = array('極度危險', '高度風險', '中度風險', '低風險');
        require_once('../database.php');
        $query = "SELECT * FROM outcome o LEFT JOIN user u ON o.uid=u.uid";
        $db->query("SET NAMES 'utf8'");
        $result = $db->query($query);

        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);

        error_reporting(0); //disable every error notices
        define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

        date_default_timezone_set('Asia/Taipei');

        /** PHPExcel_IOFactory */
        require_once '../Classes/PHPExcel/IOFactory.php';

//        echo date('H:i:s'), " Load from Excel5 template", EOL;
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load("templates/inray_trek_summarize.xls");
//        $objPHPExcel = $objReader->load("templates/30template.xls");
//        echo date('H:i:s'), " Add new data to the template", EOL;
//        $objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel(time()));
        $baseRow = 6;
        $r = 0;

        while ($data = $result->fetch_object()) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row, 1);
            $record = json_decode($data->survey);
            $condition = $record->condition;
            $senerio = $record->senerio;
            $step1 = $record->step1;
            $step2 = $record->step2;
            $step3 = $record->step3;
            $step4 = $record->step4;
            $step5 = $record->step5;            

            $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $r + 1)
                    ->setCellValue('C' . $row, $data->date)
                    ->setCellValue('D' . $row, $data->name)
                    ->setCellValue('E' . $row, $data->company)
                    ->setCellValue('F' . $row, $data->email)
                    ->setCellValue('G' . $row, $data->career)
                    ->setCellValue('H' . $row, $condition[0])
                    ->setCellValue('I' . $row, $condition[1])
                    ->setCellValue('J' . $row, $condition[2])
                    ->setCellValue('K' . $row, $condition[3])
                    ->setCellValue('L' . $row, '=SUM(N' . $row . ':R' . $row . ')')
                    ->setCellValue('M' . $row, $indicator[$record->indicator])
                    ->setCellValue('N' . $row, '=S' . $row)
                    ->setCellValue('O' . $row, '=Z' . $row)
                    ->setCellValue('P' . $row, '=AF' . $row)
                    ->setCellValue('Q' . $row, '=AM' . $row)
                    ->setCellValue('R' . $row, '=AT' . $row)
                    ->setCellValue('S' . $row, $step1->score)//step1
                    ->setCellValue('T' . $row, $indicator[$step1->indicator])
                    ->setCellValue('U' . $row, getStrength($step1->strength))
                    ->setCellValue('V' . $row, getRisk($step1->risk))
                    ->setCellValue('W' . $row, solutionExisted($step1->solution))
                    ->setCellValue('X' . $row, 'A'.$senerio[0])
                    ->setCellValue('Y' . $row, implode(',', $step1->ans))
                    ->setCellValue('Z' . $row, $step2->score)//step2
                    ->setCellValue('AA' . $row, $indicator[$step2->indicator])
                    ->setCellValue('AB' . $row, getRisk($step2->risk))
                    ->setCellValue('AC' . $row, solutionExisted($step2->solution))
                    ->setCellValue('AD' . $row, 'B'.$senerio[1])
                    ->setCellValue('AE' . $row, implode(',', $step2->ans))
                    ->setCellValue('AF' . $row, $step3->score)//step3
                    ->setCellValue('AG' . $row, $indicator[$step3->indicator])
                    ->setCellValue('AH' . $row, getStrength($step3->strength))
                    ->setCellValue('AI' . $row, getRisk($step3->risk))
                    ->setCellValue('AJ' . $row, solutionExisted($step3->solution))
                    ->setCellValue('AK' . $row, 'C'.$senerio[2])
                    ->setCellValue('AL' . $row, implode(',', $step3->ans))
                    ->setCellValue('AM' . $row, $step4->score)//step4
                    ->setCellValue('AN' . $row, $indicator[$step4->indicator])
                    ->setCellValue('AO' . $row, getStrength($step4->strength))
                    ->setCellValue('AP' . $row, getRisk($step4->risk))
                    ->setCellValue('AQ' . $row, solutionExisted($step4->solution))
                    ->setCellValue('AR' . $row, 'D'.$senerio[3])
                    ->setCellValue('AS' . $row, implode(',', $step4->ans))
                    ->setCellValue('AT' . $row, $step5->score)//step5
                    ->setCellValue('AU' . $row, $indicator[$step5->indicator])
                    ->setCellValue('AV' . $row, getRisk($step5->risk))
                    ->setCellValue('AW' . $row, solutionExisted($step5->solution))
                    ->setCellValue('AX' . $row, 'E'.$senerio[4])
                    ->setCellValue('AY' . $row, implode(',', $step5->ans));
            $r++;
        }

        function solutionExisted($solution) {
            if ($solution == 1)
                return '有';
            else
                return '無';
        }

        function getStrength($strength) {
            if (count($strength) > 0)
                return implode(',', $strength);
            else
                return '無';
        }

        function getRisk($risks) {
            $risk_result = array();
            foreach ($risks as $item) {
                $risk = explode('-', $item);
                $risk_result[] = 'G' . ($risk[0] + 1) . '-' . ($risk[1] + 1);
            }
            return implode(',', $risk_result);
        }
        
        function dataCheck($data){
            if(isset($data)){
                return $data;
            }  else {
                return 0;
            }
        }

        $objPHPExcel->getActiveSheet()->removeRow($baseRow - 1, 1);


        echo date('H:i:s'), " Write to Excel5 format", EOL;
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save(str_replace('.php', '.xls', __FILE__));
        echo date('H:i:s'), " File written to ", str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;


        // Echo memory peak usage
        echo date('H:i:s'), " Peak memory usage: ", (memory_get_peak_usage(true) / 1024 / 1024), " MB", EOL;

        // Echo done
        echo date('H:i:s'), " Done writing file", EOL;
        echo 'File has been created in ', getcwd(), EOL;

        function getAns($ans_array) {
            $ans;
            foreach ($ans_array as $item) {
                $ans = $ans . ',';
            }
        }
        ?>
        <a href="summarize.xls">download</a>
    </body>
</html>
