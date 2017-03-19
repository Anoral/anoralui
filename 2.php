<?php
	@$num = $_POST['num'];
	if(!empty($num )){
	$text = "https://scop.tadano.com/tadano/catalog/productDetail.jsf?prg_id=62b1517270f44b09b9643872275566eb&user:cSLnok:QPARAM:clicked=false&currentTab=tpS&itemKey=0000000$num&maxPrice=0&itemId=$num&wec-locale=en_US&returnToCheckout=false&wec-appid=TDN_ZG21_EN&page=2D97A94898684929AB2D8E3761938A70&stsortby=CDD&user:cSLok:QPARAM:clicked=false&minPrice=0";
		header("location:$text");
	}else{
		echo "<script type='text/javascript'>alert('请输入正确的数值！');location.href='index.html';</script>";
	}
?>