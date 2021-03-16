<script>


/* 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Section 7 : Create Function collapse all
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
*/
        /*หุบ เส้นใต้เครือข่ายทั้งหมดทุกเครือข่าย*/
        function LineMainTab(){
          <?php 
            while($resultvendor7=mysqli_fetch_array($queryvendor7,MYSQLI_ASSOC)){
              $vendor7 = $resultvendor7['Type_Vendor_Name'];
          ?>
          LineMainTab<?php echo $vendor7?>.classList.add('d-none')
          <?php } ?>
        }
        /*หุบ ชื่อเครือข่ายทั้งหมด*/
        function Instruction(){
          <?php 
            while($resultvendor8=mysqli_fetch_array($queryvendor8,MYSQLI_ASSOC)){
              $vendor8 = $resultvendor8['Type_Vendor_Name'];
          ?>
          Instruc<?php echo $vendor8?>1.classList.add('d-none')
          Instruc<?php echo $vendor8?>2.classList.add('d-none')
          <?php } ?>
        }

        /*หุบ ประเภทลูกค้าทั้งหมดทุกเครือข่าย*/
        function TypeTab(){
          <?php 
            while($resultvendor9=mysqli_fetch_array($queryvendor9,MYSQLI_ASSOC)){
              $vendor9 = $resultvendor9['Type_Vendor_Name'];
          ?>
          TypeTab<?php echo $vendor9?>.classList.add('d-none')
          <?php } ?>
        }
        /*หุบ เส้นใต้ประเภทลูกค้าทั้งหมดทุกเครือข่าย*/
        function LineTypeTab(){
          <?php 
            while($resultvendor10=mysqli_fetch_array($queryvendor10,MYSQLI_ASSOC)){
              $vendor10 = $resultvendor10['Type_Vendor_Name'];
          ?>
          LineTypeTab<?php echo $vendor10?>1.classList.add('d-none')
          LineTypeTab<?php echo $vendor10?>2.classList.add('d-none')
          LineTypeTab<?php echo $vendor10?>3.classList.add('d-none')
          <?php } ?>
        }
        /*หุบ แบ่งตามวันที่ทั้งหมดทุกเครือข่าย*/
        function DayTab(){
          <?php 
            while($resultvendor11=mysqli_fetch_array($queryvendor11,MYSQLI_ASSOC)){
            $vendor11 = $resultvendor11['Type_Vendor_Name'];
          ?>
          DayTab<?php echo $vendor11?>1.classList.add('d-none')
          DayTab<?php echo $vendor11?>2.classList.add('d-none')
          DayTab<?php echo $vendor11?>3.classList.add('d-none')
          <?php } ?>
        }
        /*หุบ เส้นใต้โปาตามเวลา ลูกค้าทั้งหมดทุกเครือข่าย*/
        function LineDayTab(){
          <?php 
            while($resultvendor12=mysqli_fetch_array($queryvendor12,MYSQLI_ASSOC)){
            $vendor12 = $resultvendor12['Type_Vendor_Name'];
          ?>
          LineDayTab<?php echo $vendor12?>1_1.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>1_2.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>1_3.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>2_1.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>2_2.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>2_3.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>3_1.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>3_2.classList.add('d-none')
          LineDayTab<?php echo $vendor12?>3_3.classList.add('d-none')
          <?php } ?>

        }
        /*หุบ รายการโปรเสริมลูกค้าทั้งหมด ทุกเครือข่าย*/
        function Content(){
          <?php 
            while($resultvendor13=mysqli_fetch_array($queryvendor13,MYSQLI_ASSOC)){
            $vendor13 = $resultvendor13['Type_Vendor_Name'];
          ?>
          Content<?php echo $vendor13;?>1_1.classList.add('d-none')
          Content<?php echo $vendor13;?>1_2.classList.add('d-none')
          Content<?php echo $vendor13;?>1_3.classList.add('d-none')
          Content<?php echo $vendor13;?>2_1.classList.add('d-none')
          Content<?php echo $vendor13;?>2_2.classList.add('d-none')
          Content<?php echo $vendor13;?>2_3.classList.add('d-none')
          Content<?php echo $vendor13;?>3_1.classList.add('d-none')
          Content<?php echo $vendor13;?>3_2.classList.add('d-none')
          Content<?php echo $vendor13;?>3_3.classList.add('d-none')
          <?php } ?>

          
        }

/* 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Section 8 : Show only tab which we want
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
*/

    <?php 
      while($resultvendor14=mysqli_fetch_array($queryvendor14,MYSQLI_ASSOC)){
      $vendor14 = $resultvendor14['Type_Vendor_Name'];
    ?>
        /*ทำงานเมื่อกดโลโก้ ทรูมูฟเอช*/
        function MainTab<?php echo $vendor14 ?>() {
          /*ขีดเส้นใต้ โลโก้เครือข่ายทรูมูฟเอช หุบอีก 2*/
          LineMainTab();
          LineMainTab<?php echo $vendor14;?>.classList.remove('d-none')
          /*แสดงชื่อเครือข่ายทรูมูฟเอชในแท็บรายชื่อ และหุบอีก 2*/
          Instruction();
          Instruc<?php echo $vendor14;?>1.classList.remove('d-none')
          Instruc<?php echo $vendor14;?>2.classList.remove('d-none')
          /*โชว์ประเภทลูกค้าของเครือข่ายทรูมูฟเอช หุบอีก 2*/
          TypeTab();
          TypeTab<?php echo $vendor14;?>.classList.remove('d-none')
          /*เวลากดโลโก้ให้มันแสดงรายการของประเภทลูกค้าอันแรกเสมอ*/
          TypeTab<?php echo $vendor14;?>1();
        }

        <?php 
          for($k=1;$k<4;$k++){
        ?>
        /*ทำงานเมื่อกดประเภท ลูกค้าใหม่*/
        function TypeTab<?php echo $vendor14;?>1() {
            /*เส้นใต้ลูกค้าใหม่*/
            LineTypeTab();
            LineTypeTab<?php echo $vendor14;?>1.classList.remove('d-none')
            /*โชว์วันของโปรของเครือข่ายทรูมูฟเอช หุบอีก 2*/
            DayTab();
            DayTab<?php echo $vendor14;?>1.classList.remove('d-none')   
          
            DayTab<?php echo $vendor14;?>1_1();
        }
        

        <?php 
          for($i=0;$i<3;$i++){
        ?>
                /*ทำงานเมื่อกด ลูกค้าเก่า ไม่ลดสปีด > รายวัน*/
                function DayTab<?php echo $vendor14.$Order[$i];?>(){
                  /*เส้นใต้รายวัน*/
                  LineDayTab();
                  LineDayTab<?php echo $vendor14.$Order[$i];?>.classList.remove('d-none')
                    /*รายการโปรเสริมทรูมูฟเอช ลูกค้าเก่า ไม่ลดสปีด รายวัน*/
                    Content();
                    Content<?php echo $vendor14.$Order[$i];?>.classList.remove('d-none')
                }
        <?php } //ปิด loop ของ for Daytab?>


        /*ทำงานเมื่อกดประเภท ลูกค้าเก่า ไม่ลดสปีด + โทรฟรี*/
        function Typetab<?php echo $vendor14;?>2() {
            /*เส้นใต้ลูกค้าเก่า ไม่ลดสปีด + โทรฟรี*/
            LineTypeTab();
            LineTypeTab<?php echo $vendor14;?>2.classList.remove('d-none')
            /*โชว์วันของโปรของเครือข่ายทรูมูฟเอช หุบอีก 2*/
            DayTab();
            DayTab<?php echo $vendor14;?>2.classList.remove('d-none')   
          
            DayTab<?php echo $vendor14;?>2_1();
        }
        
        <?php 
          for($i=3;$i<6;$i++){
        ?>
                /*ทำงานเมื่อกด ลูกค้าเก่า ไม่ลดสปีด > รายวัน*/
                function DayTab<?php echo $vendor14.$Order[$i];?>(){
                  /*เส้นใต้รายวัน*/
                  LineDayTab();
                  LineDayTab<?php echo $vendor14.$Order[$i];?>.classList.remove('d-none')
                    /*รายการโปรเสริมทรูมูฟเอช ลูกค้าเก่า ไม่ลดสปีด รายวัน*/
                    Content();
                    Content<?php echo $vendor14.$Order[$i];?>.classList.remove('d-none')
                  
                }
        <?php } //ปิด loop ของ for Daytab?>

        /*ทำงานเมื่อกดประเภท ลูกค้าเก่า ไม่ลดสปีด*/
        function Typetab<?php echo $vendor14;?>3() {
            /*เส้นใต้ลูกค้าเก่า ไม่ลดสปีด*/
            LineTypeTab();
            LineTypeTab<?php echo $vendor14;?>3.classList.remove('d-none')
            /*โชว์วันของโปรของเครือข่ายทรูมูฟเอช หุบอีก 2*/
            DayTab();
            DayTab<?php echo $vendor14;?>3.classList.remove('d-none')   
          
            DayTab<?php echo $vendor14;?>3_1();
        }
        
        <?php 
          for($i=6;$i<9;$i++){
        ?>
                /*ทำงานเมื่อกด ลูกค้าเก่า ไม่ลดสปีด > รายวัน*/
                function DayTab<?php echo $vendor14.$Order[$i];?>(){
                  /*เส้นใต้รายวัน*/
                  LineDayTab();
                  LineDayTab<?php echo $vendor14.$Order[$i];?>.classList.remove('d-none')
                    /*รายการโปรเสริมทรูมูฟเอช ลูกค้าเก่า ไม่ลดสปีด รายวัน*/
                    Content();
                    Content<?php echo $vendor14.$Order[$i];?>.classList.remove('d-none')
                  
                }
        <?php } //ปิด loop ของ for Daytab?>
        <?php } //ปิด loop ของ for Typetab?>
                <?php } // ปิด loop ของพวกหุบทั้งหมด ?>
        MainTabTrue()
    </script>