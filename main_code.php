<?php
if(!isset($_COOKIE['user_name']))
{
    header('Location: login.php');
}
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
          background: lightslategrey;
          color: white;
          font-size: 25px;
      }
      thead{

      }
      div.mess_div{

      }
      div.main_outer{
          margin: auto;
          width: 70%; 
          margin-top: 100px;
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
      input[type="submit"].preview, input[type="submit"].log_out{
       
        padding: 8px;
        font-size: 18px;
        font-weight: 600;
        border: 2px solid rgba(200,200,200,0.9);
        border-radius: 3px;
        font-family: cursive;
        cursor: pointer;
        color: white;
        background: cadetblue;
        
      }
      input[type="submit"].preview{
           position: fixed;
        top: 5px;
        right: 40px;
      }
      input[type="submit"].log_out{
           position: fixed;
        top: 0px;
        left: 5px;
        z-index: 10;
      }
      input[type="submit"].preview:hover, input[type="submit"].log_out:hover{
        color: rgba(0,0,0,0.8);
        background: white;
      }
      div.heading{
          position: fixed;
          top: 0px;
          left: 0px;
        background: cadetblue;
        margin-bottom: 10px;
        padding: 10px;
        width:100%;
      }
      span.heading{
        color: white;
        margin-left: 5%;
        font-weight: 800;
        font-size: 25px;
        font-family: cursive;
        /* border: 2px white solid; */
        padding: 10px;
      }
      select{
        background: cadetblue;
        font-size: 20px;
        color: white;
        font-weight: 700;
        border: 1px solid white;
        cursor: pointer;
      }
    </style>
    </head>
    <body>
    <form action="log_out.php" method="POST">
    <input type="submit" name="log_out" value="Sign Out" class="log_out">
</form>
    <div class="heading">
    <span class="heading" style="margin-left: 11%">Teacher: <?php echo (isset($_COOKIE['user_name']))? $_COOKIE['user_name'] : 'XYZ'; ?></span>
    <span class="heading">Class: <select name="class_name" id="class">
        <?php
            include('data_connect.php');
            $que = "select * from detail";
            $res = mysqli_query($db, $que);
            if(isset($res))
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo('<option value="'.$row['class'].'">'.$row['class'].'</option>');
                }
            }
        ?>
        
    </select> </span>
    <span class="heading">Subject: 
     <select name="subject" id="subject">
        <?php
            $que = "select * from detail";
            $res = mysqli_query($db, $que);
            if(isset($res))
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo('<option value="'.$row['subject_name'].'">'.$row['subject_name'].'</option>');
                }
            }
            mysqli_close($db);
        ?>
        
    </select> 
    </span>
</div>
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
                
                    <tr style="background: <?php echo ($i % 2 == 0)? 'rgba(200,200,200,0.4)' : 'rgba(150,150,150,0.4);' ?>">
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
            <input type="submit" name="preview" value="Preview" class="preview">
</form>
        
    </body>
</html>

