<?php

require_once __DIR__ . '/../vend/autoload.php';

// Grab varibles
$num_date_create = (isset($_POST['num_date_create'])) ? $_POST['num_date_create'] : '';
$month_create = (isset($_POST["month_create"])) ? $_POST["month_create"] : '';
$year_create = (isset($_POST["year_create"])) ? $_POST["year_create"] : '';
$num_date_create2 = (isset($_POST["num_date_create2"])) ? $_POST["num_date_create2"] : '';
$road = (isset($_POST['road'])) ? $_POST['road'] : '';
$sub_district = (isset($_POST['sub-district'])) ? $_POST['sub-district'] : '';
$district = (isset($_POST['district'])) ? $_POST['district'] : '';
$province = (isset($_POST['province'])) ? $_POST['province'] : '';
$name_borrow = (isset($_POST['name_borrow'])) ? $_POST['name_borrow'] : '';
$house_id_borrow = (isset($_POST['house_id_borrow'])) ? $_POST['house_id_borrow'] : '';
$name_lend = (isset($_POST['name_lend'])) ? $_POST['name_lend'] : '';
$house_id_lend = (isset($_POST['house_id_lend'])) ? $_POST['house_id_lend'] : '';
$money_num = (isset($_POST['money_num'])) ? $_POST['money_num'] : '';
$money_read = (isset($_POST['money_read'])) ? $_POST['money_read'] : '';
$date_payback = (isset($_POST['date_payback'])) ? $_POST['date_payback'] : '';
$month_payback = (isset($_POST['month_payback'])) ? $_POST['month_payback'] : '';
$year_payback = (isset($_POST['year_payback'])) ? $_POST['year_payback'] : '';
$interest_per = (isset($_POST['interest_per'])) ? $_POST['interest_per'] : '';
$interest_method = (isset($_POST['interest_method'])) ? $_POST['interest_method'] : '';
$Lakprakan = (isset($_POST["Lakprakan"])) ? $_POST["Lakprakan"] : '';
$Subsin_name = (isset($_POST["Subsin_name"])) ? $_POST["Subsin_name"] : '';
$Subsin_unit = (isset($_POST["Subsin_unit"])) ? $_POST["Subsin_unit"] : '';
$Subsin_value = (isset($_POST["Subsin_value"])) ? $_POST["Subsin_value"] : '';
$other_add = (isset($_POST["other_add"])) ? $_POST["other_add"] : '';



// Create new PDF instance


$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
			'B' => 'THSarabunNew Bold.ttf',
			'BI' => 'THSarabunNew BoldItalic.ttf',
        ]
    ],
	'default_font_size' => 16,
    'default_font' => 'sarabun'
]);
/*
$pdf_content = "
<!doctype html>
	<html>
		<head>
			<meta charset=utf-8'/>
		</head>
        <body>
			<center><h1>สัญญากู้ยืมเงิน  (ทั่วไป )</h1></center>
		สัญญาฉบับนี้ทำขึ้นเมื่อวันที่  $num_date_create  เดือน $month_create พ.ศ.  $year_create <br/>
		ที่ $num_date_create2 ถนน $road ตำบล $sub_district อำเภอ $district <br/>
		จังหวัด $province
		ระหว่างข้าพเจ้า $name_borrow อยู่ที่ <br/>
		$house_id_borrow ซึ่งต่อไปนี้ให้เรียกว่า ผู้กู้ ฝ่ายหนึ่ง กับ  <br/>
		ข้าพเจ้า $name_lend อยู่ที่ $house_id_lend <br/>
		ข้อ 1.  ผู้กู้ได้กู้ยืมเงินจากผู้ให้กู้เป็นเงิน $money_num บาท ($money_read) <br/>
		โดยในวันทำสัญญานี้ผู้กู้ได้รับเงินไปเรียบร้อยแล้ว และตกลงว่าจะชำระคืน<br/>
		เงินให้กับผู้ให้กู้ภายในวันที่ $date_payback เดือน $month_payback พ.ศ. $year_payback
		
		</body>
	</html>
";


// Create PDF
ob_start();
echo $pdf_content;
echo $add_rule_group;
//Write PDF
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML($html);
$mpdf->debug = true;
$mpdf->Output();*/
$input_data = $_POST; 
$content = "<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8'/>
			
		</head>
        <body>
			<div style='text-align:center; font-size:35px; font-weight:bold;'>สัญญากู้ยืมเงิน  (ทั่วไป )</div>
		<p style='text-indent: 2.5em;'>สัญญาฉบับนี้ทำขึ้นเมื่อวันที่  <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$num_date_create&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> เดือน <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$month_create &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>พ.ศ.  <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$year_create&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>
		ที่ <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$num_date_create2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> ถนน <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$road &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>ตำบล <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sub_district &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>อำเภอ <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$district &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>
		จังหวัด <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$province&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/></p>
		<p style='text-indent: 2.5em;'>ระหว่างข้าพเจ้า <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name_borrow &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>อยู่ที่ <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$house_id_borrow&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> ซึ่งต่อไปนี้ให้เรียกว่า ผู้กู้ ฝ่ายหนึ่ง กับ
		ข้าพเจ้า <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name_lend &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>อยู่ที่<span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $house_id_lend &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> ซึ่งต่อไปนี้ให้เรียกว่า ผู้ให้กู้ อีกฝ่ายหนึ่ง </p></br>
		<p style='text-indent: 2.5em;'>ทั้งสองฝ่ายตกลงกันทำสัญญาดังต่อไปนี้ </p></br>
		<p style='text-indent: 2.5em;'>ข้อ 1.  ผู้กู้ได้กู้ยืมเงินจากผู้ให้กู้เป็นเงิน <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$money_num &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>บาท (<span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$money_read&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>) <br/>
		โดยในวันทำสัญญานี้ผู้กู้ได้รับเงินไปเรียบร้อยแล้ว และตกลงว่าจะชำระคืนเงินให้กับผู้ให้กู้ภายในวันที่ <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$date_payback&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> เดือน <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$month_payback &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>พ.ศ. <span style='border-bottom:#000 1px dotted;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$year_payback&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
		";
$i = 2;
foreach ($input_data as $key => $value) {
	if ($value!= ''){
		if ($key == "interest_per" or  $key == "Subsin_name" or $key == "Lakprakan" or $key == "other_add"){
			if ($key == "interest_per" ){
				$content .= "<p style='text-indent: 2.5em;'>". "ข้อ  ".  $i .  ".  ผู้กู้ตกลงจะให้ดอกเบี้ยแก่ผู้ให้กู้ในอัตราร้อยละ ".$value."ต่อ";
			}
			elseif ($key == "Subsin_name"){
				$content .= "<p style='text-indent: 2.5em;'>". "ข้อ  ". $i .".  ผู้ให้กู้ยอมให้ผู้ชำระหนี้เงินกู้เป็น ".$value;
			}
			elseif ($key == "Lakprakan"){
				$content .= "<p style='text-indent: 2.5em;'>". "ข้อ  ".  $i .  ".  ในการกู้ยืมตามสัญญานี้ผู้กู้ได้นำหลักทรัพย์เป็นประกันให้ผู้ให้กู้ยึดถือไว้คือ".$value."หลักทรัพย์ดังกล่าวผู้กู้เป็นเจ้าของกรรมสิทธิ์</span>  ไม่มีภาระติดพันใด ๆในวันทำสัญญานี้ผู้ให้กู้ได้ยึดถือหลักประกันที่ผู้ส่งมอบให้แล้ว และผู้ให้กู้จะคืนให้เมื่อผู้กู้ได้ชำระหนี้ครบถ้วนตามสัญญาแล้ว"."</p>";
			}
			elseif ($key == "other_add"){
				$content .= "<p p style='text-indent: 2.5em;'>". "ข้อ  ".  $i . ". หากคู่สัญญาฝ่ายหนึ่งฝ่ายใดผิดสัญญาข้อหนึ่งข้อใด ยินยอมให้คู่สัญญาอีกฝ่ายหนึ่งฟ้องร้องศาลบังคับคดี และยอมชดใช้ค่าใช้จ่ายที่เสียไปในการดำเนินคดีและบังคับคดีได้อีกโสดหนึ่งด้วย</p>";
		
			}
			$i++;
		}
		elseif ($key == "interest_method"){
			if ($value == "month"){
				
				$content .= "เดือน"."</p>";
			}
			elseif ($value == "day"){
				$content .= "วัน"."</p>";
			}
			else{$content ."ปี"."</p>";
			}
		}
	/*elseif ($key == "Subsin_name"){
		$content .=  "ข้อ". $i ."</span> ผู้ให้กู้ยอมให้ผู้ชำระหนี้เงินกู้เป็น ".$value;
	}*/
		elseif ($key == "Subsin_unit"){
			$content .= "โดยกำหนดราคา".$value;
		}
		elseif ($key == "Subsin_value") {
			$content .= "ละ ".$value." บาท"."</p>";
		}
	}
	
}
$content .= "<p style='text-indent: 2.5em;'>เพื่อเป็นหลักฐานคู่สัญญาทั้งสองฝ่ายได้อ่านข้อความของสัญญานี้ดีโดยตลอดแล้วตรงตามความประสงค์ของ คู่สัญญา ทั้งสองฝ่ายจึงได้ลงลายมือไว้เป็นสำคัญต่อหน้าพยาน</p></br>";
$content .= "<p style='text-indent:20em;'>ลงชื่อ………………………………….ผู้กู้</p>";
$content .= "<p style='text-indent:20em;'>ลงชื่อ………………………………….ผู้ให้กู้</p>";
$content .=  "<p style='text-indent:20em;'>ลงชื่อ………………………………….พยาน</p>";
$content .= "<p style='text-indent:20em;'>ลงชื่อ………………………………….พยาน / ผู้พิมพ์</p>";
$content .= "</body>
	</html>
";

// Create PDF
ob_start();
echo $content;
//Write PDF
$html = ob_get_contents();
ob_end_clean();
$mpdf->useFixedNormalLineHeight = false;
$mpdf->useFixedTextBaseline = false;
$mpdf->adjustFontDescLineheight = 1;

$mpdf->WriteHTML($html);
$mpdf->debug = true;
$mpdf->Output();

	
?>
