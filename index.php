<!doctype html>
<html lang="th">
<head>
<title>Contrak : สัญญากู้ยืมเงิน</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
<style>
	body{
		font-family: 'Sarabun', sans-serif;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
　　TogetherJSConfig_hubBase = "https://togetherjs-hub.glitch.me/";//这个是你本地服务器地址
</script>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<script>var TogetherJSConfig_cloneClicks = true;</script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<!--กู้ยืม pop-up -->
<body>
<!-- Sidebar -->
	<div class="wrapper">
    <div class="sidebar">
        <h2>เงื่อนไขเพิ่มเติม</h2>
        <ul>
            <li><a href="#" onclick = "interest_add_fn()"><i class="fas fa-plus-square"></i></i>ดอกเบี้ย</a></li>
            <li><a href="#" onclick="accept_other_add_fn()"><i class="fas fa-plus-square"></i>การยอมรับเอาสิ่งของหรือทรัพย์สินอื่นแทนเงิน</a></li>
            <li><a href="#" onclick="Luksub_add_fn()"><i class="fas fa-plus-square"></i>นำหลักทรัพย์ไว้เป็นประกันชำระหนี้</a></li>
            <li><a href="#" onclick="other_add_fn()"><i class="fas fa-plus-square"></i>เงื่อนไขตกลงอื่น ๆ</a></li>
			<li><a href="#" onclick="delete_last_append()"><i class="fas fa-minus-square"></i>ลบเงื่อนไขที่เพิ่มล่าสุด</a></li>
			<li><a href="#" onclick="reset()"><i class="fas fa-undo"></i>รีเซ็ทแบบฟอร์ม</a></li>
		</div>
    </div>
        <!-- /#sidebar-wrapper -->

<div id="popover-content-1" class="hide">
 		การกู้ยืมเงินเกินกว่า 2000 บาทขึ้นไป ต้องมีหลักฐานการกู้ยืมเงินเพื่อใช้ในการฟ้องร้องบังคับคดี
 		</div>
		<center><h1><span data-toggle='popover-1' class="underline-on-hover">สัญญากู้ยืมเงิน</span>(ทั่วไป )</h1></center>
	<form action="makepdf.php" method="post">
		<ul class="form-style-1">
		<p class = "content">
		สัญญาฉบับนี้ทำขึ้นเมื่อวันที่<select name = num_date_create id = num_date_create>
	
<script>$(document).ready(function() {
  $("[data-toggle=popover-1]").popover({
    trigger: 'click',
    placement: "bottom",
    html: true,
    content: function() {
      var anchorText = $(this).text();
      $('#popover-content-1').find('input[id=txtContent]').attr('value', anchorText);
      return $('#popover-content-1').html();
    }
  });
});</script>
<!--กู้ยืม pop-up end-->
	
	
<?php
    for ($i=1; $i<=31; $i++)
    {
        ?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>เดือน<select name="month_create" id="month_create">
                        <option value="มกราคม">มกราคม</option>
                        <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                        <option value="มีนาคม">มีนาคม</option>
                        <option value="เมษายน">เมษายน</option>
                        <option value="พฤษภาคม">พฤษภาคม</option>
                        <option value="มิถุนายน">มิถุนายน</option>
                        <option value="กรกฎาคม">กรกฎาคม</option>
                        <option value="สิงหาคม">สิงหาคม</option>
                        <option value="กันยายน">กันยายน</option>
                        <option value="ตุลาคม">ตุลาคม</option>
                        <option value="พฤศจิกายน">พฤศจิกายน</option>
                        <option value="ธันวาคม">ธันวาคม</option>
                    </select>พ.ศ<input type="number" name = "year_create" id = "year_create"></input></p>
	  		<p class="content">ณ วันที่<select name = "num_date_create2" id="num_date_create2">
<?php
    for ($i=1; $i<=31; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>ถนน<input type="text" name = "road" id="road">ตำบล<input type="text" name = "sub-district" id = "sub-district"></p>
	
	<p class="content">อำเภอ<input type="text" name = "district" id = "district">จังหวัด<input type="text" name = "province" id = "province"></p>
	
	<p class="content">ระหว่างข้าพเจ้า<input type="text" name = "name_borrow" id = "name_borrow"></p>
	
	<p class="content">อยู่บ้านเลขที่<input type="text" name = "house_id_borrow" id="house_id_borrow"></p>
	
	<p class="content">ซึ่งต่อไปในสัญญานี้เรียกว่า  
	<span data-toggle="popover-2" class="underline-on-hover">ผู้กู้</span> ฝ่ายหนึ่ง</p>
	
	<p class="content">กับข้าพเจ้า<input type="text" name = "name_lend" id="name_lend"></p>
	
	<p class="content">อยู่บ้านเลขที่<input type="text" name = "house_id_lend" id="house_id_lend"></p>
	
	<p class="content">ซึ่งต่อไปในสัญญานี้เรียกว่า ผู้ให้กู้ อีกฝ่ายหนึ่ง</p>
	
	
	
	<!--ผู้กู้ pop-up-->
	<div id="popover-content-2" class="hide">
 ผู้กู้มีฐานะเป็นลูกหนี้ตามสัญญากู้ยืม ต้องคืนสิ่งที่ยืมภายในวันและเวลา
ที่กำหนด รวมถึงในสถานที่/ช่องทางชำระหนี้ตามที่ตกลงกันตามสัญญา
 	</div>

	
	<script>$(document).ready(function() {
  $("[data-toggle=popover-2]").popover({
    trigger: 'click',
    placement: "bottom",
    html: true,
    content: function() {
      var anchorText = $(this).text();
      $('#popover-content-2').find('input[id=txtContent]').attr('value', anchorText);
      return $('#popover-content-2').html();
    }
  });
});</script>
	<!--ผู้กู้ pop-up end-->
	
	<p class="content">ทั้งสองฝ่ายตกลงกันทำสัญญาดังต่อไปนี้<p>
	<p class="content">ข้อ 1.  ผู้กู้ได้กู้ยืมเงินจากผู้ให้กู้เป็นเงิน<input type="number" name = "money_num" id ="money_num" required>บาท*(<input type="text" name = "money_read" id = "money_read">)</p>
	
	
	<!--โดยในวันทำสัญญานี้ผู้ให้กู้ได้ส่งมอบเงินที่กู้ยืมเรียบร้อยแล้ว pop-up-->
	<div id="popover-content-3" class="hide">
สัญญากู้ยืมเงินเป็นสัญญายืมใช้สิ้นเปลือง บริบูรณ์โดยการส่งมอบเงิน (มาตรา 650 วรรคสอง)
 	</div>
    <p class="content"><span data-toggle="popover-3" class="underline-on-hover">โดยในวันทำสัญญานี้ผู้ให้กู้ได้ส่งมอบเงินที่กู้ยืมเรียบร้อยแล้ว</span>
		
	<script>$(document).ready(function() {
  $("[data-toggle=popover-3]").popover({
    trigger: 'click',
    placement: "bottom",
    html: true,
    content: function() {
      var anchorText = $(this).text();
      $('#popover-content-3').find('input[id=txtContent]').attr('value', anchorText);
      return $('#popover-content-3').html();
    }
  });
});</script>
	
	<!--โดยในวันทำสัญญานี้ผู้ให้กู้ได้ส่งมอบเงินที่กู้ยืมเรียบร้อยแล้ว pop-up end-->
	
	
	<!--ตกลงว่าจะชำระคืนเงินให้กับผู้ให้กู้ภายในวันที่ pop-up-->
	<div id="popover-content-4" class="hide">
ในการใช้เงิน ผู้กู้จะต้องจัดให้มีหลักฐานเป็นหนังสือลงลายมือชื่อผู้ให้ยืม หรือมีการเวนคืนเอกสารอันเป็นหลักฐานแห่งการกู้ยืม หรือได้แทงเพิกถอนเอกสารอันเป็นหลักฐานแห่งการกู้ยืม ผู้กู้จึงจะสามารถนำสืบถึงการใช้เงินได้
 	</div></p>
	
	
	<p class="content"><span data-toggle="popover-4" class="underline-on-hover">และตกลงว่าจะชำระคืนเงินให้กับผู้ให้กู้ภายในวันที่</input><select name = "date_payback"id = "date_payback">
<?php
    for ($i=1; $i<=31; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?></select> เดือน<select name="month_payback" id="month_payback">
                        <option value="มกราคม">มกราคม</option>
                        <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                        <option value="มีนาคม">มีนาคม</option>
                        <option value="เมษายน">เมษายน</option>
                        <option value="พฤษภาคม">พฤษภาคม</option>
                        <option value="มิถุนายน">มิถุนายน</option>
                        <option value="กรกฎาคม">กรกฎาคม</option>
                        <option value="สิงหาคม">สิงหาคม</option>
                        <option value="กันยายน">กันยายน</option>
                        <option value="ตุลาคม">ตุลาคม</option>
                        <option value="พฤศจิกายน">พฤศจิกายน</option>
                        <option value="ธันวาคม">ธันวาคม</option>
                    </select>พ.ศ<input type="number" name = "year_payback" id = "year_payback" maxlength="4"></span> 
	</p>
	
	<script>$(document).ready(function() {
  $("[data-toggle=popover-4]").popover({
    trigger: 'click',
    placement: "bottom",
    html: true,
    content: function() {
      var anchorText = $(this).text();
      $('#popover-content-4').find('input[id=txtContent]').attr('value', anchorText);
      return $('#popover-content-4').html();
    }
  });
});</script>
	<!--ตกลงว่าจะชำระคืนเงินให้กับผู้ให้กู้ภายในวันที่ pop-up end-->

<!--add section-->
<div id = 'add-rule-group' class = 'add-rule-parent' name = 'add-rule-group' ></div>
<!--add section end-->

<!--pop content section-->
<div id = 'content-pop-group' class = 'hide'></div>
<!--pop content section end-->

<p>เพื่อเป็นหลักฐานคู่สัญญาทั้งสองฝ่ายได้อ่านข้อความของสัญญานี้ดีโดยตลอดแล้วตรงตามความประสงค์ของคู่สัญญา  ทั้งสองฝ่ายจึงได้ลงลายมือไว้เป็นสำคัญต่อหน้าพยาน</p>



</br>
</br>
<div id ="signature">
	
<!--ลงชื่อผู้กู้ pop-up-->
<div id="popover-content-5" class="hide">
 อาจใช้วิธีการพิมพ์ลายนิ้วมือ แกงได ตราประทับแทนการลงลายมือชื่อ แต่ต้องมีพยานรับรองสองคน
 	</div>
	
<span data-toggle="popover-5" class="underline-on-hover">
ลงชื่อ………………………………….ผู้กู้*</span><br/>
	
<script>$(document).ready(function() {
  $("[data-toggle=popover-5]").popover({
    trigger: 'click',
    placement: "bottom",
    html: true,
    content: function() {
      var anchorText = $(this).text();
      $('#popover-content-5').find('input[id=txtContent]').attr('value', anchorText);
      return $('#popover-content-5').html();
    }
  });
});</script>
<!--ลงชื่อผู้กู้ pop-up end-->

ลงชื่อ………………………………….ผู้ให้กู้<br/>

<!--พยาน pop-up-->
<div id="popover-content-6" class="hide">
 พยาน มีเพื่อรับรองว่าการทำสัญญาฉบับนี้ได้ถูกทำขึ้นจริงโดยชอบด้วยกฎหมายและเกิดขึ้นจากความประสงค์ของทั้งผู้กู้และผู้ให้กู้
 </div>
	
<span data-toggle="popover-6" class="underline-on-hover">
ลงชื่อ………………………………….พยาน
</span><br/>
	<script>$(document).ready(function() {$("[data-toggle=popover-6]").popover({trigger: "click",placement: "bottom",html: true,content: function() {var anchorText = $(this).text();$("#popover-content-6").find("input[id=txtContent]").attr("value",anchorText);return $("#popover-content-6").html();}});});</script>
<!--พยาน pop-up end-->

ลงชื่อ………………………………….พยาน / ผู้พิมพ์<br/>

</div>
<button type="submit" class="btn btn-secondary btn-sm">Create PDF</button>
	</ul>
</form>

	

<!-- Pop-Over + additional text-->
<script>var i = 1;</script>
<script>function interest_add_fn(){i++; $('#add-rule-group').append('<div id="add-rule-7-non-pop" class ="add-rule"><p class = "content" > ข้อ '+ i +'.  ผู้กู้ตกลงจะให้ดอกเบี้ยแก่ผู้ให้กู้ในอัตราร้อยละ <input name="interest_per" id="interest_per" type="number" step="any" min="0" max="15"> ต่อ' +
'<select size="1" id ="select-interest-type" name="selct-interest-type" class="select-interest"><option hidden selected>กรุณาเลือก...</option><option value="day" data-max="0.041">วัน</option><option value="week" data-max="0.288">สัปดาห์</option><option value="month" data-max="1.25">เดือน</option><option value="year" data-max="15">ปี</option></select>  และตกลงจะชำระดอกเบี้ยให้ทุก ๆ <select name="interest_method" id="interest_method"><option value="month">เดือน</option><option value="year">ปี</option></p></div>')
Interest_limit();							   
};</script>

<!--Interest limit change-->
<script> function Interest_limit(){$('html').append("<" +
"script"+">"+"$('#select-interest-type').change(function(){$('input[id=interest_per]').attr('max',$(this).find(':selected').data('max'));});" + "</" + "script>")};</script>
<!--Interest limit change eENDS-->


<!--accept other pop-over script + content -->
<script>function accept_other_add_fn(){i++; $('#content-pop-group').append('<div id="popover-content-7" class="hide">คิดราคาตามราคาท้องตลาดแห่งสิ่งของ หรือทรัพย์สินนั้นในเวลาและ ณ สถานที่ส่งมอบ (มาตรา 656)</div>');$('#add-rule-group').append('<div id="add-rule-7" class ="add-rule"><p class = "content"><span data-toggle="popover-7" class="underline-on-hover"> ข้อ '+ i +'.</span> ผู้ให้กู้ยอมให้ผู้ชำระหนี้เงินกู้เป็น<input type="text" name = "Subsin_name" id = "Subsin_name" placeholder = "ทรัพย์สินอย่างอื่น">โดยกำหนดราคา<input type="text" name = "Subsin_unit" id = "Subsin_unit" placeholder = "หน่วยของทรัพย์สินอย่างอื่น">ละ<input type="number" name = "Subsin_value" id = "Subsin_value">บาท</p></div>');
setTimeout(TogetherJS.reinitialize(), 5000);
Pop_over_add_7();
};
</script>

<script> function Pop_over_add_7(){$('html').append('<' +
'script'+ '>'+ '$(document).ready(function() {$("[data-toggle=popover-7]").popover({trigger: "click",placement: "bottom",html: true,content: function() {var anchorText = $(this).text();$("#popover-content-7").find("input[id=txtContent]").attr("value", anchorText);return $("#popover-content-7").html(); }});});' + '</' + 'script>')};
</script>
<!-- accept other pop-over Ends -->


<!--Luksub add pop-over script + content -->
<script>function Luksub_add_fn(){i++; $('#content-pop-group').append( '<div id="popover-content-8" class="hide">ผู้กู้ยังเป็นเจ้าของสิ่งที่ให้เป็นหลักประกันนั้นอยู่ แต่ในกรณีนี้เป็นเพียงแค่การยื่นหลักประกันแก่ผู้ให้กู้ (เจ้าหนี้) ว่าผู้กู้จะนำเงินมาชำระหนี้ ถ้าผู้กู้ชำระหนี้ครบถ้วนสมบูรณ์ ผู้ให้กู้ย่อมไม่มีสิทธิใด ๆ ที่จะยึดหน่วงหลักประกันกับตนไว้ต่อได้อีกแต่ถ้าหากผู้กู้ไม่ทำการชำระหนี้ให้ครบถ้วน เมื่อผู้ให้กู้นำเรื่องขึ้นฟ้องเป็นคดีสู่ศาล สิ่งใดๆ ที่ได้ให้ไว้เป็นหลักประกันนี้จะเป็นสิ่งแรกที่ถูกบังคับชำระหนี้เพื่อใช้คืนแก่ผู้ให้กู้</div>');$('#add-rule-group').append('<div id="add-rule-8" class ="add-rule"><p class="content">ข้อ '+ i +'.  ในการกู้ยืมตามสัญญานี้ผู้กู้ได้นำหลักทรัพย์เป็นประกันให้ผู้ให้กู้ยึดถือไว้คือ</br><textarea name ="Lakprakan" id = "Lakprakan" rows="5" cols="70"></textarea></br> <span data-toggle="popover-8" class="underline-on-hover">หลักทรัพย์ดังกล่าวผู้กู้เป็นเจ้าของกรรมสิทธิ์</span>  ไม่มีภาระติดพันใด ๆในวันทำสัญญานี้ผู้ให้กู้ได้ยึดถือหลักประกันที่ผู้ส่งมอบให้แล้ว และผู้ให้กู้จะคืนให้เมื่อผู้กู้ได้ชำระหนี้ครบถ้วนตามสัญญาแล้ว</p></div>');
setTimeout(TogetherJS.reinitialize(), 5000);
Pop_over_add_8();
};</script>

<script> function Pop_over_add_8(){$('html').append('<' +
'script'+ '>'+ '$(document).ready(function() {$("[data-toggle=popover-8]").popover({trigger: "click",placement: "bottom",html: true,content: function() {var anchorText = $(this).text();return $("#popover-content-8").html(); }});});' + '</' + 'script>')};
</script>
<!--Luksub add pop-over Ends -->

<!--other add pop-over script + content -->
<script>function other_add_fn(){i++; $('#content-pop-group').append( '<div id="popover-content-9" class="hide">ไม่ว่าจะมีข้อกำหนดนี้ในสัญญาหรือไม่ คู่สัญญาทั้งสองฝ่ายก็ยังมีสิทธินำเรื่องขึ้นฟ้องต่อศาล เพียงแต่ต้องมีหลักฐานการกู้ยืมเงิน และ/หรือ หลักฐานการชำระเงินเป็นลายลักษณ์อักษรอย่างชัดแจ้งประกอบด้วย</div>');$('#add-rule-group').append('<div id="add-rule-9" class ="add-rule"><p class="content"><span data-toggle="popover-9" class="underline-on-hover">ข้อ '+i+'.</span>  <input type="hidden" name="other_add" value="other_add" />หากคู่สัญญาฝ่ายหนึ่งฝ่ายใดผิดสัญญาข้อหนึ่งข้อใด ยินยอมให้คู่สัญญาอีกฝ่ายหนึ่งฟ้องร้องศาลบังคับคดี และยอมชดใช้ค่าใช้จ่ายที่เสียไปในการดำเนินคดีและบังคับคดีได้อีกโสดหนึ่งด้วย</p></div>');
setTimeout(TogetherJS.reinitialize(), 5000);
Pop_over_add_9();
};</script>

<script> function Pop_over_add_9(){$('html').append('<' +
'script'+ '>'+ '$(document).ready(function() {$("[data-toggle=popover-9]").popover({trigger: "click",placement: "bottom",html: true,content: function() {var anchorText = $(this).text();$("#popover-content-9").find("input[id=txtContent]").attr("value", anchorText);return $("#popover-content-9").html(); }});});' + '</' + 'script>')};
</script>
<!--other add pop-over ENDS -->

<!--Reset -->
<script> function reset(){ i = 1; $("#add-rule-group").empty();};</script>
<!--Reset ENDS-->

<!--delete last append-->
<script> function delete_last_append(){ if(i > 1){i--}; $(".add-rule").last().remove();};</script>
<!--delete last append ENDS-->

<!-- No right click-->
<!--<script>document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);</script>
<!--No right click ENDS-->
<center><button onclick="TogetherJS(this); return false;">Start TogetherJS</button></center>
</html>
