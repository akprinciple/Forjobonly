<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="font/css/all.min.css">
     <script type="text/javascript" src="js/java.js"></script>
     <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
     
  
        
           <?php 
        
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
            
            $date = date('d/M/Y');
            $time = date('h:i:sa');
            $script = $_SERVER['SCRIPT_NAME'];

            #$c_ins = "INSERT INTO visitors (address, page, time, date) VALUES ('$ip', '$script', '$time', '$date')";
           # $set = mysqli_query($connect, $c_ins);
     ?>

