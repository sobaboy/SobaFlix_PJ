<!-- php코드가 들어간다 -->
<?php
    if(isset($_POST["submitButton"])){
        echo"제출 완료 되었습니다!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SOBAFLIX에 오신 것을 환영합니다</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        <div class="signInContainer">
            <div class="column">
                <div class="header">
                    <img src="assets/images/logo.png" alt="Site logo" title="Logo">
                    <h3>로그인</h3>
                    <span>SOBAFLIX에 지금 조인하세요!</span>
                </div>

            <form method="POST">
                <input type="text" name ="username"placeholder="아이디"required>
                <input type="password" name ="password"placeholder="비밀번호"required>
                <input type="submit" name ="submitButton" value="제출">
            </form>

            <a href="register.php" class="signInMessage">아직 회원이 아니신가요? 여기에서 회원가입하세요!</a>
            </div>
        </div>
    </body>
</html>