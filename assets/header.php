<?php 
    // Absolute Path สำหรับเรียกไฟล์
    $protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
    $domainsl = $_SERVER['HTTP_HOST'] == 'localhost' ? '/' : ''; // ถ้าเป็นโดเมน localhost จะมี Slash (/) อยู่ท้ายสุด
    $folder = $protocol . $_SERVER['HTTP_HOST'] . '/' . basename($_SERVER['REQUEST_URI']) . $domainsl; // สำหรับเรียกไฟล์
    $folderroot = $protocol . $_SERVER['HTTP_HOST'];
?>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="og:title" property="og:title" content="โปรเสริมเน็ต ทรูมูฟ เอไอเอส และดีแทค ไม่ลดสปีด รายวัน รายเดือน รายปี">
    <meta name="description" content="โปรเสริมเน็ตมีทั้งเครือข่ายทรูมูฟ เอไอเอส และดีแทค ทั้งแบบไม่ลดสปีดและเต็มสปีด แบบรายวัน รายเดือน และรายปี ">

    <!--สำหรับปุ่มติดต่อพนักงาน-->
    <script src="<?php echo $folder; ?>/assets/vendors.bundle.js" type="text/javascript"></script>
    <script src="<?php echo $folder; ?>/assets/contact.js" type="text/javascript "></script>
    <link href="<?php echo $folder; ?>/assets/style.bundle.css" rel="stylesheet" type="text/css" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $folder; ?>/assets/bootstrap.min.css">
    <title>โปรเสริมเน็ต รายวัน รายเดือน รายปี</title>
    <link rel="stylesheet" href="<?php echo $folder; ?>/assets/style15.css">
  </head>
