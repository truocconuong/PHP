<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            password1: <input type="password" name="password1" value=""/><br/>
            password1: <input type="text" name="gender " value=""/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
            <?php
                
                if (isset($_POST['form_click'])){
                        if($_POST['gender']=="Name"){
                            echo "Chau chao co . $_POST['username']";
                        }else {
                            echo "Em chao anh. $_POST['username']";
                        }
                    echo 'Tên đăng nhập là: ' . $_POST['username'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                }
           ?>
        </form>
    </body>
</html>