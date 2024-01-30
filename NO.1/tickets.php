<?php
    if($_POST['veri']==$_POST['ans']){
        $dsn="mysql:host=localhost;charset=utf8;dbname=web02";
        $pdo=new PDO($dsn,'admin','1234');
        $sql="INSERT INTO `tickets`(`first-name`, `last-name`, `passwork`, `phone`)
        VALUES ('{$_POST['first-name']}','{$_POST['last-name']}','{$_POST['password']}','{$_POST['phone']}')";
        $pdo->exec($sql);   
        header("location:home.html"); 
    }else{
?>
    <script>
        alert("驗證碼錯誤，請重新輸入");
        location.href="tickets.html";
    </script>
<?php
    }
?>