<?php
    $name_arr = array('RUPAL RATURI', 'SACHIN GUPTA', 'SAGAR SAINI', 'SAJJAN KUMAR SINGH ', 'SALMAN MUSHTAQUE', 'SAMBHAV MISHRA', 'SANCHIT GUPTA', '	SANJEET SINGH', 'SATYAM SHARMA', 'SAURABH KUMAR', 'SAURABH VERMA', 'SHADIL KHAN', 'SHALVIKA SHROTRIYA', 'SHASHANK NATH YADAV', 'SHIVAM KAUL', 'SHIVAM MAHENDRU', 'SHIVAM RAI', 'SHIVAM SHARMA', 'SHIVANG BHATNAGAR', 'SHIVANI CHAUDHARY', 'SHIVANSH SRIVASTAVA', 'SHOURYA GUPTA', 'SHREYA AGARWAL', 'SHREYA SINGH', 'SHRISTY MAHESHWARY', 'SHUBHAM CHAURASIA', 'SHUBHI GARG', 'SONALI RAWAT', 'SONALI SINGH', 'SOUMYA GUPTA', 'SOURAV PRATAP SINGH', 'SRISHTI ROBIN', 'SUDHANSHU SINGH', 'SURAJ GUPTA', 'SURYANSH SINGH', 'SYED ABBAS HAIDER', 'TANUJ KUMAR', 'TUSHAR CHAUDHARY', 'UJJAWAL GOEL', 'UTKARSH LAKHERA', 'VAIBHAV GANGWAR', 'VAIBHAV GUPTA', 'VAIBHAV KAPIL', 'VAIBHAV PATEL', 'VASU AWASTHI', 'VIBHAV KUMAR', '	VIDUSHI SINGH', 'VIKASH KR MISHRA', 'VINEET SINGH', 'VINEET YADAV', 'VIPIN SINGH', 'VISHAL SINGH', 'VRINDA SHARMA', 'YASH PRATAP SINGH', 'SRISHTY PANDEY');
    $roll_arr = array('1514310167', '1514310168', '1514310169', '1514310170', '1514310171', '1514310172', '1514310173', '1514310175', '1514310178', '1514310179', '1514310182', '1514310183', '1514310184', '1514310185', '1514310187', '1514310189', '1514310190', '1514310191', '1514310192', '1514310193', '1514310195', '1514310196', '1514310197', '1514310198', '1514310199', '1514310200', '1514310202', '1514310204', '1514310205', '1514310206', '1514310208', '1514310209', '1514310210', '1514310212', '1514310214', '1514310216', '1514310217', '1514310218', '1514310220', '1514310222', '1514310225', '1514310226', '1514310227', '1514310228', '1514310231', '1514310232', '1514310233', '1514310236', '1514310238', '1514310239', '1514310240', '1514310242', '1514310244', '1514310247', '1514310094');
?>
<html>
    <head>
        <title>Rubic</title>
        <style media="screen" type="text/css">
        *{
            margin: 0px;
            padding: 0px;
        }
      input[type="number"]{
        text-align: center;
        width: 70px;
        border: 1px rgba(200,200,200,0.4) solid;
        padding: 6px;
        font-size: 18px;
      }
      table{
          border: 1px solid black;
          border-collapse: collapse;
      }
      tr{
        border: 0px;
        cursor: pointer;
        margin: 0px;
        
      }
     
      td{
        padding: 8px 10px;
        font-size: 16px;
        width: 70px;
        font-weight: 600;
        margin: 0px;
        border: 0px;
        
      }
      th{
          text-align: left;
          padding: 8px 10px;
          background: cornflowerblue;
          color: white;
          font-size: 25px;
      }
      thead{

      }
      div.mess_div{

      }
      div.main_outer{
          margin: auto;
          width: 66%; 
      }
      td.name{
          width: 100px;
      }
      td.roll_no{
          width: 40px;
          font-size: 18px;

      }
    td.content{
        text-align: center;
    } 
    tr:hover{
          background: white;
      }
    </style>
    </head>
    <body>
    <form action="preview.php" method="POST">
        <div class="main_outer">
            <div class="mess_div">

            </div>
            <table>
                <thead>
                <th>
                    S No.
                </th>
                <th>
                    Roll No.
                </th>
                <th>
                    Name
                </th>
                <th>
                    Content 1:
                </th>
                <th>
                    Content 2:
                </th>
                <th>
                    Content 3:
                </th>
                 <th>
                    Content 4:
                </th>
                 <th>
                    Content 5:
                </th>
                </thead>
                
                    <?php
                    for ($i=0; $i < sizeof($name_arr); $i++) {
                        // echo($name_arr[$i].'----'.$roll_arr[$i].'<br>');
                    


                    ?>
                
                    <tr style="background: <?php echo ($i % 2 == 0)? 'rgba(200,200,200,0.2)' : 'rgba(220,220,220,0.6);' ?>">
                    <td  class="roll_no">
                        <?php echo($i+1); ?>
                    </td>
                    <td class="name">
                        <?php echo($name_arr[$i]); ?>
                    </td>
                    <td>
                        <?php echo($roll_arr[$i]); ?>
                    </td>
                    <td class="content">
                        <input type="number" min="0" max="10" maxlength="2" name="content1_<?php echo($i.'_'.$roll_arr[$i]); ?>" placeholder="00.0">
                    </td>
                    <td class="content">
                        <input type="number" min="0" max="10" maxlength="2" name="content2_<?php echo($i.'_'.$roll_arr[$i]); ?>" placeholder="00.0">
                    </td>
                    <td class="content">
                        <input type="number" min="0" max="10" maxlength="2" name="content3_<?php echo($i.'_'.$roll_arr[$i]); ?>" placeholder="00.0">
                    </td>
                    <td class="content">
                        <input type="number" min="0" max="10" maxlength="2" name="content4_<?php echo($i.'_'.$roll_arr[$i]); ?>" placeholder="00.0">
                    </td>
                    <td class="content">
                        <input type="number" min="0" max="10" maxlength="2" name="content5_<?php echo($i.'_'.$roll_arr[$i]); ?>" placeholder="00.0">
                    </td>
                    </tr>
                    <?php } ?>
                

            </table>
            </div>
            <input type="submit" name="preview" value="Preview">
</form>
        
    </body>
</html>

