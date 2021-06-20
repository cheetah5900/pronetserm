<html>
<?php 
  include './assets/header.php';
  include './assets/connection.php';
  include './assets/php_header.php';
?>

<!--
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  Section 1 : Head Section
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
<body background="<?php echo $folder; ?>img/bgsim.jpg" style="background-size: 100%;">
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
                 <a href="#" onclick="MainTab<?php echo $vendor1?>()"><img class="nav-link-image" src="<?php echo $folder; ?>img/logo_app_<?php echo $vendor1?>.png"></a>
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

<div class="rowforins blacktext" style="background-color: #ffcccc;padding: 10px 10px;">
<a target="_blank" href="<?php echo $folder;?>sim/simlnw"><div class="text-center"><img class="nav-sim-image" src="img/logo_app_Sim.png"> ซิมเทพธอร์ จ่ายครั้งเดียว ใช้ยาวทั้งปี กดเลย !</div></a>
</div>
<!--แถบยาวเลือกประเภท-->
        <?php 
          while($resultvendor2=mysqli_fetch_array($queryvendor2,MYSQLI_ASSOC)){
            
            $vendor2 = $resultvendor2['Type_Vendor_Name'];
            $vendor2_2 = $resultvendor2['Type_Vendor_Color'];
        ?>
        <?php 
        ?>
          <div class="rowforins <?php echo $vendor2_2;?>Ins whitetexthead" id="Instruc<?php echo $vendor2;?>1">
          <div class="text-center">1. เลือกประเภท</div>
          </div>
       <?php 
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
            ?>
              <div class="row paddingdiv" align="center" id="TypeTab<?php echo $vendor3?>">
              <div class="col-md-4 paddingdiv nav-item">
                   <a href="#" class="changeto<?php echo $vendor3_2?>" onclick="TypeTab<?php echo $vendor3?>1()"><span class="bold">ลูกค้าใหม่</span><br><font class="remarktype">(ไม่ลดสปีด+โทรฟรี)</font></a>
                   <div class="Line<?php echo $vendor3_2?>" id="LineTypeTab<?php echo $vendor3?>1"></div>
              </div>
              <div class="col-md-4 paddingdiv nav-item">
                   <a href="#" class="changeto<?php echo $vendor3_2?>" onclick="Typetab<?php echo $vendor3?>2()"><span class="bold">ลูกค้าเก่า</span><br><font class="remarktype">(ไม่ลดสปีด)</font></a>
                   <div class="Line<?php echo $vendor3_2?>" id="LineTypeTab<?php echo $vendor3?>2"></div>
              </div>
              <div class="col-md-4 paddingdiv nav-item">
                   <a href="#" class="changeto<?php echo $vendor3_2?>" onclick="Typetab<?php echo $vendor3?>3()"><span class="bold">ลูกค้าเก่า</span><br><font class="remarktype">(ไม่ลดสปีด+โทรฟรี)</font></a>
                   <div class="Line<?php echo $vendor3_2?>" id="LineTypeTab<?php echo $vendor3?>3"></div>
              </div>
          </div>
           <?php 
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
    
?>
<?php 
    ?>
      <div class="rowforins <?php echo $vendor4_2;?>Ins whitetexthead" id="Instruc<?php echo $vendor4;?>2">
       <div class="text-center">2. เลือกจำนวนวัน
       </div>
      </div>
   <?php 
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
  ?> 

<?php

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
?>

<?php for($i=0;$i<9;$i++){ ?>
    
    <div class="container-fluid" id="Content<?php echo $vendor6.$Order[$i];?>">
        <div class="row promotion-fullwhite shadow<?php echo $resultvendor6['Type_Vendor_Color'];?> whitebox">
            <div class="col-md-12 text-center ">
            <?php if ($resultvendor6['Type_Vendor_Name']=="True"){$name="true";}
                  elseif ($resultvendor6['Type_Vendor_Name']=="Ais"){$name="ais";}
                  elseif ($resultvendor6['Type_Vendor_Name']=="Dtac"){$name="dtac";}
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
              <div class="col-md-2 text-center">
                  <div class="center">
                    <?php echo ${"result".$vendor6.$Order[$i]}['VAT']?> บาท 
                  </div>
                  
              </div>
              <div class="col-md-1 text-center">
                  <div class="center">
                    <?php echo ${"result".$vendor6.$Order[$i]}['Time']?> วัน</div>
              </div>
              <div class="col-md-2 text-center">
                  <div class="center">
                    <font class="<?php echo $resultvendor6['Type_Vendor_Color'];?>text"> <?php echo ${"result".$vendor6.$Order[$i]}['Speed']?> </font>
                  </div>
                  
              </div>
              <div class="col-lg-2 text-center">
                    <?php echo ${"result".$vendor6.$Order[$i]}['Type_Speed']?>
              </div>
                <div class="col-md-3 text-center">
                  <a href="tel:<?php echo ${"result".$vendor6.$Order[$i]}['Number']?>" class="btn btn-md bt<?php echo $resultvendor6['Type_Vendor_Color'];?>bg whitetext"><?php echo ${"result".$vendor6.$Order[$i]}['Number']?></a>
                </div>
                <div class="col-sm-2 text-center">
                  &nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo ${"result".$vendor6.$Order[$i]}['ID']?>" aria-expanded="false" aria-controls="collapseExample<?php echo ${"result".$vendor6.$Order[$i]}['ID']?>">รูปภาพ</button>
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


<?php } //;วงเล็บของ query vendor 6?>

<?php include 'assets/contact_button.php';?>
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