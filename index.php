<?php 
include('Connection.php') ;
$query = "SELECT count(*) FROM image";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
$imagecount  = $row[0];

$query = "SELECT count(*) FROM email";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
$emailcount  = $row[0];

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Kỷ niệm Thủ Đức</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="teaser/css/style.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="css/fileuploader.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery.effects.core.min.js"></script>
<script type="text/javascript" src="js/jquery.effects.highlight.min.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27252561-1']);
  _gaq.push(['_setDomainName', 'kyniemthuduc.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="container">
    	<div id="leftCol">
        	<img src="teaser/images/title.png" width="525" height="71" style="margin-top:10px"/>
            <p style="font-style:italic; font-size:1.313em; margin:7px 0">Chúng ta đã từng là học sinh trường cấp III Thủ Đức...</p>
            <p style="width:410px">
            	Website KyNiemThuDuc.com được thành lập và phát triển với hi vọng có thể giúp mọi người tìm lại những hình ảnh trong quãng thời gian kỷ niệm tại ngôi trường cấp III Thủ Đức.
            </p>
            <p style="width:410px; margin:15px 0 18px 0">
            	Hãy cùng nhau chia sẻ những hình ảnh mà bạn đang có để mọi người một lần nữa thấy lại những kỷ niệm một thời tuổi trẻ của chúng ta.
            </p>
            <div id="emailHolder">
            	<p>Thông báo cho tôi qua email ngay khi website chính thức bắt đầu:</p>
                <div style="margin-bottom:5px"><input id="emailInput" class="roundCorner noRoundRight" type="text" placeholder="Email"><button id="emailSubmit" class="roundCorner noRoundLeft" style="margin-left:-1px">THÔNG BÁO</button></div>
                <p>Đã có <b><span id="usercount"><?php echo $emailcount?></span> người</b> đăng ký nhận thông báo qua email.</p>
                <div style="height:16px; width:100%">
                	<p id="emailError" class="error">Email bạn nhập không hợp lệ, vui lòng kiểm tra lại.</p>
                    <p style="margin-top:-26px" id="emailSuccess" class="success">Hẹn gặp lại bạn khi website chính thức hoạt động.</p>
                </div>
            </div>
            <div id="uploadHolder">
            	<p>Chia sẻ những hình ảnh đầu tiên của bạn cùng website:</p>
                <div id="dropZone" class="roundCorner" style="float:left">
                    <p>KÉO VÀ THẢ HÌNH VÀO ĐÂY</p>
                    <p>ĐỂ TẢI HÌNH CỦA BẠN LÊN WEBSITE</p>
                    <div id="uploader"></div>
                </div>
               	<div class="fb-like-box" data-href="http://www.facebook.com/kyniemthuduc" data-width="292" data-show-faces="true" data-stream="false" data-header="true"></div>
                <p style="clear:both">Có <b> <span id="imagecount"><b><?php echo $imagecount?></b></span> </b>hình ảnh đã được chia sẻ.</p>
            </div>
        </div>
    </div>
    <footer style="" class="opacity70">
    	<img src="images/logo.png" width="103" height="47" style="float:left"/>
        <img src="teaser/images/logo.png" width="119" height="38" style="float:right; margin:12px 30px"/>
    </footer>
    
    <script type="text/javascript" src="js/fileuploader.js"></script>
    <script type="text/javascript" src="js/teaser.js"></script>
    <script type="text/javascript">
    // in your app create uploader as soon as the DOM is ready
	// don't wait for the window to load  
	window.onload = createUploader;  
    </script>
</body>
</html>
