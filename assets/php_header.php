<?php

//2. query ข้อมูลจากตาราง: 
$sqlTrue1_1 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายวัน'";
$sqlTrue1_2 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Customer = 'ลูกค้าใหม่' AND Type_Date = 'รายเดือน'";
$sqlTrue1_3 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายปี'";
$sqlTrue2_1 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายวัน'";
$sqlTrue2_2 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายเดือน'";
$sqlTrue2_3 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายปี'";
$sqlTrue3_1 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายวัน'";
$sqlTrue3_2 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายเดือน'";
$sqlTrue3_3 = "SELECT * FROM detail WHERE Type_Vendor = 'True' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายปี'";

$sqlAis1_1 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายวัน'";
$sqlAis1_2 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Customer = 'ลูกค้าใหม่' AND Type_Date = 'รายเดือน'";
$sqlAis1_3 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายปี'";
$sqlAis2_1 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายวัน'";
$sqlAis2_2 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายเดือน'";
$sqlAis2_3 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายปี'";
$sqlAis3_1 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายวัน'";
$sqlAis3_2 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายเดือน'";
$sqlAis3_3 = "SELECT * FROM detail WHERE Type_Vendor = 'Ais' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายปี'";

$sqlDtac1_1 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายวัน'";
$sqlDtac1_2 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Customer = 'ลูกค้าใหม่' AND Type_Date = 'รายเดือน'";
$sqlDtac1_3 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายปี'";
$sqlDtac2_1 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายวัน'";
$sqlDtac2_2 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายเดือน'";
$sqlDtac2_3 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่อั้น ไม่ลดสปีด' AND Type_Date = 'รายปี'";
$sqlDtac3_1 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายวัน'";
$sqlDtac3_2 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายเดือน'";
$sqlDtac3_3 = "SELECT * FROM detail WHERE Type_Vendor = 'Dtac' AND Type_Speed = 'ไม่ลดสปีด + โทรฟรีในเครือข่าย' AND Type_Date = 'รายปี'";

$sqlvendor = "SELECT * FROM loopvendor"; 

//3.กำหนด Array เป็นตัวแปรสำหรับใช้ในการวนซ้ำออก Content
$Order = array("1_1","1_2","1_3","2_1","2_2","2_3","3_1","3_2","3_3");


// loop สร้างตัวแปร 15 ตัวเพื่อนำไปใช้วน Loop ในส่วนต่างๆของเว็บ
for ($k=1;$k<16;$k++){
  ${"queryvendor".$k} = mysqli_query($conn,$sqlvendor);
}


//4.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 

// loop สร้างตัวแปร query สำหรับแต่ละ Content
while($resultvendor15=mysqli_fetch_array($queryvendor15,MYSQLI_ASSOC)){
    for($i=0;$i<9;$i++){ 
      ${"query".$resultvendor15['Type_Vendor_Name'].$Order[$i]} = mysqli_query($conn,${"sql".$resultvendor15['Type_Vendor_Name'].$Order[$i]});
    }
}
 ?>