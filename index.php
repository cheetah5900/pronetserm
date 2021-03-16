<html>
<head>
    <!-- เลขลำดับสุดท้ายของ Collaps คือ 206 สำหรับการหุบของแต่ละรายการ-->
    
    <!--สำหรับปุ่มติดต่อพนักงาน-->
    <script src="assets/vendors.bundle.js" type="text/javascript"></script>
    <script src="assets/contact.js" type="text/javascript "></script>
    <link href="assets/style.bundle.css" rel="stylesheet" type="text/css" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="og:title" property="og:title" content="โปรเสริมเน็ต ทรูมูฟ เอไอเอส และดีแทค ไม่ลดสปีด รายวัน รายเดือน รายปี">
    <meta name="description" content="โปรเสริมเน็ตมีทั้งเครือข่ายทรูมูฟ เอไอเอส และดีแทค ทั้งแบบไม่ลดสปีดและเต็มสปีด แบบรายวัน รายเดือน และรายปี ">
<style>
  </style>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css">
    <title>โปรเสริมเน็ต รายวัน รายเดือน รายปี</title>
    <link rel="stylesheet" href="assets/style_1.1.css">

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '434613424454511');
fbq('track', 'PageView');

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=434613424454511&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  </head>
  <body background="img/bgsim.jpg" style="background-size: 100%;">

<?php
include 'assets/connection.php';
include 'assets/php_header.php';


?>

<!--
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  Section 1 : Head Section
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
<!--
/////////////////////////////////////////////////////////////////
Section 1.0 : Main Tab Logo
/////////////////////////////////////////////////////////////////
-->
 <!-- ไอคอนเครือข่าย -->
 <div class="container-fluid">
        <div class="row paddingdiv" align="center">
        <?php 
              while($resultvendor1=mysqli_fetch_array($queryvendor1,MYSQLI_ASSOC)){
                $vendor1 = $resultvendor1['Type_Vendor_Name'];
                $vendor1_2 = $resultvendor1['Type_Vendor_Color'];
        ?>
            <div class="col-md-4 paddingdiv nav-item-header" >
                 <a href="#" onclick="MainTab<?php echo $vendor1?>()"><img class="nav-link-image" src="img/logo_app_<?php echo $vendor1?>.png"></a>
                 <div class="paddingdiv Line<?php echo $vendor1_2?>" id="LineMainTab<?php echo $vendor1?>"></div>
            </div>
            <?php }?>
        </div>
    </div>
<!--
/////////////////////////////////////////////////////////////////
Section 1.1 : Instruction
/////////////////////////////////////////////////////////////////
-->
<!--แถบยาวเลือกประเภท-->
        <?php 
          while($resultvendor2=mysqli_fetch_array($queryvendor2,MYSQLI_ASSOC)){
            
            $vendor2 = $resultvendor2['Type_Vendor_Name'];
            $vendor2_2 = $resultvendor2['Type_Vendor_Color'];
            if($vendor2=="Ais"){
        ?>
          <div id="Instruc<?php echo $vendor2;?>1">
          </div>
        <?php 
            } // วงเล็บปิด if
        else{?>
          <div class="rowforins <?php echo $vendor2_2;?>Ins whitetext" id="Instruc<?php echo $vendor2;?>1">
          <div class="text-center">1. เลือกประเภท</div>
          </div>
       <?php } // วงเล็บ else
        } //วงเล็บ loop?>

<!--
/////////////////////////////////////////////////////////////////
Section 1.3 : Type Tab
/////////////////////////////////////////////////////////////////
-->

<div class="container-fluid">
    
            <?php 
              while($resultvendor3=mysqli_fetch_array($queryvendor3,MYSQLI_ASSOC)){
                $vendor3 = $resultvendor3['Type_Vendor_Name'];
                $vendor3_2 = $resultvendor3['Type_Vendor_Color'];
                if($vendor3=="Ais"){
            ?>
           <div id="TypeTabAis">
                    <div class="" id="LineTypeTabAis1"></div>
              
                    <div class="Linegreen" id="LineTypeTabAis2"></div>
               
                    <div class="Linegreen" id="LineTypeTabAis3"></div>
               
           </div>
        <?php 
              } //วงเล็บปิด if
            else{ ?>
              <div class="row paddingdiv" align="center" id="TypeTab<?php echo $vendor3?>">
              <div class="col-md-4 paddingdiv nav-item">
                   <a href="#" class="changeto<?php echo $vendor3_2?>" onclick="TypeTab<?php echo $vendor3?>1()">ลูกค้าใหม่<br><font size="4">(ไม่ลดสปีด+โทรฟรี)</font></a>
                   <div class="Line<?php echo $vendor3_2?>" id="LineTypeTab<?php echo $vendor3?>1"></div>
              </div>
              <div class="col-md-4 paddingdiv nav-item">
                   <a href="#" class="changeto<?php echo $vendor3_2?>" onclick="Typetab<?php echo $vendor3?>2()">ลูกค้าเก่า<br><font size="4">(ไม่ลดสปีด)</font></a>
                   <div class="Line<?php echo $vendor3_2?>" id="LineTypeTab<?php echo $vendor3?>2"></div>
              </div>
              <div class="col-md-4 paddingdiv nav-item">
                   <a href="#" class="changeto<?php echo $vendor3_2?>" onclick="Typetab<?php echo $vendor3?>3()">ลูกค้าเก่า<br><font size="4">(ไม่ลดสปีด+โทรฟรี)</font></a>
                   <div class="Line<?php echo $vendor3_2?>" id="LineTypeTab<?php echo $vendor3?>3"></div>
              </div>
          </div>
           <?php }
              } // วงเล็บปิด loop
        
        ?>
</div>

<!--
/////////////////////////////////////////////////////////////////
Section 1.4 : Instruction
/////////////////////////////////////////////////////////////////
-->
<?php 
  while($resultvendor4=mysqli_fetch_array($queryvendor4,MYSQLI_ASSOC)){
    $vendor4 = $resultvendor4['Type_Vendor_Name'];
    $vendor4_2 = $resultvendor4['Type_Vendor_Color'];
    if($vendor4=="Ais"){
?>
      <div class="rowforins greenIns whitetext" id="InstrucAis2">
      <div class="text-center"><font size="40">กรุณาเลือกซิมที่ต้องการ</font></div>
      </div>
<?php 
    } // วงเล็บปิด if
    else{?>
      <div class="rowforins <?php echo $vendor4_2;?>Ins whitetext" id="Instruc<?php echo $vendor4;?>2">
       <div class="text-center">2. เลือกจำนวนวัน
       </div>
      </div>
   <?php }
    } // วงเล็บปิด loop 
?>
<!--
/////////////////////////////////////////////////////////////////
Section 1.5 : Day Tab
/////////////////////////////////////////////////////////////////
-->
<?php 
  while($resultvendor5=mysqli_fetch_array($queryvendor5,MYSQLI_ASSOC)){
?>
<?php 
 $vendor5_2 = $resultvendor5['Type_Vendor_Name'];
 if($vendor5_2=="Ais"){
  ?> 

                    <div class="container-fluid">
                      <div id="DayTabAis1">
                              <div id="LineDayTabAis1_1"></div>
                              <div id="LineDayTabAis1_2"></div>
                              <div id="LineDayTabAis1_3"></div>
                      </div>
                    </div>

                    <div class="container-fluid">
                      <div class="row paddingdiv" align="center" id="DayTabAis2">
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changetogreen" onclick="DayTabAis2_1()"></a>
                              <div class="Linegreen" id="LineDayTabAis2_1"></div>
                          </div>
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changetogreen" onclick="DayTabAis2_2()"></a>
                              <div class="Linegreen" id="LineDayTabAis2_2"></div>
                          </div>
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changetogreen" onclick="DayTabAis2_3()"></a>
                              <div class="Linegreen" id="LineDayTabAis2_3"></div>
                          </div>
                      </div>
                    </div>

                    <div class="container-fluid">
                      <div class="row paddingdiv" align="center" id="DayTabAis3">
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changetogreen" onclick="DayTabAis3_1()">1. วิธีเปิดใช้งานซิม</a>
                              <div class="Linegreen" id="LineDayTabAis3_1"></div>
                          </div>
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changetogreen" onclick="DayTabAis3_2()">2. วิธีสมัครโปร</a>
                              <div class="Linegreen" id="LineDayTabAis3_2"></div>
                          </div>
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changetogreen" onclick="DayTabAis3_3()">3. อื่นๆ</a>
                              <div class="Linegreen" id="LineDayTabAis3_3"></div>
                          </div>
                      </div>
                    </div>
<?php } // วงเล็บ if
else {

  for($k=1;$k<4;$k++){ // Loop for 3 set of each vendor
    $vendor5 = $resultvendor5['Type_Vendor_Name'].$k;
?>
                    <div class="container-fluid">
                      <div class="row paddingdiv" align="center" id="DayTab<?php echo $vendor5?>">
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changeto<?php echo $resultvendor5['Type_Vendor_Color']?>" onclick="DayTab<?php echo $vendor5?>_1()">รายวัน</a>
                              <div class="Line<?php echo $resultvendor5['Type_Vendor_Color']?>" id="LineDayTab<?php echo $vendor5?>_1"></div>
                          </div>
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changeto<?php echo $resultvendor5['Type_Vendor_Color']?>" onclick="DayTab<?php echo $vendor5?>_2()">รายเดือน</a>
                              <div class="Line<?php echo $resultvendor5['Type_Vendor_Color']?>" id="LineDayTab<?php echo $vendor5?>_2"></div>
                          </div>
                          <div class="col-md-4 paddingdiv nav-item">
                              <a href="#" class="changeto<?php echo $resultvendor5['Type_Vendor_Color']?>" onclick="DayTab<?php echo $vendor5?>_3()">รายปี</a>
                              <div class="Line<?php echo $resultvendor5['Type_Vendor_Color']?>" id="LineDayTab<?php echo $vendor5?>_3"></div>
                          </div>
                      </div>
                    </div>
<?php 
} //วงเล็บ else
} // วงเล็บ loop for ?>
<?php } // วงเล็บ loop while?>

<!--
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  Section 2 : Content Section
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->

<?php 
  while($resultvendor6=mysqli_fetch_array($queryvendor6,MYSQLI_ASSOC)){
  $vendor6 = $resultvendor6['Type_Vendor_Name'];
  if($vendor6=="Ais"){ ?>

<div class="container-fluid" id="ContentAis1_1">  
<div class="row whitebox">
              <div class="col-sm-12">
                <div class="text-center"><br>
                  <h2 style="color:#c33b23">ซิมเน็ตรายเดือน</h2>ไม่อั้น ไม่ลดสปีด ไม่จำกัดปริมาณ (TruemoveH)<br>
                  <p><br>ความเร็ว<br><font  color="#c33b23">2 Mbps / 4 Mbps / 10 Mbps</font><br></p>เพิ่มโทรฟรี (+50 บาท)<br><br>
                </div>
              </div>
  </div>   
    <div class="row whitebox">
              <div class="col-sm-12">
                <div class="text-center">
                  <a target="_blank" href="https://www.pronetserm.com/unlimitedsim"><img class="imgsimmodel effectfront" src="pronetimg/True/newsim/20.png"></a>
                </div>
              </div>
                </div>
              </div>
    </div> 

                
               

</div>

<div class="container-fluid" id="ContentAis1_2"></div>
<div class="container-fluid" id="ContentAis1_3"></div>
<div class="container-fluid" id="ContentAis2_1"></div>
<div class="container-fluid" id="ContentAis2_2"></div>
<div class="container-fluid" id="ContentAis2_3"></div>
<div class="container-fluid" id="ContentAis3_1"></div>
<div class="container-fluid" id="ContentAis3_2"></div>
<div class="container-fluid" id="ContentAis3_3"></div>



 <?php } // ปิด if AIS
  else{ ?>

<?php for($i=0;$i<9;$i++){ ?>
    
    <div class="container-fluid" id="Content<?php echo $vendor6.$Order[$i];?>">
        <div class="row promotion-fullwhite shadow<?php echo $resultvendor6['Type_Vendor_Color'];?> whitebox">
            <div class="col-md-12 text-center ">
            <?php if ($resultvendor6['Type_Vendor_Name']=="True"){$name="true";}
                  else{$name="dtac";}
            ?>
                  ดาวน์โหลดแบบตาราง <a target="_blank" href="https://pronetserm.com/table<?php echo $name; ?>" class="btn btn-success">กดที่นี่</a><br><br>

              คัดลอก (Copy) เว็บไซต์นี้ 
                <button class="btn btn-info test" data-clipboard-text="www.pronetserm.com">กดที่นี่</button>
            </div>
        </div>
          <?php
            $queryrow = mysqli_query($conn,${"sql".$vendor6.$Order[$i]});
            $rowcount = mysqli_num_rows($queryrow);
            if($rowcount>0){
              // fetch for each pronet
            while(${"result".$vendor6.$Order[$i]}=mysqli_fetch_array(${"query".$vendor6.$Order[$i]},MYSQLI_ASSOC)){ 
          ?>
            <div class="row promotion-fullwhite shadow<?php echo $resultvendor6['Type_Vendor_Color'];?> whitebox">
              <div class="col-md-4 text-center">
                  <div class="center"><font class="<?php echo $resultvendor6['Type_Vendor_Color'];?>text">
                    <?php echo ${"result".$vendor6.$Order[$i]}['Price']?> บาท  
                    | <?php echo ${"result".$vendor6.$Order[$i]}['Time']?> วัน </font>
                    <br>(รวมภาษี <?php echo ${"result".$vendor6.$Order[$i]}['VAT']?> บาท) 
                  </div>
                  <hr class="<?php echo $resultvendor6['Type_Vendor_Color'];?>line">
              </div>
              <div class="col-md-4 text-center item-center">
                <div class="center">อินเทอร์เน็ต 5G/4G <br><font class="<?php echo $resultvendor6['Type_Vendor_Color'];?>text">เน็ตความเร็ว <?php echo ${'result'.$vendor6.$Order[$i]}['Speed'];?></font><br><?php echo ${"result".$vendor6.$Order[$i]}['Type_Speed']?></div>
                <hr class="<?php echo $resultvendor6['Type_Vendor_Color'];?>line">
              </div>
                
                <div class="col-md-4 item-center">
                  <br><a href="tel:<?php echo ${"result".$vendor6.$Order[$i]}['Number']?>" class="btn btn-md bt<?php echo $resultvendor6['Type_Vendor_Color'];?>bg whitetext">กด <?php echo ${"result".$vendor6.$Order[$i]}['Number']?> <img width="16px" src="img/phone_sign.png"></a>
                  <br><br><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo ${"result".$vendor6.$Order[$i]}['ID']?>" aria-expanded="false" aria-controls="collapseExample<?php echo ${"result".$vendor6.$Order[$i]}['ID']?>">รูปภาพ</button>
                </div>

                <div class="col-md-12 item-center">
                <div class="collapse" id="collapseExample<?php echo ${"result".$vendor6.$Order[$i]}['ID']?>">
                      <div class="card-body">
                        <img src="pronetimg/<?php echo $vendor6;?>/<?php echo ${"result".$vendor6.$Order[$i]}['Folder_Name']?>/<?php echo ${"result".$vendor6.$Order[$i]}['Picture_Name']?>.jpg" class="imgcollapse">
                      </div>
                  </div>
                </div>
            </div>
          <!--สินสุดรายการ-->
          <?php } //วงเล็บของ loop ตาราง 
           } // วงเล็บของ if row count
            else{echo"<center><font size='30' color='red'>ขออภัยครับ ตอนนี้ยังไม่มีโปรส่วนนี้</font></center>";} //วงเล็บของ else?>
          
    </div>
    <?php } //วงเล็บของ for i?>




<?php  } // วงเล็บ else if AIS?>

<?php } //;วงเล็บของ query vendor 6?>

<div class="btn-chat-container">
        <div class="btn btn-chat">
          <div class="close-icon" onclick="contact();"></div>
          <span class="icon"></span>
          <div class="text">ติดต่อพนักงาน</div>
        </div>
        <ul class="social-button">
          <li class="btn btn-messenger-true">
            <a target="_blank" href="https://m.me/PronetsermC">
              <div class="icon"></div>
              <div class="text">ติดต่อพนักงาน</div>
            </a>
          </li>
        </ul>
      </div>

<?php include 'assets/php_footer.php'; ?>
<script>
$('.test').tooltip({
  trigger: 'click',
  placement: 'bottom'
});

function setTooltip(btn, message) {
  btn.tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
}

function hideTooltip(btn) {
  setTimeout(function() {
    btn.tooltip('hide');
  }, 1000);
}

var clipboard = new Clipboard('.test');

clipboard.on('success', function(e) {
    var btn = $(e.trigger);
  setTooltip(btn, 'คัดลอกแล้ว');
  hideTooltip(btn);
});
</script>
</body>
</html>