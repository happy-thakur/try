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
    <title>Preview</title>
    <style type="text/css">
    *{
        margin: 0px;
        padding: 0px;
    }
    table{
        border-collapse: collapse;
        margin: auto;
        margin-top: 100px;
    }
    td{
        border: 1px solid rgba(0,00,00,0.7);
        padding: 8px;
        font-weight: 500;
    }
    td.content{
        text-align: center;
    }
    td.s_no, td.roll_no, td.name{
        font-weight: 600;
    }
    thead{
        background: conflowerblue;

    }
    th{
        padding: 10px;
        font-size: 18px;
        font-weight: 600;
        background: lightslategrey;
        border: 1px  solid black;
        color: white;
    }
    button.print_butt, input[type="submit"].log_out{
        
        padding: 8px;
        font-size: 18px;
        font-weight: 600;
        border: 2px solid rgba(200,200,200,0.9);
        border-radius: 3px;
        font-family: cursive;
        cursor: pointer;
        color: white;
        /*background: rgba(0,0,0,0.5);*/
        background: cadetblue;
        
      }
      button.print_butt{
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
      button.print_butt:hover, input[type="submit"].log_out:hover{
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
        margin-left: 8%;
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
      }
    </style>
</head>
<body>
<form action="log_out.php" method="POST">
    <input type="submit" name="log_out" value="Sign Out" class="log_out">
</form>
<div class="heading">
    <span class="heading" style="margin: 13%">Teacher: ABCD</span>
    <span class="heading">Class: XYZ</span>
    <span class="heading">Subject: EFGH</span>
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

    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($_POST['preview'] == 'Preview')
        {
            for($i=0; $i< sizeof($name_arr); $i++)
            {
                ?>
                <tr style="background: <?php echo ($i % 2 == 0)? 'rgba(200,200,200,0.2)' : 'rgba(150,150,150,0.6);' ?>">
                    <td  class="s_no">
                        <?php echo($i+1); ?>
                    </td>
                    <td class="name">
                        <?php echo($name_arr[$i]); ?>
                    </td>
                    <td class="roll_no">
                        <?php echo($roll_arr[$i]); ?>
                    </td>
                    <td  class="content">
                        <?php $temp1 = $_POST['content1_'.$i.'_'.$roll_arr[$i]];
                           echo (isset($temp1))? $temp1 : "00.0";                        
                         ?>
                    </td>
                    <td class="content">
                        <?php $temp2 = $_POST['content2_'.$i.'_'.$roll_arr[$i]];
                            echo('<script>console.log("'.$temp2.'")</script>');
                           echo (isset($temp2))? $temp2 : "00.0";                        
                         ?>
                    </td>
                    <td class="content">
                        <?php $temp3 = $_POST['content3_'.$i.'_'.$roll_arr[$i]];
                           echo (isset($temp3))? $temp3 : "00.0";                        
                         ?>
                    </td>
                    <td class="content">
                        <?php $temp4 = $_POST['content4_'.$i.'_'.$roll_arr[$i]];
                           echo (isset($temp4))? $temp4 : "00.0";                        
                         ?>
                    </td>
                    <td class="content">
                        <?php $temp5 = $_POST['content5_'.$i.'_'.$roll_arr[$i]];
                           echo (isset($temp5))? $temp5 : "00.0";                        
                         ?>
                    </td>
                    </tr>

                <?php
            }

        }
    }
?>
</table>

    <button onclick="print()" class="print_butt">Print</button>
</body>
</html>
