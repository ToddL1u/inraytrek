<?php

//answer: if the type is 2, then this tag is needed

require_once('database.php');

function setHierarchy($title, $content) {
    $result = '';
    $result = $result . "<dt>￭ $title</dt>";
    if (count($content) > 0) {
        $result = $result . "<dd>";
        $result = $result . "<ol>";
        foreach ($content as $item) {
            $result = $result . "<li>";
            $result = $result . $item;
            $result = $result . "</li>";
        }
        $result = $result . "</ol>";
        $result = $result . "</dd>";
    }
    return $result;
}

setHierarchy('', array());

$data = array();
$step = array();
$table = array(); //A1
$table['size'] = array('group' => array(4), 'q_count' => array(array(1, 1, 2, 1)));
$table['weight'] = array(array(1), array(1.5), array(1.5, 1.5), array(1));
$table['strength'] = array('', '市場區隔，已經跨出成功的第一步', '能夠對市場做出正確區隔與分類', '');
$table['risk'] = array(
    array(setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array()),
        setHierarchy('對市場欠缺通盤的了解', array()) . setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array())),
    array(setHierarchy('沒有掌握市場區隔的訣竅', array('可能會將不同屬性的市場,倂在一起 ')).setHierarchy('將對市場做出錯誤的區隔&分類 ', array()),
        setHierarchy('沒有掌握市場區隔的訣竅', array('選擇錯誤的市場區隔變數,來劃分目標市場')).setHierarchy('對市場做出錯誤的區隔&分類', array('可能會將不同屬性的市場,倂在一起'))),
    array(setHierarchy('耗費時間所完成的市場區隔,可能是無效的', array('無法針對不同屬性的市場，進行有效的區隔與分類')) . setHierarchy('無法找出能夠讓產品業績起飛的灘頭堡', array()),
        setHierarchy(' 無效的市場區隔', array('無法針對不同屬性的市場，進行有效的區隔與分類', '無法有效的命中目標客戶')) . setHierarchy('無法找出能夠讓產品業績起飛的灘頭堡', array())),
    array(setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品將面臨極大的市場風險', array()),
        setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品失敗的機率將大幅提高', array())));
$table['solution'] = setHierarchy('更加精確的掌握以下資訊', array('產品(或解決方案)的特性', '客戶在工作流程&營運上所面臨的重大挑戰')) .
        setHierarchy('重新找出對的市場區隔變數', array()) .
        setHierarchy('改採行3-Dimension市場區隔的方法,進行有效的市場區隔', array());
$step['table1'] = $table;

$table = array(); //A2
$table['size'] = array('group' => array(5), 'q_count' => array(array(1, 1, 2, 1, 1)));
$table['weight'] = array(array(1), array(1.5), array(1.5, 1.5), array(1), array(1));
$table['strength'] = array('', '市場區隔，已經跨出成功的第一步', '能夠對市場做出正確區隔與分類', '能夠對市場進行更精確的分類', '');
$table['risk'] = array(
    array(setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array()),
        setHierarchy('對市場欠缺通盤的了解', array()) . setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array())),
    array(setHierarchy('沒有掌握市場區隔的訣竅', array('可能會將不同屬性的市場,倂在一起')).setHierarchy('將對市場做出錯誤的區隔&分類 ', array()),
        setHierarchy('沒有掌握市場區隔的訣竅', array('選擇錯誤的市場區隔變數,來劃分目標市場')).setHierarchy('對市場做出錯誤的區隔&分類 ', array('可能會將不同屬性的市場,倂在一起'))),
    array(setHierarchy('耗費時間所完成的市場區隔,可能是無效的', array('無法針對不同屬性的市場，進行有效的區隔與分類')) . setHierarchy('無法找出能夠讓產品業績起飛的灘頭堡', array()),
        setHierarchy('無效的市場區隔', array('無法針對不同屬性的市場，進行有效的區隔與分類', '無法有效的命中目標客戶')) . setHierarchy('無法找出能夠讓產品業績起飛的灘頭堡', array())),
    array(setHierarchy('虛幻與錯誤的市場區隔', array('無法將市場，精確的分割成眾多不同屬性的子市場')),
        setHierarchy('虛幻與錯誤的市場區隔', array('無法將市場，精確的分割成眾多不同屬性的子市場','無法具體描述每個子市場的關鍵特徵'))),
    array(setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品將面臨極大的市場風險', array()),
        setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品失敗的機率將大幅提高', array())));
$table['solution'] = setHierarchy('深入研究客戶以下的行為', array('工作流程&營運上所面臨的重大挑戰', '使用產品的過程中,所面臨的障礙')) .
        setHierarchy('重新找出對的市場區隔變數', array()) .
        setHierarchy('改採用3-Dimension市場區隔的方法,進行有效的市場區隔', array());
$step['table2'] = $table;

$table = array(); //A3
$table['size'] = array('group' => array(6), 'q_count' => array(array(1, 1, 2, 1, 2, 1)));
$table['weight'] = array(array(1), array(1.5), array(1.5, 1.5), array(1), array(1, 1), array(1));
$table['strength'] = array('', '市場區隔，已經跨出成功的第一步', '能夠對市場做出正確區隔與分類', '能夠對市場進行更精確的分類', '清楚誰是你的目標客戶', '');
$table['risk'] = array(
    array(setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array()),
        setHierarchy('對市場欠缺通盤的了解', array()) . setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array())),
    array(setHierarchy('沒有掌握市場區隔的訣竅', array('可能會將不同屬性的市場,倂在一起 ')).setHierarchy('將對市場做出錯誤的區隔&分類 ', array()),
        setHierarchy('沒有掌握市場區隔的訣竅', array('選擇錯誤的市場區隔變數,來劃分目標市場')).setHierarchy('對市場做出錯誤的區隔&分類 ', array('可能會將不同屬性的市場,倂在一起'))),
    array(setHierarchy('耗費時間所完成的市場區隔,可能是無效的', array('無法針對不同屬性的市場，進行有效的區隔與分類')). setHierarchy('無法找出能夠讓產品業績起飛的灘頭堡', array()),
        setHierarchy('無效的市場區隔', array('無法針對不同屬性的市場，進行有效的區隔與分類', '無法有效的命中目標客戶')) . setHierarchy('無法找出能夠讓產品業績起飛的灘頭堡', array())),    
    array(setHierarchy('虛幻與錯誤的市場區隔 ', array('無法將市場，精確的分割成眾多不同屬性的子市場')),
        setHierarchy('虛幻與錯誤的市場區隔 ', array('無法將市場，精確的分割成眾多不同屬性的子市場','無法具體描述每個子市場的關鍵特徵'))),
    array(setHierarchy('無法有效命中,最需要你產品的目標客戶', array()),
        setHierarchy('無法有效命中,最需要你產品的目標客戶', array())),
    array(setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品將面臨極大的市場風險', array()),
        setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品失敗的機率將大幅提高', array())));
$table['solution'] = setHierarchy('深入研究客戶以下的行為', array('工作流程&營運上所面臨的重大挑戰', '使用產品的過程中,所面臨的障礙')) .
        setHierarchy('重新找出對的市場區隔變數', array()) .
        setHierarchy('改採用3-Dimension市場區隔的方法,進行有效的市場區隔', array());
$step['table3'] = $table;

$table = array(); //A4
$table['size'] = array('group' => array(4), 'q_count' => array(array(1, 1, 3, 1)));
$table['weight'] = array(array(1), array(1.5), array(1.5, 1.5,1.5), array(2));
$table['strength'] = array('', '市場區隔，已經跨出成功的第一步', '能夠對市場做出正確區隔與分類', '');
$table['risk'] = array(
    array(setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array()),
        setHierarchy(' 對市場欠缺通盤的了解', array()) . setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array())),
    array(setHierarchy('將對市場做出錯誤的區隔&分類', array('可能會將不同屬性的市場,倂在一起')),
        setHierarchy('沒有掌握市場區隔的訣竅', array('選擇錯誤的市場區隔變數,來劃分目標市場')).setHierarchy('對市場做出錯誤的區隔&分類 ', array('可能會將不同屬性的市場,倂在一起'))),
    array(setHierarchy('耗費時間所完成的市場區隔,可能是無效的', array('無法針對不同屬性的市場，進行有效的區隔與分類')) . setHierarchy('無法找出能夠讓產品脫穎而出的利基市場', array()),
        setHierarchy('無效的市場區隔', array('無法針對不同屬性的市場，進行有效的區隔與分類', '無法有效的命中目標客戶')) . setHierarchy('無法找出能夠讓產品脫穎而出的利基市場', array())),
    array(setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品將面臨極大的市場風險', array()),
        setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品失敗的機率將大幅提高', array())));
$table['solution'] = setHierarchy('更加精確的掌握以下資訊', array('產品(或解決方案)的特性', '消費者在日常生活中的重大困擾&難題', '消費者待滿足的慾望與需求')) .
        setHierarchy('重新找出對的市場區隔變數', array()) .
        setHierarchy('改採行3-Dimension市場區隔的方法,進行有效的市場區隔', array());
$step['table4'] = $table;

$table = array(); //A5
$table['size'] = array('group' => array(5), 'q_count' => array(array(1, 1, 3, 1, 1)));
$table['weight'] = array(array(1), array(1.5), array(1.5, 1.5, 1.5), array(1), array(2));
$table['strength'] = array('', '市場區隔，已經跨出成功的第一步', '能夠對市場做出正確區隔與分類', '能夠對市場進行更精確的分類', '');
$table['risk'] = array(
    array(setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array()),
        setHierarchy('對市場欠缺通盤的了解', array()) . setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array())),
    array(setHierarchy('將對市場做出錯誤的區隔&分類', array('可能會將不同屬性的市場,倂在一起')),
        setHierarchy('沒有掌握市場區隔的訣竅', array('選擇錯誤的市場區隔變數,來劃分目標市場')).setHierarchy('對市場做出錯誤的區隔&分類 ', array('可能會將不同屬性的市場,倂在一起'))),
    array(setHierarchy('耗費時間所完成的市場區隔,可能是無效的', array('無法針對不同屬性的市場，進行有效的區隔與分類')) . setHierarchy('無法找出能夠讓產品脫穎而出的利基市場', array()),
        setHierarchy('無效的市場區隔', array('無法針對不同屬性的市場，進行有效的區隔與分類', '無法有效的命中目標客戶')) . setHierarchy('無法找出能夠讓產品脫穎而出的利基市場', array())),
    array(setHierarchy('無法有效命中,最需要你產品的目標客戶', array()),
        setHierarchy('虛幻與錯誤的市場區隔 ', array('無法將市場，精確的分割成眾多不同屬性的子市場','無法具體描述每個子市場的關鍵特徵'))),
    array(setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品將面臨極大的市場風險', array()),
        setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品失敗的機率將大幅提高', array())));
$table['solution'] = setHierarchy('深入研究客戶以下的行為', array('在日常生活中的重大困擾&難題', '待滿足的慾望與需求', '在使用產品的過程中,所面臨的困擾')) .
        setHierarchy('重新找出對的市場區隔變數', array()) .
        setHierarchy('改採用3-Dimension市場區隔的方法,進行有效的市場區隔', array());
$step['table5'] = $table;

$table = array(); //A6
$table['size'] = array('group' => array(6), 'q_count' => array(array(1, 1, 3, 1, 2, 1)));
$table['weight'] = array(array(1), array(1.5), array(1.5, 1.5, 1.5), array(1), array(1, 1), array(1));
$table['strength'] = array('', '市場區隔，已經跨出成功的第一步', '能夠對市場做出正確區隔與分類', '能夠對市場進行精確的分類','清楚誰是你的目標客戶', '');
$table['risk'] = array(
    array(setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array()),
        setHierarchy('對市場欠缺通盤的了解', array()) . setHierarchy('不了解你的產品(技術)將在哪個利基市場,產生獨一無二的優勢', array())),
    array(setHierarchy('將對市場做出錯誤的區隔&分類', array('可能會將不同屬性的市場,倂在一起')),
        setHierarchy('沒有掌握市場區隔的訣竅', array('選擇錯誤的市場區隔變數,來劃分目標市場')).setHierarchy('對市場做出錯誤的區隔&分類 ', array('可能會將不同屬性的市場,倂在一起'))),
    array(setHierarchy('耗費時間所完成的市場區隔,可能是無效的', array('無法針對不同屬性的市場，進行有效的區隔與分類')) . setHierarchy('無法找出能夠讓產品脫穎而出的利基市場', array()),
        setHierarchy('無效的市場區隔', array('無法針對不同屬性的市場，進行有效的區隔與分類', '無法有效的命中目標客戶')) . setHierarchy('無法找出能夠讓產品脫穎而出的利基市場', array())),
    array(setHierarchy('無法有效命中,最需要你產品的目標客戶', array()),
        setHierarchy('虛幻與錯誤的市場區隔', array('無法將市場，精確的分割成眾多不同屬性的子市場', '無法具體描述每個子市場的關鍵特徵'))),
    array(setHierarchy('虛幻與錯誤的市場區隔', array('無法將市場，精確的分割成眾多不同屬性的子市場')),
        setHierarchy('無法有效命中,最需要你產品的目標客戶', array())),
    array(setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品將面臨極大的市場風險', array()),
        setHierarchy('新產品可能採取了錯誤的市場定位策略', array()) . setHierarchy('新產品失敗的機率將大幅提高', array())));
$table['solution'] = setHierarchy('深入研究客戶以下的行為', array('在日常生活中的重大困擾&難題', '待滿足的慾望與需求', '在使用產品的過程中,所面臨的困擾')) .
        setHierarchy('重新找出對的市場區隔變數', array()) .
        setHierarchy('改採用3-Dimension市場區隔的方法,進行有效的市場區隔', array());
$step['table6'] = $table;

$step['indicator'] = array(2.5, 3.5, 4.5, 5);
$data['step1'] = $step;

$step = array();
$table = array(); //B1
$table['size'] = array('group' => array(6), 'q_count' => array(array(2, 2, 1, 1, 2, 1)));
$table['risk'] = array(
    array(setHierarchy('無法替產品找到對的目標市場(與客戶)', array('無法針對每個區隔市場的重要性,做出正確的排序'))),
    array(setHierarchy('此目標市場,無法讓你的產品銷售業績快速起飛', array())),
    array(setHierarchy('此目標市場不具有獲利潛力,請另行選擇', array())),    
    array(setHierarchy('新產品將因為選錯戰場,而面臨致命的失敗危機', array('你的產品對這些目標客戶,沒有太大的吸引力'))),
    array(setHierarchy('找出的目標市場(或客戶),有極高的機率是錯誤的', array('選擇的目標市場，不具有獨一無二的競爭利基與優勢'))),
    array(setHierarchy('此目標市場缺乏強大的競爭優勢 &良好的市場延伸性', array('無法讓產品跨越市場鴻溝,並建立穩固的灘頭堡', '無法借力使力,讓產品輕易的攻入另一個目標市場'))));
$table['solution'] = setHierarchy('由專案團隊&專家顧問組成評審委員會', array()) .
        setHierarchy('重新進行目標市場的篩選', array()) .
        setHierarchy('製作評分表 ,重新找出新的目標市場', array());
$step['table1'] = $table;

$table = array(); //B2
$table['size'] = array('group' => array(6), 'q_count' => array(array(2, 5, 1, 1, 4, 1)));
$table['risk'] = array(
    array(setHierarchy('無法針對每個區隔市場的重要性,做出正確的排序', array()).setHierarchy('目標市場過於分散', array())),
    array(setHierarchy('此目標市場,無法讓你的產品銷售業績快速起飛', array())),
    array(setHierarchy('無法從此目標市場獲取利潤,請另行選擇', array())),
    array(setHierarchy('選錯戰場,進而導致失敗的致命危機', array('選擇的目標市場,早就喪失了競爭的先機'))),
    array(setHierarchy('界定的目標市場,有極高的機率是錯誤的', array('你的產品產品對這些目標客戶,沒有太大的吸引力'))),
    array(setHierarchy('此目標市場缺乏強大的競爭優勢 &良好的市場延伸性', array('無法讓產品跨越市場鴻溝,並建立穩固的灘頭堡', '無法借力使力,讓產品輕易的攻入另一個目標市場'))));
$table['solution'] = setHierarchy('由專案團隊&專家顧問組成評審委員會', array()) .
        setHierarchy('重新進行目標市場的篩選', array()) .
        setHierarchy('製作評分表 ,重新找出新的目標市場', array());
$step['table2'] = $table;

$step['indicator'] = array(2, 3, 4, 5);
$data['step2'] = $step;

$step = array();
$table = array(); //C1
$table['size'] = array('group' => array(6), 'q_count' => array(array(1, 2, 1, 1, 3, 1)));
$table['weight'] = array(array(1.5), array(1, 1), array(1.25), array(1), array(1, 1, 1), array(1.25));
$table['strength'] = array('掌握目標客戶的關鍵需求', '產品解決方案,能夠引起目標客戶的共鳴', '產品的銷售重點,能夠打中解決問題的要害', '能夠發展出強而有力的產品銷售主張', '', '');
$table['risk'] = array(
    array(setHierarchy('籠統的客戶需求', array('將對產品的市場定位&接近目標客戶的行銷策略,產生重大的影響')),
        setHierarchy('沒有掌握目標客戶的關鍵需求', array('將對產品的市場定位&接近目標客戶的行銷策略,產生重大的影響'))),
    array(setHierarchy('產品解決方案,無法引起目標客戶的共鳴', array('無法有效移除客戶的難題與挑戰')),
        setHierarchy('產品解決方案,無法引爆客戶的需求', array('無法有效移除客戶的難題與挑戰'))),
    array(setHierarchy('產品所強調的銷售重點,沒有打中解決問題的要害', array('不了解客戶使用產品的實際行為&其所面臨的實際障礙')),
        setHierarchy('產品所強調的銷售重點,沒有打中解決問題的要害', array('不了解客戶使用產品的實際行為&其所面臨的實際障礙'))),
    array(setHierarchy('無法進行產品差異化 ', array('沒有深入研究,新產品對目標客戶的價值與吸引力')),
        setHierarchy('無法進行產品差異化 ', array('沒有深入研究,新產品對目標客戶的價值與吸引力'))),
    array(setHierarchy('新產品面臨「叫好不叫座」的困境', array('沒有深入了解客戶的購買行為&決策流程')),
        setHierarchy('沒有找到進入消費者心靈的最有效路徑 ', array('不了解客戶的購買行為&決策流程'))),
    array(setHierarchy('銷售業績始終停滯不前&毫無起色', array()),
        setHierarchy('銷售業績始終停滯不前&毫無起色', array())));
$table['solution'] = setHierarchy('由以下四個面向,挖掘客戶的關鍵性需求', array('客戶的強制性購買理由', '解決難題或困擾的構想', '探討構想的價值與吸引力', '分析客戶的購買行為與決策流程', 'XXX')) .
        setHierarchy('建立客戶需求檔案', array());
$step['table1'] = $table;

$table = array(); //C2
$table['size'] = array('group' => array(6), 'q_count' => array(array(3, 2, 1, 1, 3, 1)));
$table['weight'] = array(array(1.5, 1.5, 1.5), array(1, 1), array(1.25), array(1), array(1, 1, 1), array(1.25));
$table['strength'] = array('掌握目標客戶的關鍵需求', '產品解決方案,能夠引起目標客戶的共鳴', '產品的銷售重點,能夠打中解決問題的要害', '能夠發展出強而有力的產品銷售主張', '', '');
$table['risk'] = array(
    array(setHierarchy('籠統的客戶需求', array('將對產品的市場定位&接近目標客戶的行銷策略,產生重大的影響')),
        setHierarchy('不了解客戶的關鍵需求&日常生活所面臨的困擾', array('將對產品的市場定位&接近目標客戶的行銷策略,產生重大的影響'))),
    array(setHierarchy('產品解決方案,無法引起目標客戶的興趣', array()),
        setHierarchy('產品解決方案,無法引爆客戶的潛在的慾望&需求', array())),
    array(setHierarchy('產品的行銷重點,沒有打中目標客戶的要害', array('不了解客戶使用產品的實際行為&其所面臨的不方便')),
        setHierarchy('產品的行銷重點,沒有打中目標客戶的要害', array('不了解客戶使用產品的實際行為&其所面臨的不方便'))),
    array(setHierarchy('無法進行產品差異化 ', array('沒有深入研究,新產品對目標客戶的價值與吸引力')),
        setHierarchy('無法進行產品差異化 ', array('沒有深入研究,新產品對目標客戶的價值與吸引力'))),
    array(setHierarchy('無法產生打動消費者心靈的行銷策略', array('沒有深入研究目標客戶的強制性購買理由', '沒有深入了解目標客戶的購買行為與決策流程')),
        setHierarchy('無法產生打動消費者心靈的行銷策略', array('不清楚目標客戶的強制性購買理由', '不了解目標客戶的購買行為與決策流程'))),
    array(setHierarchy('銷售業績始終停滯不前&毫無起色', array()),
        setHierarchy('銷售業績始終停滯不前&毫無起色', array())));
$table['solution'] = setHierarchy('由以下四個面向,挖掘客戶的關鍵性需求', array('客戶的強制性購買理由', '解決難題或困擾的構想', '探討構想的價值與吸引力', '分析客戶的購買行為與決策流程', 'XXX')) .
        setHierarchy('建立客戶需求檔案', array());
$step['table2'] = $table;

$step['indicator'] = array(2.5, 3.5, 4.5, 5);
$data['step3'] = $step;

$step = array();
$table = array(); //D1
$table['size'] = array('group' => array(6), 'q_count' => array(array(1, 1, 1, 1, 5, 1)));
$table['weight'] = array(array(1.25), array(1.25), array(1.25), array(1.25), array(1, 1.25, 1.25, 1.25, 1.25), array(1));
$table['strength'] = array('幫產品找出最有利的戰場&競爭型態', '掌握目標客戶的關鍵需求&關注焦點', '能夠替新產品進行正確的市場定位', '找到能夠讓產品穩定獲利的方法', '能夠替新產品找到最有競爭力的獲利模式', '');
$table['risk'] = array(
    array(setHierarchy('定位策略可能失焦&偏差', array('尚未找到對產品最有利的戰場&競爭型態')),
        setHierarchy('失焦的定位策略', array('沒有選擇對的戰場與競爭型態'))),
    array(setHierarchy('尚未找出擊敗競爭對手,脫穎而出的市場定位策略', array('未完全掌握目標客戶的關鍵需求&關注焦點')),
        setHierarchy('沒有找到擊敗對手,脫穎而出的市場定位策略', array('沒有掌握目標客戶的關鍵需求&關注焦點'))),
    array(setHierarchy('無法在目標客戶心中,建立獨一無二的領導者地位', array('未充分了解自己產品的獨特性與競爭優勢')),
        setHierarchy('無法在目標客戶心中,建立獨一無二的領導者地位', array('不清楚自己產品的獨特性與競爭優勢'))),
    array(setHierarchy('產品可能無法維持穩定的獲利', array('產品所創造的市場價值&利潤,可能會遭到對手的強力侵蝕與瓜分')),
        setHierarchy('產品無法維持穩定的獲利', array('產品所創造的市場價值&利潤,會遭到對手的強力侵蝕與瓜分'))),
    array(setHierarchy('目前的獲利模式,可能讓新產品陷入無利可圖的困境', array()),
        setHierarchy('新產品所採用的獲利模式,有極高的機率是錯誤的', array()) . setHierarchy('無法替新產品找出有利可圖的獲利模式', array())),
    array(setHierarchy('無法找出獲利不彰的根本原因', array()),
        setHierarchy('無法找出獲利不彰的根本原因', array())));
$table['solution'] = setHierarchy('透過三大主軸, 重新擬定市場定位策略', array('根據產品的獨特性&滿足市場的核心能力, 選擇最有利的戰場與競爭型態', '將競爭的重點放在目標客戶的強制性購買理由', '找出對的競爭方式, 讓產品成為目標客戶心中的首要選擇')) .
        setHierarchy('透過利潤模式配對系統, 找到最能擷取價值的獲利模式', array());
$step['table1'] = $table;

$table = array(); //D2
$table['size'] = array('group' => array(6), 'q_count' => array(array(1, 1, 1, 1, 5, 1)));
$table['weight'] = array(array(1.25), array(1.25), array(1.25), array(1.25), array(1, 1.25, 1.25, 1.25, 1.25), array(1));
$table['strength'] = array('幫產品找出最有利的戰場&競爭型態', '掌握目標客戶的關鍵需求&關注焦點', '能夠替新產品進行正確的市場定位', '找到能夠讓產品穩定獲利的方法', '能夠替新產品找到最有競爭力的獲利模式', '');
$table['risk'] = array(
    array(setHierarchy('定位策略可能失焦&偏差', array('尚未找到對產品最有利的戰場&競爭型態')),
        setHierarchy('失焦的定位策略', array('沒有選擇對的戰場與競爭型態'))),
    array(setHierarchy('尚未找出擊敗競爭對手,脫穎而出的市場定位策略', array()),
        setHierarchy('沒有找到擊敗對手,脫穎而出的市場定位策略', array('沒有掌握目標客戶的關鍵需求&關注焦點'))),
    array(setHierarchy('無法在目標客戶心中,建立獨一無二的領導者地位', array('未充分了解自己產品的獨特性與競爭優勢')),
        setHierarchy('無法在目標客戶心中,建立獨一無二的領導者地位', array('不清楚自己產品的獨特性與競爭優勢'))),
    array(setHierarchy('產品無法維持穩定的獲利', array('產品所創造的市場價值&利潤,可能會遭到對手的強力侵蝕與瓜分')),
        setHierarchy('產品無法維持穩定的獲利', array('產品所創造的市場價值&利潤,會遭到對手的強力侵蝕與瓜分'))),
    array(setHierarchy('目前的獲利模式,可能讓新產品陷入無利可圖的困境', array()),
        setHierarchy('新產品所採用的獲利模式,有極高的機率是錯誤的', array()) . setHierarchy('無法替新產品找出有利可圖的獲利模式', array())),
    array(setHierarchy('無法找出獲利不彰的根本原因', array()),
        setHierarchy('無法找出獲利不彰的根本原因', array())));
$table['solution'] = setHierarchy('透過三大主軸, 重新擬定市場定位策略', array('根據產品的獨特性&滿足市場的核心能力, 選擇最有利的戰場與競爭型態', '將競爭的重點放在目標客戶的強制性購買理由', '找出對的競爭方式, 讓產品成為目標客戶心中的首要選擇')) .
        setHierarchy('透過利潤模式配對系統, 找到最能擷取價值的獲利模式', array());
$step['table2'] = $table;

$step['indicator'] = array(2.5, 3.5, 4.5, 5);
$data['step4'] = $step;

$step = array();
$table = array(); //E1
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 2, 1, 4), array(3), array(7)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0);
$step['table1'] = $table;

$table = array(); //E2
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 2, 1, 4), array(3), array(7)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 0);
$step['table2'] = $table;

$table = array(); //E3
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1);
$step['table3'] = $table;

$table = array(); //E4
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1);
$step['table4'] = $table;

$table = array(); //E5
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0);
$step['table5'] = $table;

$table = array(); //E6
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 1, 0);
$step['table6'] = $table;

$table = array(); //E7
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(6)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1);
$step['table7'] = $table;

$table = array(); //E8
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(6)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1);
$step['table8'] = $table;

$table = array(); //E9
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 2, 1, 4), array(3), array(7)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0);
$step['table9'] = $table;

$table = array(); //E10
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 2, 1, 4), array(3), array(7)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 0);
$step['table10'] = $table;

$table = array(); //E11
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1);
$step['table11'] = $table;

$table = array(); //E12
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1);
$step['table12'] = $table;

$table = array(); //E13
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0);
$step['table13'] = $table;

$table = array(); //E14
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(8)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0);
$step['table14'] = $table;

$table = array(); //E15
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(6)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1);
$step['table15'] = $table;

$table = array(); //E16
$table['size'] = array('group' => array(4, 1, 1), 'q_count' => array(array(4, 3, 2, 4), array(3), array(6)));
$table['risk'] = array(
    array(setHierarchy('尚未找到，最能夠讓產品脫穎而出的競爭型態', array('目前產品的競爭型態&主軸,可能是錯誤的'))),
    array(setHierarchy('錯誤的產品開發原則', array())),
    array(setHierarchy('錯誤的市場開發與競爭策略', array())),
    array(setHierarchy('沒有掌握快速佔領目標陣地之市場經營原則', array('將讓新產品面臨獲利停滯的成長困境'))),
    array(setHierarchy('尚未找到甩開競爭對手,並且脫穎而出的競爭策略', array('沒有深入了解此目標市場的競爭基礎'))),
    array(setHierarchy('尚未找出最能實現產品定位策略&利潤模式的「最佳競爭路徑」', array('沒有掌握目標客戶關注的重點', '不了解產品的競爭型態&主軸'))));
$table['solution'] = setHierarchy('從市場權力結構、產品生命週期、利潤模式與目標客戶關注焦點等四個角度，重新審視產品的', array('競爭型態&主軸', '競爭的重點', '市場經營原則')) .
        setHierarchy('根據企業的核心能力, 擬定產品的市場經營&競爭策略', array());
$table['answer'] = array(0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1);
$step['table16'] = $table;


$step['indicator'] = array(2, 3, 4, 5);
$data['step5'] = $step;
//echo '<pre>';
//var_dump($data,true);

$localdb = json_decode(json_encode($data), true);
?>
