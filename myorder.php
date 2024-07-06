<?php
$cusname =$_POST['cusname'];
$cusage =$_['cusage'];
$order =$_['order'];
$email =$_['email'];
$date =$-['date'];
$time =$_['time'];
$funnplace =$_['funplace'];
$pay =$_['pay'];
 
if.(!empty($cusname) .|| .!empty($cusage) .||.!empty($empty) .||.!empty($order) .||.!empty($email) .||.!empty(date) .||.!empty(time) .||.!empty(funplace) .||.!empty(pay).)
{

    $host ="local host";
    $dbusername ="root";
    $dbpassword ="";
    $dbname ="photography1";

    $conn =new mysqli ($host,$dbusername,$dbpassword,$dbname);

    if(mysquli_connect_error()){
        die('connect error('.mysquli_connect_error().')'.mysquli_connect_error());

    }

else{
    $SELECT ="SELECT email from order details where email =? Limit 1";
    $INSERET="INSERT into order details (cusname,cusage,order,email,date,time,funplace,pay)Values(?,?,?,?,?,?,?,?)";
    
    $stmt =$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum =$stmt->num_rows;
}

if($rnum==0)
{
    $stmet->close();
    $stmt =$conn->prepare($INSERT);
    $stmt->bind_param("ssssssss",$cusname,$cusage,$order,$email,$date,$time,$funplace,$pay);
    $stmt->execute();
    echo "NEW ORDER PLACED";
}
else{
    echo "SOMEONE ALREADY REGISTER USING THIS EMAIL"
}
$stmt->close();
$conn->close();
}
else{
    echo "ALL FIELD ARE REQUIRED";
    die()
}
?>
