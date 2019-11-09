<?php
    include "sessionLogin.php";
    include "sessionMain.php";
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>智能停车系统</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1453515_7x8hzr9m74.css">
</head>

<body>
    <header>
        <!-- 头部导航条 -->
        <div class="head-nav">
            <div class="logo"></div>
            <span class="title">智能停车系统</span>
            <div class="user">
                <ul>
                    <li>
                        <a href="#">
                            <span>
                                管理员：<?php echo $_SESSION["username"];
                                    ?>
                            </span>
                            <span id="shu">|</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="logout">
                            退出系统
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- 主体部分 -->
    <div class="main-box">
        <div class="main">
            <!-- 上方盒子 -->
            <div class="top-container">
                <ul>
                    <li class="list1">
                        <h3 class="carport">剩余停车位</h3>
                        <div>
                            <span><?php echo $carPort; ?> / 40</span>
                            <i class="iconfont icon-tingchewei"></i>
                        </div>
                    </li>
                    <li class="list2">
                        <h3 class="carport">已停车辆总数</h3>
                        <div>
                            <span><?php echo $carNum; ?></span>
                            <i class="iconfont icon-cheliang"></i>
                        </div>
                    </li>
                    <li class="list3">
                        <h3 class="carport">已出库车辆总数</h3>
                        <div>
                            <span><?php echo $outputCar; ?></span>
                            <i class="iconfont icon-icon_function_chuku"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 下方盒子 -->
            <div class="bottom-container">

                <!-- 车牌显示弹窗 -->
                <!-- <div class="alert-box" id="close-box">
                    <span id="close">×</span>
 
                </div> -->

                <form action="main.php" name="form2" method="POST">
                    <ul id="btn-par">
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color1; ?>"></i>
                            <span style="color:<?php echo $color1; ?>">1</span>
                            <input type="submit" value="停车" name="submit1" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub1" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color2; ?>"></i>
                            <span style="color:<?php echo $color2; ?>">2</span>
                            <input type="submit" value="停车" name="submit2" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub2" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color3; ?>"></i>
                            <span style="color:<?php echo $color3; ?>">3</span>
                            <input type="submit" value="停车" name="submit3" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub3" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color4; ?>"></i>
                            <span style="color:<?php echo $color4; ?>">4</span>
                            <input type="submit" value="停车" name="submit4" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub4" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color5; ?>"></i>
                            <span style="color:<?php echo $color5; ?>">5</span>
                            <input type="submit" value="停车" name="submit5" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub5" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color6; ?>"></i>
                            <span style="color:<?php echo $color6; ?>">6</span>
                            <input type="submit" value="停车" name="submit6" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub6" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color7; ?>"></i>
                            <span style="color:<?php echo $color7; ?>">7</span>
                            <input type="submit" value="停车" name="submit7" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub7" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color8; ?>"></i>
                            <span style="color:<?php echo $color8; ?>">8</span>
                            <input type="submit" value="停车" name="submit8" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub8" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color9; ?>"></i>
                            <span style="color:<?php echo $color9; ?>">9</span>
                            <input type="submit" value="停车" name="submit9" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub9" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color10; ?>"></i>
                            <span style="color:<?php echo $color10; ?>">10</span>
                            <input type="submit" value="停车" name="submit10" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub10" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color11; ?>"></i>
                            <span style="color:<?php echo $color11; ?>">11</span>
                            <input type="submit" value="停车" name="submit11" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub11" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color12; ?>"></i>
                            <span style="color:<?php echo $color12; ?>">12</span>
                            <input type="submit" value="停车" name="submit12" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub12" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color13; ?>"></i>
                            <span style="color:<?php echo $color13; ?>">13</span>
                            <input type="submit" value="停车" name="submit13" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub13" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color14; ?>"></i>
                            <span style="color:<?php echo $color14; ?>">14</span>
                            <input type="submit" value="停车" name="submit14" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub14" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color15; ?>"></i>
                            <span style="color:<?php echo $color15; ?>">15</span>
                            <input type="submit" value="停车" name="submit15" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub15" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color16; ?>"></i>
                            <span style="color:<?php echo $color16; ?>">16</span>
                            <input type="submit" value="停车" name="submit16" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub16" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color17; ?>"></i>
                            <span style="color:<?php echo $color17; ?>">17</span>
                            <input type="submit" value="停车" name="submit17" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub17" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color18; ?>"></i>
                            <span style="color:<?php echo $color18; ?>">18</span>
                            <input type="submit" value="停车" name="submit18" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub18" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color19; ?>"></i>
                            <span style="color:<?php echo $color19; ?>">19</span>
                            <input type="submit" value="停车" name="submit19" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub19" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color20; ?>"></i>
                            <span style="color:<?php echo $color20; ?>">20</span>
                            <input type="submit" value="停车" name="submit20" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub20" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color21; ?>"></i>
                            <span style="color:<?php echo $color21; ?>">21</span>
                            <input type="submit" value="停车" name="submit21" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub21" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color22; ?>"></i>
                            <span style="color:<?php echo $color22; ?>">22</span>
                            <input type="submit" value="停车" name="submit22" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub22" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color23; ?>"></i>
                            <span style="color:<?php echo $color23; ?>">23</span>
                            <input type="submit" value="停车" name="submit23" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub23" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color24; ?>"></i>
                            <span style="color:<?php echo $color24; ?>">24</span>
                            <input type="submit" value="停车" name="submit24" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub24" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color25; ?>"></i>
                            <span style="color:<?php echo $color25; ?>">25</span>
                            <input type="submit" value="停车" name="submit25" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub25" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color26; ?>"></i>
                            <span style="color:<?php echo $color26; ?>">26</span>
                            <input type="submit" value="停车" name="submit26" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub26" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color27; ?>"></i>
                            <span style="color:<?php echo $color27; ?>">27</span>
                            <input type="submit" value="停车" name="submit27" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub27" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color28; ?>"></i>
                            <span style="color:<?php echo $color28; ?>">28</span>
                            <input type="submit" value="停车" name="submit28" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub28" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color29; ?>"></i>
                            <span style="color:<?php echo $color29; ?>">29</span>
                            <input type="submit" value="停车" name="submit29" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub29" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color30; ?>"></i>
                            <span style="color:<?php echo $color30; ?>">30</span>
                            <input type="submit" value="停车" name="submit30" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub30" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color31; ?>"></i>
                            <span style="color:<?php echo $color31; ?>">31</span>
                            <input type="submit" value="停车" name="submit31" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub31" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color32; ?>"></i>
                            <span style="color:<?php echo $color32; ?>">32</span>
                            <input type="submit" value="停车" name="submit32" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub32" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color33; ?>"></i>
                            <span style="color:<?php echo $color33; ?>">33</span>
                            <input type="submit" value="停车" name="submit33" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub33" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color34; ?>"></i>
                            <span style="color:<?php echo $color34; ?>">34</span>
                            <input type="submit" value="停车" name="submit34" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub34" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color35; ?>"></i>
                            <span style="color:<?php echo $color35; ?>">35</span>
                            <input type="submit" value="停车" name="submit35" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub35" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color36; ?>"></i>
                            <span style="color:<?php echo $color36; ?>">36</span>
                            <input type="submit" value="停车" name="submit36" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub36" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color37; ?>"></i>
                            <span style="color:<?php echo $color37; ?>">37</span>
                            <input type="submit" value="停车" name="submit37" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub37" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color38; ?>"></i>
                            <span style="color:<?php echo $color38; ?>">38</span>
                            <input type="submit" value="停车" name="submit38" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub38" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color39; ?>"></i>
                            <span style="color:<?php echo $color39; ?>">39</span>
                            <input type="submit" value="停车" name="submit39" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub39" style="background:#ff5000">
                        </li>
                        <li>
                            <i class="iconfont icon-tingchewei1" style="color:<?php echo $color40; ?>"></i>
                            <span style="color:<?php echo $color40; ?>">40</span>
                            <input type="submit" value="停车" name="submit40" style="background:#6abb30">
                            <input type="submit" value="出库" name="sub40" style="background:#ff5000">
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <footer>毕业设计 - 智能停车系统</footer>

    <!-- 弹窗后的黑色板块 -->
    <div class="black-overlay" id="black-box"></div>
</body>

</html>