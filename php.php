<!DOCTYPE html>
<html>
<head>
	<title>حسین حیدری | توسعه دهنده وب</title>
	<meta name="description" content="Front-End Web Development">
    <meta name="keywords" content="HTML, CSS, JavaScript, Vue , Vuex, Front-End, Web Developer">
    <meta name="author" content="Hossein Heydari">
    <meta name="copyright"content="hossein-heydari">
    <meta name="url" content="https://www.hossein-heydari.ir">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/images/icon.png" />
</head>
<body>

	<?php 


$name = $_GET['name'];
$family = $_GET['family'];
$email = $_GET['email'];
$text = $_GET['text'];

$to = "admin@hossein-heydari.ir";

$msg = $name."\n".$family."\n".$text;

$header = "From: ".$email;


mail($to, "از سایت شخصی" , $msg , $header);
mail($email, "از سایت شخصی حسین حیدری" , "با سلام خدمت شما دوست عزیز   \n \nسپاسگزاریم بابت ارسال ایمیل ، در اسرع وقت بررسی میشود.  \n \n حسین حیدری" , "From: admin@hossein-heydari.ir");


 ?>

</body>

<!-- <script type="text/javascript">
	


window.onload = function(){

 if (confirm("با موفقیت ارسال شد.")) {
   window.location = "https://hossein-heydari.ir/";
}
else {
    window.location = "https://hossein-heydari.ir/";
}
}

</script> -->
</html>