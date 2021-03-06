<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpetual calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/87c0ff4c0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css">

<style>

.box1{
    margin:0;
    /* border:3px dotted #7F989E; */
    border-radius:60px;
    box-shadow: 3px 4px 12px 0px #7A7567;
    background: url('<?php $a=array('https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                        'https://images.unsplash.com/photo-1509697452888-7cdcf2c98813?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1503756234508-e32369269deb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80',
                        'https://images.unsplash.com/photo-1516452391242-15957b3bb26a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=627&q=80',
                        'https://images.unsplash.com/photo-1479064312651-24524fb55c0e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1485841938031-1bf81239b815?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=614&q=80',
                        'https://images.unsplash.com/photo-1472739841375-d0ea9f0cb6a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60  ',
                        'https://images.unsplash.com/photo-1517937151269-ac35e3ca6bd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1604852465282-bfe1e37a858d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=564&q=80',
                        'https://images.unsplash.com/photo-1604633791817-ddf1e6d2ff2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1541749504779-0e668281c3a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1604251036494-6568bd88db5d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1573602929979-69ba82d94dd0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1580133318324-f2f76d987dd8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1590083767559-68115ac987bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1583750956438-0ee5b4c62569?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1603798590145-ba522bde439e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1603548746365-0c7a1583d826?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80',
                        'https://images.unsplash.com/photo-1603268891126-edb67deb74ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=633&q=80',
                        'https://images.unsplash.com/photo-1520853538280-53740d2bd110?ixlib=rb-1.2.1&auto=format&fit=crop&w=633&q=80',
                        'https://images.unsplash.com/photo-1603532654387-fc0a4555e8ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=647&q=80',
                        'https://images.unsplash.com/photo-1602042986607-00418605d4f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1602661162654-75b5fa3b445d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=623&q=80',
                        'https://images.unsplash.com/photo-1555188220-90cc2cad3537?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1600080972464-8e5f35f63d08?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1604539645988-9d87b2c21d53?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1604407232062-5cdaa10a2328?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=627&q=80',
                        'https://images.unsplash.com/photo-1604178450035-38e6a54ffa0c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1603783033071-551d35a9a29f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1602562603289-8b52f21ef638?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1581224463294-908316338239?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                        'https://images.unsplash.com/photo-1604564035384-bd3dfda9d369?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=633&q=80',
                        'https://images.unsplash.com/photo-1594913785111-0c95bf86bd65?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80'                       

                        ); 
                             echo $a[rand(1,33)];?>');
    background-repeat:no-repeat;
    background-size:cover;
    width:49%;
    height:750px;

}
</style>
   
</head>
<body> 
        <!-- <span class="under_word">It's all for myself to live better!</span> -->

    <div class="container">
        <div class="m_1"></div>
        <div class="m_2"></div>
        <div class="hi_1">
        </div>
        <div class="hi_2">
        </div>

        <div class="box1">
        </div>
        <div class="box2">
        <?php
        
        $thismonth=date("m");
        $thismonthday=date("t");

        $year;

        if(isset($_GET['month'])){          //??????GET??????????????????????????????????????????GET???????????????
            $thismonth=$_GET['month'];
        }else{                               //??????GET?????????????????????????????????????????????????????????
            $thismonth=date('m');            //???????????????????????????????????????
        }

        if(isset($_GET['year'])){
            $thisyear=$_GET['year'];
        }else{
            $thisyear=date('Y');
        }

        if($thismonth>=12){                  //???GET??????????????????????????????????????????????????????12(13==>1)
            $nextmonth=1;
            $nextyear=$thisyear+1;
        }else{
            $nextmonth=$thismonth+1;        //???GET?????????????????????????????????????????????12??????????????????????????????
            $nextyear=$thisyear;
        }

        if($thismonth<=1){                   //???GET??????????????????????????????????????????????????????1 (0==>12)
            $prevmonth=12;
            $preyear=$thisyear-1;
        }else{
            $prevmonth=$thismonth-1;        //???GET?????????????????????????????????????????????0??????????????????????????????
            $preyear=$thisyear;
        } 
        
        ?>


        <h1 style="text-align:center" class="my-3">Perpetual calendar</h1>
       
        <span><p class="text-center pyear"><?php
            echo $thisyear;
        ?></span></p>
        <hr>
        <span><p class="text-center pmonth" ><?php
            switch($thismonth){
                case 1;
                echo "January";
                break;  
                case 2;
                echo "February";
                break;  
                case 3;
                echo "March";
                break;  
                case 4;
                echo "April";
                break;  
                case 5;
                echo "May";
                break;  
                case 6;
                echo "June";
                break;  
                case 7;
                echo "July";
                break;  
                case 8;
                echo "August";
                break;  
                case 9;
                echo "September";
                break;  
                case 10;
                echo "October";
                break;  
                case 11;
                echo "November";
                break;  
                case 12;
                echo "December";
                break;  
            }

        ?></span></p>



        <div class="dis01">
        <a href="index.php?year=<?=$preyear;?>&month=<?=$prevmonth;?>"><button class="btn-secondary"><<</button></a>
        <a href="index.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>"><button class="btn-secondary">>></button></a>
        </div>
    <table>
    <tr>
        <td class="weekday">MON</td>
        <td class="weekday">TUE</td>
        <td class="weekday">WED</td>
        <td class="weekday">THU</td>
        <td class="weekday">FRI</td>
        <td class="weekday weekend">SAT</td>
        <td class="weekday weekend">SUN</td>
    </tr>

        <div>
        <?php
            $firstday=strtotime($thisyear."-".$thismonth."-".'1');
            $thismonthday=date("t",$firstday);  
            $startdayweek=date("N",$firstday);   //1???????????????????????? 7?????????????????????
            $openday_1=$thisyear."-".$thismonth."-".$thismonthday;
            $openday=strtotime($thisyear."-".$thismonth."-".$thismonthday);
            $lastdayperweek=date("N",$openday);
            // echo "??????????????????".$lastdayperweek;
            $everyweekq=ceil($thismonthday/7);
            // echo "<br>";
            // echo "??????".$everyweekq."???";

            $tep=0;
    
       

            if($startdayweek+floor($thismonthday/7)<$thismonthday && $lastdayperweek>0 )  //???????????????+???*7<????????????????????????
            {$everyweekq=$everyweekq+1;}

            for($i=0;$i<$everyweekq;$i++){                      
                for($j=0;$j<7;$j++){                         //??????????????????
                    
                    echo "<td>"; //????????????
                    if((($i*7)+($j+1)-($startdayweek-1))>$thismonthday){  //$i???????????????????????? $j????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????if?????????????????????????????????????????????else
                    break;
                    }

                    if($i==0 && $j<($startdayweek-1)){                   //??????????????????????????????????????????????????????
                        echo "&nbsp;";  
                    }else{                                               //?????????????????????????????????????????????????????????
                        $tep=($i*7)+($j+1)-($startdayweek-1);
                        $startdayweek_2=date("N",strtotime($thisyear."-".$thismonth."-".$tep));
                            if(($startdayweek_2%7)==6    || ($startdayweek_2%7)==0){
                                echo "<p class='forpd' style='color:red'>".$tep."</p>";
                            }else{                        
                                echo "<p class='forpd'>".$tep."</p>";
                            // echo $tep;
                        }
                        
                        }
                        echo "</td>";
                        if($tep==$thismonthday){
                        break;
                        }
               }

               if($tep==$thismonthday){
               break;
               }else {
                echo "</tr>";
               }
            }


                if($tep>=$thismonthday && $lastdayperweek<7){              //???????????????:????????????????????????????????????????????????????????????(????????????)
                    for($l=1;$l<(7-$lastdayperweek+1);$l++)  
                {
                    echo "<td>"; 
                    echo "&nbsp;";  
                    echo "</td>";
                }
                }
        ?>

    </table>
    <div class="everyholiday ">
            <?php
            switch($thismonth){
                case 1;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."01-01"."???&loz;???"."New Year's Day</p></p>";
                break;  
                case 2;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."02-28"."???&loz;???"."Peace Memorial Day</p>";
                break;      
                case 3;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."03-08"."???&loz;???"."Women's Day</p>";
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."03-09"."???&loz;???"."Arbor Day</p>";
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."03-29"."???&loz;???"."Youth Day</p>";
                break;  
                case 4;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."04-04"."???&loz;???"."Children's Day</p>";
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."04-05"."???&loz;???"."Tomb Sweeping Day</p>";
                break;  
                case 5;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."05-01"."???&loz;???"."Labor Day</p>";
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."05-04"."???&loz;???"."Literary Day</p>";
                $motherday=(14-$startdayweek)%7+15;
                if($startdayweek=1){
                    $motherday=$motherday-7;
                }
                $motherday_2=date("d",strtotime($thisyear."-05-".$motherday));
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."05-".$motherday_2."???&loz;???"."Mother's Day</p>";
                break;  
                case 6;
                break;  
                case 7;
                break;  
                case 8;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."08-08"."???&loz;???"."Father's Day</p>";
                break;  
                case 9;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."09-03"."???&loz;???"."Armed Forces Day</p>";
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."09-28"."???&loz;???"."Teachers' Day</p>";
                break;  
                case 10;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."10-25"."???&loz;???"."Taiwan Retrocession Day</p>";
                break;  
                case 11;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."11-12"."???&loz;???"."Sun Yat-sen's Birthday</p>";
                break;  
                case 12;
                echo "<p class='btn btn-light text-left '>".$thisyear."-"."12-25"."???&loz;???"."Christmas/Constitution Day</p>";
            
                break;  
            }

        ?>
            
            </div>  
    </div>
        <div class="smoke"><img src="images/smoke_3.png"></div>
        <!-- <div class="smoke_2"><img src="images/smoke_3.png"></div> -->
        <div class="coffee_cup"><img src="http://pngimg.com/uploads/cup/cup_PNG1964.png">

         </div>

        
    </div>


</body>
</html>