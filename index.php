<?php include "php/checkLogin.php"; ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body bgcolor="#f8f9fe">
    <div class="main-container">
        <div class="form-container">
            <div class="form">
                <div class="logo"></div>
                <h3>智能停车系统</h3>
                <!-- 注册表单 -->
                <form action="" method="POST">
                    <div class="input-text">
                        <input type="text" name="username" placeholder="请输入用户名">
                        <input type="password" name="password" placeholder="请输入密码">
                    </div>
                    <span>
                        <?php echo $err; ?>
                    </span>
                    <button type="submit" class="submit" name="login">登 录</button>
                </form>
            </div>
        </div>
    </div>
    <footer>毕业设计 - 智能停车系统</footer>
</body>

</html>