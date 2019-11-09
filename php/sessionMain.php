<?php
include "sql-conn.php";     //引入SQL操作文件
// $carNumber = $_POST["carNum"];


//查询还有多少个车位
$sql1 = "select count(num) from car where num = 1;";
$result1 = $mysqli->query($sql1);
$row1 = mysqli_fetch_assoc($result1);
$carPort = $row1["count(num)"];

// 查询已经停了多少辆车
$sql2 = "select count(num) from car where num = 0;";
$result2 = $mysqli->query($sql2);
$row2 = mysqli_fetch_assoc($result2);
$carNum = $row2["count(num)"];

//查询已经出库的车辆总数
$sql3 = "select outputCar from car where id = 1;";
$result3 = $mysqli->query($sql3);
$row3 = mysqli_fetch_assoc($result3);
$outputCar = $row3["outputCar"];



// 查询车位的显示颜色
$sql4 = "select * from car;";
$result4 = $mysqli->query($sql4);

// 将查询到的遍历出来，方便下面获取结果集
while ($row4 = $result4->fetch_all(MYSQLI_ASSOC)) {
    //获取当前颜色
    $color1 = $row4["0"]["color"];
    $color2 = $row4["1"]["color"];
    $color3 = $row4["2"]["color"];
    $color4 = $row4["3"]["color"];
    $color5 = $row4["4"]["color"];
    $color6 = $row4["5"]["color"];
    $color7 = $row4["6"]["color"];
    $color8 = $row4["7"]["color"];
    $color9 = $row4["8"]["color"];
    $color10 = $row4["9"]["color"];
    $color11 = $row4["10"]["color"];
    $color12 = $row4["11"]["color"];
    $color13 = $row4["12"]["color"];
    $color14 = $row4["13"]["color"];
    $color15 = $row4["14"]["color"];
    $color16 = $row4["15"]["color"];
    $color17 = $row4["16"]["color"];
    $color18 = $row4["17"]["color"];
    $color19 = $row4["18"]["color"];
    $color20 = $row4["19"]["color"];
    $color21 = $row4["20"]["color"];
    $color22 = $row4["21"]["color"];
    $color23 = $row4["22"]["color"];
    $color24 = $row4["23"]["color"];
    $color25 = $row4["24"]["color"];
    $color26 = $row4["25"]["color"];
    $color27 = $row4["26"]["color"];
    $color28 = $row4["27"]["color"];
    $color29 = $row4["28"]["color"];
    $color30 = $row4["29"]["color"];
    $color31 = $row4["30"]["color"];
    $color32 = $row4["31"]["color"];
    $color33 = $row4["32"]["color"];
    $color34 = $row4["33"]["color"];
    $color35 = $row4["34"]["color"];
    $color36 = $row4["35"]["color"];
    $color37 = $row4["36"]["color"];
    $color38 = $row4["37"]["color"];
    $color39 = $row4["38"]["color"];
    $color40 = $row4["39"]["color"];
}



//停车按键数组
$sub = [
    'submit1', 'submit2', 'submit3', 'submit4', 'submit5',
    'submit6', 'submit7', 'submit8', 'submit9', 'submit10',
    'submit11', 'submit12', 'submit13', 'submit14', 'submit15',
    'submit16', 'submit17', 'submit18', 'submit19', 'submit20',
    'submit21', 'submit22', 'submit23', 'submit24', 'submit25',
    'submit26', 'submit27', 'submit28', 'submit29', 'submit30',
    'submit31', 'submit32', 'submit33', 'submit34', 'submit35',
    'submit36', 'submit37', 'submit38', 'submit39', 'submit40',
];

//出库按键数组
$sub1 = [
    'sub1', 'sub2', 'sub3', 'sub4', 'sub5',
    'sub6', 'sub7', 'sub8', 'sub9', 'sub10',
    'sub11', 'sub12', 'sub13', 'sub14', 'sub15',
    'sub16', 'sub17', 'sub18', 'sub19', 'sub20',
    'sub21', 'sub22', 'sub23', 'sub24', 'sub25',
    'sub26', 'sub27', 'sub28', 'sub29', 'sub30',
    'sub31', 'sub32', 'sub33', 'sub34', 'sub35',
    'sub36', 'sub37', 'sub38', 'sub39', 'sub40',
];



//当点击哪个停车按钮，就去获取哪个的结果集
for ($i = 0; $i < 40; $i++) {
    if (isset($_POST[$sub[$i]])) {

        //改变当前入库车辆的状态，0表示入库
        $sql5 = "update car set num = 0,color = '#ff5000' where id = ($i + 1)";
        $result5 = $mysqli->query($sql5); 

        //查询入库车辆的时间戳
        $sql8 = "select * from car where id = ($i + 1);";
        $result8 = $mysqli->query($sql8);
        $row8 = mysqli_fetch_assoc($result8);
        $inTime =  $row8["time"];

        //将当前入库车辆的时间戳保存到相应的入库时间字段
        $sql9 = "update car set inTime = '$inTime' where id = ($i + 1)";
        $mysqli->query($sql9);


        //JS弹窗，显示当前车位的开始停车时间
        echo '<script>
            alert("'.($i+1).'号车位开始停车时间为：'.$inTime.'");
            location.href = "main.php"; 
        </script>';           
    }
}



//当点击哪个出库按钮，就去获取哪个的结果集
for ($j = 0; $j < 40; $j++) {
    if (isset($_POST[$sub1[$j]])) {

        //改变当前出库的状态，1表示出库
        $sql6 = "update car set num = 1,color = '#6abb30' where id = ($j + 1)";
        $result6 = $mysqli->query($sql6);

        //当点击出库时，出库数量就加一
        $sql7 = "update car set outputCar = ($outputCar + 1) where id = 1;";
        $result7 = $mysqli->query($sql7);

        //查询出库车辆的时间戳
        $sql10 = "select * from car where id = ($j + 1);";
        $result10 = $mysqli->query($sql10);
        $row10 = mysqli_fetch_assoc($result10);
        $outTime =  $row10["time"];
        $inTime1 = $row10["inTime"];

        //将当前出库车辆的时间戳保存到相应的出库时间字段
        $sql11 = "update car set outTime = '$outTime' where id = ($j + 1)";
        $mysqli->query($sql11);
        
        //计算出库与入库的时间差
        $sql12 = "select timestampdiff(minute,'$inTime1','$outTime')";
        $result12 = $mysqli->query($sql12);
        $row12 = mysqli_fetch_assoc($result12);
        $timeDiff = $row12["timestampdiff(minute,'$inTime1','$outTime')"];


        //  echo "<script>
        //         window.onload = function() {
        //             var close = document.getElementById('close');
        //             var close_box = document.getElementById('close-box');
        //             var black_box = document.getElementById('black-box');

        //             close_box.style.display = 'block';
        //             black_box.style.display = 'block';

        //             close.onclick = function() {
        //                 close_box.style.display = 'none';
        //                 black_box.style.display = 'none';
        //             }
        //         }
        //     </script>";


        //JS弹窗，显示当前车位的结束停车信息
        echo '<script>
            alert("'.($j+1).'号车位开始停车时间为：'.$inTime1.'\n'.($j+1).'号车位结束停车时间为：'.$outTime.'\n停车时长为：'.$timeDiff.'分钟");
            location.href = "main.php"; 
        </script>';   

    }
}

