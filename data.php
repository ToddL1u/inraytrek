<?php

//question: question title
//type: quesion type
//0:rank
//1:true or false
//2:true or false (getting the point if the answer is correct)
//title: table title
//des: table des
$question_type = json_decode(json_encode(array(array("高", "中高", "中", "中低", "低"), array("是", "否"), array("是", "否"))));

$data = array();
$step = array(); //step1
$table = array(); //A1
$section_group = array();
$section = array();
$section['q'] = '';
$question = array();
$question[] = array("清楚你的產品可以運用在哪些領域，並且帶來重大的影響與價值");
$question[] = array("能夠具體列出產品的功能, 可以幫客戶解決哪些工作任務上的關鍵障礙和挑戰");
$question[] = array("能夠具體列出產品可以幫客戶解決哪些企業營運上的重大挑戰與難題", "清楚使用產品需要搭配哪些專業知識, 並且知道哪些組織或專家可以提供");
$question[] = array("知道傳統的市場區隔理論在高科技產業的重大缺陷");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;
$step['table1'] = $table;

$table = array(); //A2
$section_group = array();
$section = array();
$section['q'] = '';
$question = array();
$question[] = array("清楚你的產品可以運用在哪些領域，並且帶來重大的影響與價值");
$question[] = array("能夠具體列出產品的功能, 可以幫客戶解決哪些工作任務上的關鍵障礙和挑戰");
$question[] = array("能夠具體列出產品可以幫客戶解決哪些企業營運上的重大挑戰與難題", "清楚使用產品需要搭配哪些專業知識, 並且知道哪些組織或專家可以提供");
$question[] = array("可以具體指出哪些客戶, 因為使用競爭者的產品而正在付出高昂的代價");
$question[] = array("知道傳統的市場區隔理論在高科技產業的重大缺陷");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table2'] = $table;

$table = array(); //A3
$section_group = array();
$section = array();
$section['q'] = '';
$question = array();
$question[] = array("清楚你的產品可以運用在哪些領域，並且帶來重大的影響與價值 ");
$question[] = array("能夠具體列出產品的功能, 可以幫客戶解決哪些工作任務上的關鍵障礙和挑戰");
$question[] = array("能夠具體列出產品可以幫客戶解決哪些企業營運上的重大挑戰與難題", "清楚使用產品需要搭配哪些專業知識, 並且知道哪些組織或專家可以提供");
$question[] = array("可以具體指出哪些客戶, 因為使用競爭者的產品而正在付出高昂的代價");
$question[] = array("能夠明確指出, 誰擁有最後的購買決策權", "能夠具體列出, 左右決策者做出購買選擇的主要影響因素");
$question[] = array("知道傳統的市場區隔理論在高科技產業的重大缺陷");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table3'] = $table;

$table = array(); //A4
$section_group = array();
$section = array();
$section['q'] = '';
$question = array();
$question[] = array("清楚你的產品可以運用在哪些領域，並且帶來重大的影響與價值 ");
$question[] = array("能夠具體列出產品的功能, 可以解決消費者在日常生活中遭遇的重大困擾和憂慮");
$question[] = array(
    "能夠具體列出產品可以在哪些領域, 讓消費者的日常生活更便利和更有趣",
    "清楚產品可以塑造何種特定的社會形象與身分地位",
    "能夠具體列出產品和消費者的內在情感、認知、喜好、品味產生何種有效的連結");
$question[] = array("你知道傳統市場區隔變數在高科技產業的重大缺陷");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table4'] = $table;

$table = array(); //A5
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("清楚你的產品可以運用在哪些領域，並且帶來重大的影響與價值 ");
$question[] = array("能夠具體列出產品的功能, 可以解決消費者在日常生活中遭遇的重大困擾和憂慮");
$question[] = array(
    "能夠具體列出產品可以在哪些領域, 讓消費者的日常生活更便利和更有趣",
    "清楚產品可以塑造何種特定的社會形象與身分地位",
    "能夠具體列出產品和消費者的內在情感、認知、喜好、品味、產生何種有效的連結");
$question[] = array("可以具體指出有哪些消費者, 因為使用類似的產品而正在蒙受極大的不方便與困擾");
$question[] = array("你知道傳統市場區隔變數在高科技產業的重大缺陷");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table5'] = $table;

$table = array(); //A6
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("清楚你的產品可以運用在哪些領域，並且帶來重大的影響與價值 ");
$question[] = array("能夠具體列出產品的功能, 可以解決消費者在日常生活中遭遇的重大困擾和憂慮");
$question[] = array(
    "能夠具體列出產品可以在哪些領域, 讓消費者的日常生活更便利和更有趣",
    "清楚產品可以塑造何種特定的社會形象與身分地位",
    "能夠具體列出產品和消費者的內在情感、認知、喜好、品味產生何種有效的連結");
$question[] = array("可以具體指出有哪些消費者, 因為使用類似的產品而正在蒙受極大的不方便與困擾");
$question[] = array("能夠明確指出，掌握最後購買決策權的消費者","能夠具體列出, 左右決策者做出購買選擇的主要影響因素");
$question[] = array("你知道傳統市場區隔變數在高科技產業的重大缺陷");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table6'] = $table;

$step['type'] = 0;
$step['title'] = "市場區隔能力";
$step['des'] = "檢視能否跳脫「傳統市場區隔方法」在技術密集產業的重大缺陷，找出最容易讓業績起飛的目標市場 <br/>請依掌握程度高→低作答。";
$data['step1'] = $step;

$step = array(); //step2
$table = array(); //B1
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("能正確計算每個區隔市場的規模大小", "能精準預測每個區隔市場的成長潛力與獲利能力");
$question[] = array("能具體列出2~3點，客戶必須跟你購買產品的迫切性理由", "能明確指出哪些客戶願意在三個月內，付出相當金額購買你的產品");
$question[] = array("知道哪些區隔市場，能夠立刻被我們的銷售團隊所接觸");
$question[] = array("能夠明確指出競爭者已在哪些區隔市場建立強勢的領導地位");
$question[] = array("能夠針對目標客戶的迫切性購買理由, 提供一套完整的產品解決方案", "相較於競爭對手，擁有更完整的策略聯盟夥伴網絡");
$question[] = array("知道在哪個區隔市場，公司能夠輕易建立強勢主導地位。進而挾此優勢、順利攻入臨近的利基市場");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table1'] = $table;

$table = array(); //B2
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("能正確計算每個區隔市場的規模大小", "能精準預測每個區隔市場的成長潛力與獲利能力");
$question[] = array(
    "能具體列出2~3點，消費者必須跟你購買產品的迫切性理由",
    "能明確指出消費者想讓日常生活更便利有趣的期待與要求",
    "已經掌握消費者建立特定形象和身分地位的強烈渴望",
    "清楚消費者正面臨的重大困擾&焦慮(例: 期待更舒適便利的生活、心理情緒壓力、產品效能不佳與使用障礙)",
    "確定產品可以在3個月內引發客戶的強烈購買願意(或是衝動性購買)");
$question[] = array("知道哪些區隔市場，能夠立刻被我們的銷售通路所接觸");
$question[] = array("清楚競爭者已搶先占領哪些區隔市場、並建立穩固的地位");
$question[] = array(
    "能夠針對目標客戶的迫切性購買理由, 提供比競爭對手, 更容易上手、有趣和酷炫的產品",
    "比競爭對手更能夠有效移除消費者日常生活中的重大困擾和不方便",
    "比競爭對手或其他類似產品更能夠有效連結消費者的社交情感需求",
    "已經建立比競爭對手更完整的產品配銷(銷售)通路");
$question[] = array("知道在哪個區隔市場，公司能夠輕易建立強勢主導地位。進而挾此優勢、順利攻入臨近的利基市場");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table2'] = $table;

$step['type'] = 1;
$step['title'] = "找出目標市場";
$step['des'] = "確認已經聚焦最有利可圖的目標市場。";
$data['step2'] = $step;

$step = array(); //step3
$table = array(); //C1
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("能明確指出客戶因為採用既有產品(或解決方案)所出現的重大錯誤和實質經濟損失");
$question[] = array(" 知道如何移除客戶在各工作階段，所遭遇的重大障礙與難題", "能具體指出客戶捨棄既有方案、並轉用你的產品的原因");
$question[] = array("能具體描述客戶實際使用產品的詳細分解動作和完整流程");
$question[] = array("能明確指出客戶因為使用產品, 獲得哪些實質利益(ex. 節省成本、提高生產力或創造額外價值)");
$question[] = array(
    "清楚客戶購買的決策流程和影響因子",
    "能具體列出顧客最喜歡的銷售「賣點」(ex. 價格、特性、服務、效率等)",
    "能明確指出接觸顧客的最佳方式");
$question[] = array("清楚如何協助客戶排除購買的障礙和困難");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table1'] = $table;

$table = array(); //C2
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array(
    "了解消費者在日常生活中，所面臨的重大困擾、憂慮&不便利性",
    "了解消費者在社交與情感層面的待滿足需求( 例: 形象地位、獨特性、品味、喜好、認同&自我需求)",
    "清楚消費者會採取哪些行動來移除困擾&憂慮，進而滿足其便利性、趣味性與社交、情感層面的特<br/>&nbsp;&nbsp;&nbsp;殊需求");
$question[] = array("知道如何解除消費者在日常生活中所面臨的困擾&憂慮，或是滿足其社交&情感層面的需求", "能具體指出顧客捨棄既有方案、並轉用你的產品的原因");
$question[] = array("能具體描述客戶實際使用產品的詳細分解動作和完整流程");
$question[] = array("能明確指出消費者因為使用產品, 獲得哪些實質利益 (例. 節省成本、提高便利性、提高社會地位、<br/>&nbsp;&nbsp;&nbsp;滿足社交情感)");
$question[] = array(
    "清楚客戶購買的決策流程和影響因子",
    "能具體列出顧客最喜歡的銷售「賣點」(ex. 價格、特性、服務、效率等)",
    "能明確指出接觸顧客的最佳方式");
$question[] = array("清楚如何協助客戶排除購買的障礙和困難");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table2'] = $table;

$step['type'] = 0;
$step['title'] = "客戶需求檔案";
$step['des'] = "判斷是否根據客戶購買產品的強制理由，造就符合客戶需求的完整產品。<br/>請依掌握程度高→低作答。";
$data['step3'] = $step;

$step = array(); //step4
$table = array(); //D1
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("已找到讓產品銷售業績快速起飛的灘頭堡市場");
$question[] = array("能具體列出客戶對市場上其他競爭者產品的不滿意點");
$question[] = array("清楚知道如何強調自己的優點(或凸顯競爭者的缺點), 才能成功擊敗對手、並成為客戶購買產品的<br/>&nbsp;&nbsp;&nbsp;首要選擇");
$question[] = array("明確知道採取何種主要的利潤模式, 才能領先對手、並讓新產品(或事業)有利可圖");
$question[] = array(
    "能具體描述利潤模式的運作方式",
    "能具體列出利潤模式的前提條件與門檻",
    "已充分掌握利潤模式的關鍵成功因素",
    "能具體列出保護產品利潤的最有效方法和手段",
    "能明確指出利潤模式的罩門與重大風險, 並準確判讀危機出現的徵兆");
$question[] = array("清楚掌握主要競爭對手的獲利絕招與關鍵弱點");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table1'] = $table;

$table = array(); //D2
$section_group = array();
$section = array();
$section['q'] = '';

$question = array();
$question[] = array("已找到讓產品銷售業績快速起飛的灘頭堡市場");
$question[] = array("能具體列出顧客對市場上其他競爭者產品的不滿意點");
$question[] = array("清楚知道如何強調自己的優點(或凸顯競爭者的缺點), 才能成功擊敗對手、並成為顧客購買產品的<br/>&nbsp;&nbsp;&nbsp;首要選擇");
$question[] = array("明確知道採取何種主要的利潤模式, 才能領先對手、並讓新產品(或事業)有利可圖");
$question[] = array(
    "能具體描述利潤模式的運作方式",
    "能具體列出利潤模式的前提條件與門檻",
    "已充分掌握利潤模式的關鍵成功因素",
    "能具體列出保護產品利潤的最有效方法和手段",
    "能明確指出利潤模式的罩門與重大風險, 並準確判讀危機出現的徵兆");
$question[] = array("清楚掌握主要競爭對手的獲利絕招與關鍵弱點");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;
$step['table2'] = $table;

$step['type'] = 0;
$step['title'] = "市場定位和獲利模式";
$step['des'] = "判斷是否選對戰場和最具競爭力的利潤模式，並具備有效收割產品價值和保護獲利的能力。<br/>請依掌握程度高→低作答。";
$data['step4'] = $step;

$step = array(); //step5
$table = array(); //E1
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於垂直的利基市場",
    "專注於產品(或技術)的優異性，並吸引高瞻遠矚者的目光");
$question[] = array("將客製化的服務，轉換成突破性的產品功能", "發展性能優異與符合利基市場需求的完整產品");
$question[] = array("針對目標客戶的特殊需求，提供客製化的解決方案");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "透過專業論壇與口碑效應，爭取客戶",
    "採用價值基礎的訂價法，追求最大利潤",
    "讓目標客戶得到很高的投資報酬率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>ex. 「產品的性能和效率 (Performance)，優於競爭對手」 or  「產品的可靠性和穩定度，優於競爭對手」<br/>
          or 「產品的完整性和整合程度，優於競爭對手」</li></ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢",
    "是否使用先進的技術架構與規格 或 此技術是否得到評比獎項的肯定",
    "使用業界的主流標準，並且獲得最多獨立開發商的支持",
    "已被最多業界的一線大客戶採用",
    "突破性(獨特)的產品功能",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;
$step['table1'] = $table;

$table = array(); //E2
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於垂直的利基市場",
    "專注於產品(或技術)的優異性，並吸引高瞻遠矚者的目光");
$question[] = array("將客製化的服務，轉換成突破性的產品功能", "發展性能優異與符合利基市場需求的完整產品");
$question[] = array("針對目標客戶的特殊需求，提供客製化的解決方案");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "透過專業論壇與口碑效應，爭取客戶",
    "採用價值基礎的訂價法，追求最大利潤",
    "讓目標客戶得到很高的投資報酬率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>ex. 「產品的性能和效率 (Performance)，優於競爭對手」 or  「產品的可靠性和穩定度，優於競爭對手」<br/>
          or 「產品的完整性和整合程度，優於競爭對手」</li></ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢",
    "是否使用先進的技術架構與規格 或 此技術是否得到評比獎項的肯定",
    "使用業界的主流標準，並且獲得最多獨立開發商的支持",
    "已被最多業界的一線大客戶採用",
    "突破性(獨特)的產品功能",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table2'] = $table;

$table = array(); //E3
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於一般大眾的水平市場",
    "專注於垂直的利基市場");
$question[] = array(
    "發展性能優異與符合利基市場需求的完整產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("避開競爭，專注於一個利基市場建立絕對的主導地位", "主動攻擊競爭對手，專注於市場的快速擴張與佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢",
    "能夠大幅提升企業整體的生產力與績效 ",
    "使用業界的主流標準，並且獲得最多獨立開發商的支持",
    "產品是否使用先進的技術架構",
    "突破性(獨特)的產品功能",
    "已被最多業界的一線大客戶採用",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;


$step['table3'] = $table;

$table = array(); //E4
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於一般大眾的水平市場",
    "專注於垂直的利基市場");
$question[] = array(
    "發展性能優異與符合利基市場需求的完整產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("避開競爭，專注於一個利基市場建立絕對的主導地位", "主動攻擊競爭對手，專注於市場的快速擴張與佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢",
    "能夠大幅提升企業整體的生產力與績效 ",
    "使用業界的主流標準，並且獲得最多獨立開發商的支持",
    "產品是否使用先進的技術架構",
    "突破性(獨特)的產品功能",
    "已被最多業界的一線大客戶採用",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;


$step['table4'] = $table;

$table = array(); //E5
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於一般大眾的水平市場",
    "專注於成熟市場中的利基市場");
$question[] = array(
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，專注於市場的快速擴張與佔有率", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "能夠大幅提升企業整體的生產力與績效 ",
    "產品是否使用先進的技術架構",
    "業界的主流標準，並且獲得最多獨立開發商的支持",
    "突破性(獨特)的產品功能",
    "已被最多業界的一線大客戶採用",
    "最能滿足消費者個人需求的差異化產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;


$step['table5'] = $table;

$table = array(); //E6
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "完全是「市場導向」",
    "專注於一般大眾的水平市場",
    "專注於成熟市場中的利基市場");
$question[] = array(
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，專注於市場的快速擴張與佔有率", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "能夠大幅提升企業整體的生產力與績效 ",
    "產品是否使用先進的技術架構",
    "業界的主流標準，並且獲得最多獨立開發商的支持",
    "突破性(獨特)的產品功能",
    "已被最多業界的一線大客戶採用",
    "最能滿足消費者個人需求的差異化產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;


$step['table6'] = $table;

$table = array(); //E7
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "完全是「市場導向」",
    "專注於成熟市場中的利基市場",
    "專注於一般大眾的水平市場");
$question[] = array(
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，專注於市場的快速擴張與佔有率", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "透過原有的經銷管道來銷售產品",
    "採用競爭基礎的訂價法，追求最大市場佔有率",
    "利用產品的加工或改良，獲取較高的利潤");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "能夠大幅提升企業整體的生產力與績效 ",
    "若再不採用產品，將跟不上潮流與面臨市場淘汰的壓力 ",
    "已被最多業界的一線大客戶採用",
    "產品是否最能滿足消費者個人需求的差異化需求產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;
$step['table7'] = $table;

$table = array(); //E8
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "完全是「市場導向」",
    "專注於成熟市場中的利基市場",
    "專注於一般大眾的水平市場");
$question[] = array(
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，專注於市場的快速擴張與佔有率", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "透過原有的經銷管道來銷售產品",
    "採用競爭基礎的訂價法，追求最大市場佔有率",
    "利用產品的加工或改良，獲取較高的利潤");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "能夠大幅提升企業整體的生產力與績效 ",
    "若再不採用產品，將跟不上潮流與面臨市場淘汰的壓力 ",
    "已被最多業界的一線大客戶採用",
    "產品是否最能滿足消費者個人需求的差異化需求產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table8'] = $table;

$table = array(); //E9
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於垂直的利基市場",
    "專注於產品(或技術)的優異性，並吸引高瞻遠矚者的目光");
$question[] = array(
    "將客製化的服務，轉換成突破性的產品功能",
    "發展性能優異與符合利基市場需求的完整產品");
$question[] = array("針對目標客戶的特殊需求，提供客製化的解決方案");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "透過專業論壇與口碑效應，爭取客戶",
    "採用價值基礎的訂價法，追求最大利潤",
    "讓目標客戶得到很高的投資報酬率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>ex. 「產品的性能和效率 (Performance)，優於競爭對手」 or  「產品的可靠性和穩定度，優於競爭對手」<br/>
          or 「產品的完整性和整合程度，優於競爭對手」</li></ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢 ",
    "是否使用先進的技術架構與規格 或 此技術是否得到評比獎項的肯定 ",
    "使用業界的主流標準，並且獲得最多獨立開發商的支持",
    "已被市場上大多數的消費者採用",
    "突破性(獨特)的產品功能",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table9'] = $table;

$table = array(); //E10
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於垂直的利基市場",
    "專注於產品(或技術)的優異性，並吸引高瞻遠矚者的目光");
$question[] = array(
    "將客製化的服務，轉換成突破性的產品功能",
    "發展性能優異與符合利基市場需求的完整產品");
$question[] = array("針對目標客戶的特殊需求，提供客製化的解決方案");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "透過專業論壇與口碑效應，爭取客戶",
    "採用價值基礎的訂價法，追求最大利潤",
    "讓目標客戶得到很高的投資報酬率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>ex. 「產品的性能和效率 (Performance)，優於競爭對手」 or  「產品的可靠性和穩定度，優於競爭對手」<br/>
          or 「產品的完整性和整合程度，優於競爭對手」</li></ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢 ",
    "是否使用先進的技術架構與規格 或 此技術是否得到評比獎項的肯定 ",
    "使用業界的主流標準，並且獲得最多獨立開發商的支持",
    "已被市場上大多數的消費者採用",
    "突破性(獨特)的產品功能",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table10'] = $table;

$table = array(); //E11
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於一般大眾的水平市場",
    "專注於垂直的利基市場");
$question[] = array(
    "發展性能優異與符合利基市場需求的完整產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("避開競爭，專注於一個利基市場建立絕對的主導地位", "主動攻擊競爭對手，專注於市場的快速擴張與佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢 ",
    "能夠建立特定形象地位 或 彰顯內在情感和偏好 ",
    "是業界的主流標準且具備高可靠度, 相容的界面, 和完善的支援服務",
    "產品是否使用先進的技術架構",
    "突破性(獨特)的產品功能",
    "已被市場上大多數的消費者採用",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table11'] = $table;

$table = array(); //E12
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「產品技術導向」為主、「市場導向」為輔",
    "以「市場導向」為主、「產品技術導向」為輔",
    "專注於一般大眾的水平市場",
    "專注於垂直的利基市場");
$question[] = array(
    "發展性能優異與符合利基市場需求的完整產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("避開競爭，專注於一個利基市場建立絕對的主導地位", "主動攻擊競爭對手，專注於市場的快速擴張與佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "帶來突破性的創新與領先優勢 ",
    "能夠建立特定形象地位 或 彰顯內在情感和偏好 ",
    "是業界的主流標準且具備高可靠度, 相容的界面, 和完善的支援服務",
    "產品是否使用先進的技術架構",
    "突破性(獨特)的產品功能",
    "已被市場上大多數的消費者採用",
    "最佳的產品效能與彈性調整空間",
    "具備最完整(或開放式)的產品架構和支援服務");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table12'] = $table;

$table = array(); //E13
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「市場導向」為主、「產品技術導向」為輔",
    "完全是「市場導向」",
    "專注於一般大眾的水平市場",
    "專注於成熟市場中的利基市場");
$question[] = array(
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，專注於市場的快速擴張與佔有率", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "能夠大幅提升日常生活的便利性和趣味性",
    "產品是否使用先進的技術架構",
    "是業界的主流標準且具備高可靠度, 相容的界面, 和完善的支援服務",
    "突破性(獨特)的產品功能",
    "已被市場上大多數的消費者採用",
    "最能滿足消費者個人需求的差異化產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table13'] = $table;

$table = array(); //E14
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「市場導向」為主、「產品技術導向」為輔",
    "完全是「市場導向」",
    "專注於一般大眾的水平市場",
    "專注於成熟市場中的利基市場");
$question[] = array(
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，專注於市場的快速擴張與佔有率", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "與加值型的經銷商合作，確保客戶可以得到客製化的解決方案",
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "採用價值基礎的訂價法，追求最大利潤",
    "採用競爭基礎的訂價法，追求最大市場佔有率");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';

$question = array();
$question[] = array(
    "能夠大幅提升日常生活的便利性和趣味性",
    "產品是否使用先進的技術架構",
    "是業界的主流標準且具備高可靠度, 相容的界面, 和完善的支援服務",
    "突破性(獨特)的產品功能",
    "已被市場上大多數的消費者採用",
    "最能滿足消費者個人需求的差異化產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;

$step['table14'] = $table;

$table = array(); //E15
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';

$question = array();
$question[] = array(
    "以「市場導向」為主、「產品技術導向」為輔",
    "完全是「市場導向」",
    "專注於成熟市場中的利基市場",
    "專注一般大眾的水平市場");
$question[] = array(
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，聚焦於市場的快速擴張", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "透過原有的經銷管道來銷售產品",
    "採用競爭基礎的訂價法，追求最大市場佔有率",
    "利用產品的加工或改良，獲取較高的利潤");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';

$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';
$question = array();
$question[] = array(
    "能夠大幅提升日常生活的便利性和趣味性 ",
    "若再不採用產品，將跟不上潮流與面臨不便利的壓力",
    "已被市場上大多數的消費者採用",
    "產品是否最能滿足消費者個人需求的差異化需求產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;
$table['question'] = $section_group;

$step['table15'] = $table;

$table = array(); //E16
$section_group = array();
$section = array();
$section['q'] = '你認為競爭型態…';
$question = array();
$question[] = array(
    "以「市場導向」為主、「產品技術導向」為輔",
    "完全是「市場導向」",
    "專注於成熟市場中的利基市場",
    "專注一般大眾的水平市場");
$question[] = array(
    "建立聯盟，共同發展符合主流市場需求的完整產品",
    "透過產品再加工的方式，製造大量且具有附加價值的差異性產品",
    "將產品正規化與簡單化，讓其成為業界的主流架構(或標準)");
$question[] = array("主動攻擊競爭對手，聚焦於市場的快速擴張", "不斷推出加值型的新產品，以擴大成熟市場的佔有率");
$question[] = array(
    "擴大與延伸經銷網絡，以求涵蓋最多的消費者",
    "透過原有的經銷管道來銷售產品",
    "採用競爭基礎的訂價法，追求最大市場佔有率",
    "利用產品的加工或改良，獲取較高的利潤");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你覺得產品競爭的基礎是…';
$question = array();
$question[] = array("產品功能的完整性 <ul class=\"unstyled\"><li>   ex.  產品的性能和效率 (Performance)，優於競爭對手</li><li>   
   ex.  產品的可靠性和穩定度，優於競爭對手</li> <li>  ex.  產品的完整性和整合程度，優於競爭對手</li> </ul>",
    "產品的便利性與加值性(convenience &customization) <ul class=\"unstyled\"><li>
  ex.   客戶可用較短的時間和較簡單的方式，快速取得你的產品</li>
  <li>ex.   能夠及時運交產品到目標客戶或經銷商的手中</li>
  <li>ex.   能夠提供比競爭對手更好的客製化產品、服務和解決方案</li></ul>",
    "產品的市佔率與成本(market share & cost) 
  <ul class=\"unstyled\"><li>ex.  產品的銷售價格和製造成本，遠低於競爭對手</li></ul>");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$section = array();
$section['q'] = '你認為目標客戶在選擇產品時所關注的重點…';
$question = array();
$question[] = array(
    "能夠大幅提升日常生活的便利性和趣味性 ",
    "若再不採用產品，將跟不上潮流與面臨不便利的壓力",
    "已被市場上大多數的消費者採用",
    "產品是否最能滿足消費者個人需求的差異化需求產品",
    "具備最完整(或開放式)的產品架構和支援服務",
    "產品的價格(低價)與取得便利性");
$group[] = $question;
$section['section'] = $question;
$section_group[] = $section;

$table['question'] = $section_group;
$step['table16'] = $table;

$step['type'] = 2;
$step['title'] = "掌握關鍵的動態競爭獲利策略";
$step['des'] = "確認已經選定最能甩開對手、脫離而出的競爭型態和競爭策略。";
$data['step5'] = $step;

$localdb = json_decode(json_encode($data), true);
//echo '<pre>';
//var_dump($localdb);
?>