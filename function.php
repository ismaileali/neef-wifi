<?php  
    /* If connection fails throw an error */
    include 'dbconfig.php';
    if (mysqli_connect_errno()) {
        echo "Could  not connect to database: Error: ".mysqli_connect_error();
        exit();
    }
    $to = "";
    $bdate = "";
    $sqlquery = "SELECT mobile_number,b_date FROM neefwifitb";
    
            if ($result = mysqli_query($connection, $sqlquery)) {
                /* fetch associative array */
                while ($row = mysqli_fetch_assoc($result)) {
                    $bdate = $row['b_date'];
                    $date1= date_create($bdate); 
                    $date2=date_create("");
                    $diff=date_diff($date1,$date2);
                    $d_count = $diff->format("%R%a days");

                if($d_count == -1){
                    $number = $row["mobile_number"];
                    $to = "$number";
                    $token = "f2df13f31c1d6469e0aeaeb515317e8f";
                    $message = "You have only $d_count remaining!";
                    $url = "http://api.greenweb.com.bd/api2.php";
                    $data= array(
                        'to'=>"$to",
                        'message'=>"$message",
                        'token'=>"$token"
                        ); // Add parameters in key value
                    $ch = curl_init(); // Initialize cURL
                    curl_setopt($ch, CURLOPT_URL,$url);
                    curl_setopt($ch, CURLOPT_ENCODING, '');
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $smsresult = curl_exec($ch);
                    //Result
                    echo $smsresult;
                    //Error Display
                    echo curl_error($ch);
                 }
                }
            }                   
?>