<?php

if (isset($_POST['btn-send']))
{
    $UName = $_POST['UName'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];
    echo $Email;

    if(empty($UName) || empty($Email) || empty($Subject) || empty($Msg))
    {
        header('location:contact.php?error');
    }

    else{
    $to = "krittikachaturvedi2@gmail.com";
    $mailHeaders = "From: " . $UName . "<". $Email .">\r\n";

        if(mail($to,$Subject,$Msg,$mailHeaders))
        {
            header("location:contact.php?success");
        }
    }
}
else{
    header("location:contact.php");
}

?>
If the mail() function exist but mails not going, check if a mail transport agent (MTA)such as sendmail or postfix is installed on your server