<!DOCTYPE html>
<html dir="rtl" lang="ar"><head>

<meta http-equiv="Content-Language" content="ar-sa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div style="color:red">
<?php

$link = mysql_connect(
  'localhost',
  'myahia_bibo',
  'ra_sha_11'
);
if (!$link){
	
	die("خطأ فى انشاء اتصال مع قاعدة البيانات " . mysql_error());
}



mysql_query("set character_set_server='utf8'");
mysql_query("set names 'utf8'");

$db_select = mysql_select_db("myahia_code_generator",$link);
if(!$db_select){
	die("Database selection failed: " . mysql_error());
}
?>


<title>Code generator</title></head>

<body> 
	
	<form name = "input" action ="" method="get">
		<select name="market_dropdown">
			<option value="carrefour">كارفور</option>
			<option value="spinneys">سبينس</option>
			<option value="mahmal">المحمل</option>
			<option value="khair-zaman">خير زمان</option>
                        <option value="awlad-ragab">أولاد رجب</option>
                        <option value="charisma-mart">كاريزما مارت</option>
			<option value="metro">مترو</option>
			<option value="c-mart">سي مارت</option>
			<option value="ghanem-sons">أولاد غانم</option>
			<option value="raya-market">الراية ماركت</option>
			<option value="mahallawy">المحلاوى</option>
			<option value="alfa-market">ألفا ماركت</option>
			<option value="mercato">مركاتو</option>
			<option value="makro">ماكرو</option>
			<option value="misr-sudan">مصر والسودان</option>
			<option value="al-hawary">الهوارى</option>
			<option value="el-fergany">الفرجانى</option>
			<option value="abo-zekry">أبو ذكرى</option>
			<option value="masria-market">المصرية ماركت</option>
			<option value="g-s-o">جهاز الخدمات العامة ق.م</option>
			<option value="raneen">رنين</option>
			<option value="dina-farms">مزارع دينا</option>
			<option value="my-way">ماى واى</option>
			<option value="hyper-one">هايبر وان</option>
			<option value="fekra-market">فكرة ماركت</option>
			<option value="seoudi-market">سعودى </option>
			<option value="cairo-stores">أسواق كايرو</option>
			<option value="alhamd-stores">اسواق الحمد</option>
			<option value="carrefour-market">كارفور ماركت</option>
			<option value="galhom">جلهوم </option>
			<option value="dream-market">دريم ماركت</option>
			<option value="laptop-mobile">اللابتوب والموبايل</option>
			<option value="al-abed">العابد</option>
			<option value="al-ra3y">اسواق الراعى</option>
			<option value="hyper-plus">هايبر بلس</option>
			<option value="abo-3ashra">ابو عشرة ماركت</option>
			<option value="fathalla">فتح الله جملة ماركت</option>
			<option value="al-3mamy">اسواق العمامى</option>
			<option value="markteer">ماركتير</option>
			<option value="vodafone">فودافون</option>
			<option value="mobinil">موبينيل</option>
			<option value="etisalat">اتصالات</option>
			<option value="october-center">سنتر أكتوبر</option>	
			<option value="orange-market">اورانج</option>
			<option value="fekra-market">فكرة ماركت</option>
			<option value="zad">زاد</option>
			<option value="habash-market">حبش</option>
			<option value="rezkalla">رزق الله</option>
			<option value="compu-me">كمبيو مى</option>
			<option value="fahem-it">فاهم للكمبيوتر</option>
			<option value="arafa-group">عرفة جروب</option>
			<option value="b-tech">بى تك</option>
			<option value="mega-market">ميجا ماركت</option>
			<option value="super-sat">سوبر سات</option>
			<option value="alhawary-hyper">هايبر الهوارى</option>
			<option value="buy-rite">باى رايت</option>
			<option value="dreem2000">دريم ٢٠٠٠</option>
			<option value="saudi-furniture">الشركة السعودية للمفروشات</option>
			<option value="office express">اوفيس اكسبريس</option>
			<option value="kawasmy-market">القواسمى ماركت</option>
			<option value="koki-shop">كوكى شوب</option>
			<option value="aswaq-masr">اسواق مصر</option>
			<option value="bim">بيم</option>
			<option value="wekalet-elmansoura">وكالة المنصورة</option>
			<option value="mohsen-fayoumi">محسن الفيومى</option>
			<option value="al-morshedy">اسواق المرشدى</option>
			<option value="2b">تو بى</option>
			<option value="hasan-sons">اولاد حسن</option>
			<option value="toshiba-alaraby">توشيبا العربى</option>
			<option value="hyper-alamer">هايبر العامر</option>
			<option value="sharkia-markets">اسواق الشرقية</option>
			<option value="alameer-markets">اسواق الامير</option>
			<option value="zad">$$$</option>








						

			</select>
			
			<select name="from_day" >
				<option value="1">١</option>
				<option value="2">٢</option>
				<option value="3">٣</option>
				<option value="4">٤</option>
				<option value="5">٥</option>
				<option value="6">٦</option>
				<option value="7">٧</option>
				<option value="8">٨</option>
				<option value="9">٩</option>
				<option value="10">١٠</option>
				<option value="11">١١</option>
				<option value="12">١٢</option>
				<option value="13">١٣</option>
				<option value="14">١٤</option>
				<option value="15">١٥</option>
				<option value="16">١٦</option>
				<option value="17">١٧</option>
				<option value="18">١٨</option>
				<option value="19">١٩</option>
				<option value="20">٢٠</option>
				<option value="21">٢١</option>
				<option value="22">٢٢</option>
				<option value="23">٢٣</option>
				<option value="24">٢٤</option>
				<option value="25">٢٥</option>
				<option value="26">٢٦</option>
				<option value="27">٢٧</option>
				<option value="28">٢٨</option>
				<option value="29">٢٩</option>
				<option value="30">٣٠</option>
				<option value="31">٣١</option>
			
				</select>



	
    	<select name="from_month">
    	<option value="jan">يناير</option>
		<option value="feb">فبراير</option>
		<option value="mar">مارس</option>
		<option value="apr">أبريل</option>
		<option value="may">مايو</option>
		<option value="jun">يونيو</option>
		<option value="jul">يوليو</option>
		<option value="aug">اغسطس</option>
		<option value="sep">سبتمبر</option>
		<option value="oct">اكتوبر</option>
		<option value="nov">نوفمبر</option>
		<option value="dec">ديسمبر</option>
		</select>


			<select name="from_year">
				<option value="2013">٢٠١٣</option>
				<option value="2012">٢٠١٢</option>
				<option value="2014">٢٠١٤</option>
				</select>


ـــــــــــ  سارى حتى ـــــــــــــــ   

	<select name="to_day" >
		<option value="1">١</option>
		<option value="2">٢</option>
		<option value="3">٣</option>
		<option value="4">٤</option>
		<option value="5">٥</option>
		<option value="6">٦</option>
		<option value="7">٧</option>
		<option value="8">٨</option>
		<option value="9">٩</option>
		<option value="10">١٠</option>
		<option value="11">١١</option>
		<option value="12">١٢</option>
		<option value="13">١٣</option>
		<option value="14">١٤</option>
		<option value="15">١٥</option>
		<option value="16">١٦</option>
		<option value="17">١٧</option>
		<option value="18">١٨</option>
		<option value="19">١٩</option>
		<option value="20">٢٠</option>
		<option value="21">٢١</option>
		<option value="22">٢٢</option>
		<option value="23">٢٣</option>
		<option value="24">٢٤</option>
		<option value="25">٢٥</option>
		<option value="26">٢٦</option>
		<option value="27">٢٧</option>
		<option value="28">٢٨</option>
		<option value="29">٢٩</option>
		<option value="30">٣٠</option>
		<option value="31">٣١</option>
		</select>

<select name="to_month">
    	<option value="jan">يناير</option>
		<option value="feb">فبراير</option>
		<option value="mar">مارس</option>
		<option value="apr">أبريل</option>
		<option value="may">مايو</option>
		<option value="jun">يونيو</option>
		<option value="jul">يوليو</option>
		<option value="aug">اغسطس</option>
		<option value="sep">سبتمبر</option>
		<option value="oct">اكتوبر</option>
		<option value="nov">نوفمبر</option>
		<option value="dec">ديسمبر</option>
		</select>
	
<select name="to_year">
				<option value="2013">٢٠١٣</option>
				<option value="2012">٢٠١٢</option>
				<option value="2014">٢٠١٤</option>
				</select>
			
				----------عدد الصفحات ------------	

<select name="pages">							
		<option value="1">١</option>
		<option value="2">٢</option>
		<option value="3">٣</option>
		<option value="4">٤</option>
		<option value="5">٥</option>
		<option value="6">٦</option>
		<option value="7">٧</option>
		<option value="8">٨</option>
		<option value="9">٩</option>
		<option value="10">١٠</option>
		<option value="11">١١</option>
		<option value="12">١٢</option>
		<option value="13">١٣</option>
		<option value="14">١٤</option>
		<option value="15">١٥</option>
		<option value="16">١٦</option>
		<option value="17">١٧</option>
		<option value="18">١٨</option>
		<option value="19">١٩</option>
		<option value="20">٢٠</option>
		<option value="21">٢١</option>
		<option value="22">٢٢</option>
		<option value="23">٢٣</option>
		<option value="24">٢٤</option>
		<option value="25">٢٥</option>
		<option value="26">٢٦</option>
		<option value="27">٢٧</option>
		<option value="28">٢٨</option>
		<option value="29">٢٩</option>
		<option value="30">٣٠</option>
		<option value="40">٤٠</option>
		<option value="50">٥٠</option>
		<option value="60">٦٠</option>
		<option value="70">٧٠</option>
		<option value="80">٨٠</option>
		<option value="90">٩٠</option>
		<option value="91">٩١</option>
<option value="92">٩٢</option>
<option value="93">٩٣</option>
<option value="94">٩٤</option>
<option value="95">٩٥</option>
<option value="96">٩٦</option>
<option value="97">٩٧</option>
<option value="98">٩٨</option>
<option value="99">٩٩</option>


		<option value="100">١٠٠</option>
				
			</select>	
			
			
			
			<input value="Submit" type="submit">
			</form>
			<?php

				$market = $_GET['market_dropdown'];
				$from_day = $_GET['from_day'];
				$from_month = $_GET['from_month'];
				$from_year = $_GET['from_year'];
				$to_day = $_GET['to_day'];
				$to_month = $_GET['to_month'];
				$to_year = $_GET['to_year'];
				$pages = $_GET['pages'];

			
			$result_market = mysql_query("SELECT * FROM  markets where en_name = '$market'  " , $link);
			if(!$result_market) 
							  {
								die("Database query failed: " . mysql_error());
							  }
			
			while ($row = mysql_fetch_array($result_market))
															{  
															$arabic_market=$row["ar_name"];$english_market=$row["en_name"];
															}	
	///////////////////////////////////////////////////////////////	
			$result_from_day = mysql_query("SELECT * FROM  day where en_day = '$from_day'  " , $link);
				if(!$result_from_day) 
							 	  {
									die("Database query failed: " . mysql_error());
								  }

			while ($row = mysql_fetch_array($result_from_day)){
					   											$arabic_from_day = $row["ar_day"];	$english_from_day=$row["en_day"];
															}	
		/////////////////////////////////////////////////////////////////

		$result_to_day = mysql_query("SELECT * FROM  day where en_day = '$to_day'  " , $link);
				if(!$result_to_day) 
							 	  {
									die("Database query failed: " . mysql_error());
								  }

			while ($row = mysql_fetch_array($result_to_day)){
					   											$arabic_to_day = $row["ar_day"];	$english_to_day=$row["en_day"];
															}	

		
			$result_from_month = mysql_query("SELECT * FROM  month where en_month = '$from_month'  " , $link);
				if(!$result_from_month) 
							 	  {
									die("Database query failed: " . mysql_error());
								  }

			while ($row = mysql_fetch_array($result_from_month)){
					   											$arabic_from_month = $row["ar_month"];	$english_from_month=$row["en_month"];
															}	
	/////////////////////////////////////////////////////////////////
		
		$result_to_month = mysql_query("SELECT * FROM  month where en_month = '$to_month'  " , $link);
				if(!$result_to_month) 
							 	  {
									die("Database query failed: " . mysql_error());
								  }

			while ($row = mysql_fetch_array($result_to_month)){
					   											$arabic_to_month = $row["ar_month"];	$english_to_month=$row["en_month"];
															}	
												
															
	/////////////////////////////////////////////////////////////////	
			$result_from_year = mysql_query("SELECT * FROM  year where en_year = '$from_year'  " , $link);
				if(!$result_from_month) 
							 	  {
									die("Database query failed: " . mysql_error());
								  }

			while ($row = mysql_fetch_array($result_from_year)){
					   											$arabic_from_year = $row["ar_year"];	$english_from_year=$row["en_year"];
															}	
	/////////////////////////////////////////////////////////////////
		
		$result_to_year = mysql_query("SELECT * FROM  year where en_year = '$to_year'  " , $link);
				if(!$result_to_month) 
							 	  {
									die("Database query failed: " . mysql_error());
								  }

			while ($row = mysql_fetch_array($result_to_year)){
					   											$arabic_to_year = $row["ar_year"];	$english_to_year=$row["en_year"];
															}	
												
															
	/////////////////////////////////////////////////////////////////

															
								echo " النسخة الجديدة: عروض " . $arabic_market. " التى تبدأ من يوم " . $arabic_from_day . " " . $arabic_from_month ." " .$arabic_from_year . " وتنتهى فى  " . $arabic_to_day. " " .$arabic_to_month ." " . $arabic_to_year ."<br />";
																	

			?></div>
			
			<?php 
			$total_rename = 'rename logo.jpg #name#.jpg
rename 1.jpg #name#1.jpg';
			
			
			$total_string = '
<img class="aligncenter size-full " alt="  عروض ' .
 $arabic_market . 
' " src="http://3orodegy.com/wp-content/uploads/#name#/#date#/#name#.jpg"  title=" عروض ' .
 $arabic_market . 
'"/>
<!--more-->
</br>

<img class="aligncenter size-full " alt="  عروض ' . $arabic_market . ' " src="http://3orodegy.com/wp-content/uploads/#name#/#date#/#name#1.jpg" title=" عروض ' .
 $arabic_market . 
' "/>
			</p>';
			
			
$str_rename = '
 rename page_no.jpg #name#page_no.jpg
  ';			
$str = '
<!--nextpage-->صفحة page_no
<img class="aligncenter size-full " alt="  عروض ' . $arabic_market . page_no . ' " src="http://3orodegy.com/wp-content/uploads/#name#/#date#/#name#page_no.jpg" title=" عروض ' .
 $arabic_market . page_no .
'"/>';


			//$first_string= $str;
			//$first_string= str_replace("page","1",$first_string);
						 ?>	
			
			<textarea cols=120 rows=30>
				
		<?php
	
		for ($i=2;$i<$pages+1;$i++) {
		
		$second_string=str_replace("page_no", $i ,$str);
		$second_rename=str_replace("page_no", $i, $str_rename);
		$total_string .= $second_string ;
		$total_rename .=$second_rename ;
			                	}
		$total_string = str_replace("#name#",$english_market,$total_string);
		$total_rename = str_replace("#name#",$english_market,$total_rename);
		$total_string= str_replace("#date#",$english_from_day . $english_from_month ."-". $english_to_day .$english_to_month ."-". $english_to_year ,$total_string);
	    							
                echo htmlspecialchars($total_string);
                 
                
                
$files_rename ='cd c:\pics
'. $total_rename;





             

$file_server = 'open "198.100.149.197"
"3orodegy@3orodegy.info"
bobsled2013
lcd c:\pics
mkdir wp-content/uploads/'. $english_market.'/'.$english_from_day . $english_from_month ."-". $english_to_day .$english_to_month ."-". $english_to_year .
'
cd wp-content/uploads/'. $english_market.'/'.$english_from_day . $english_from_month ."-". $english_to_day .$english_to_month ."-". $english_to_year . '
binary 
mput *.jpg
';
	$file = fopen("ftp-server.txt","w");
	        fwrite($file,$file_server);
		fclose($file);
		
		
		
		//chdir('../uploads');
		//echo getcwd();

	$file = fopen("seo.bat","w");
	        fwrite($file,$files_rename);
		fclose($file);	
		
		?>		
				</textarea>


	


</body>
</html>