<?php

    if(isset($_POST['process'])){

        $config = [

            'dbname' => 'hng',

            'pass' => '@hng.intern1',

            'username' => 'intern',

            'host' => 'localhost'

        ];

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

        $con = new PDO($dsn, $config['username'], $config['pass']);

        $result = $con->query('SELECT * FROM password');

        $data = $result->fetch();

        $password = $data['password'];

        $subject = $_POST['subject'];

        $body = $_POST['body'];

        header("location:http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=uniquejob04@gmail.com");

    }else{

        header("location: sambreso.html");

    }

?>