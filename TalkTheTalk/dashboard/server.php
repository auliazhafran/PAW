<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
$username = $_SESSION['talker'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'talkthetalk';

    $link = mysqli_connect($host,$user,$pass, $db) or die(mysqli_error);
if (!isset($_POST['message']))
{
    $message = "";
}
else
{

    $message = $_POST['message'];

    if ($message != "")
    {
        $code = $_POST['code'];
        $sql = "INSERT INTO talkthetalk_chats (secretcode,username,message) VALUES('$code','$username','$message')";
        mysqli_query($link, $sql);
    }

}
$code = $_POST['code'];
$sql = "SELECT * FROM talkthetalk_chats WHERE secretcode = '$code' ORDER BY id ASC";
if ($result = mysqli_query($link, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)){

            $theTime = $row['time'];
            $strTime = strtotime($theTime);
            $jam = date('H:i', $strTime);

            $today = new DateTime();
            $today->setTime( 0, 0, 0 ); 

            $match_date = DateTime::createFromFormat( "Y-m-d H:i:s", $theTime );
            $match_date->setTime( 0, 0, 0 );

            $diff = $today->diff( $match_date );
            $diffDays = (integer)$diff->format( "%R%a" ); 

            switch( $diffDays ) {
                case 0:
                    $tgl =  "Today";
                    break;
                case -1:
                    $tgl =  "Yesterday";
                    break;
                default:
                    $tgl =  "";
            }

            if ($row['username'] == $username) {
                    echo '  <div class="alert alert-info" style="margin-left: 10%">
                            '.$row['message'].'
                            <br><small>'.$tgl.' '.$jam.'</small> <br>
                        </div>';
            }else{
                echo '  <div class="alert alert-secondary" style="margin-right: 10%">
                            <strong>'.$row['username'].'</strong> <br>'.$row['message'].'
                            <br><small>'.$tgl.' '.$jam.'</small> <br>
                        </div>';
            }
        } 
    }
    else
    {
        echo "<p class='text-dark'>TALK THE TALK</p>" ;
    }
}

?>
