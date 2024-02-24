<?php

    //GMAIL
    function smtpGmail($file_path) {

        $json_data = file_get_contents($file_path);
        var_dump($json_data);

        $data = json_decode($json_data, true);
        var_dump($json_data);

        $smtp = new StdClass();
        $smtp->Host = "smtp.gmail.com";
        $smtp->Port = 465;
        $smtp->Username = $data['UsernameGmail'];
        $smtp->Password = $data['PasswordGmail'];
        $smtp->SMTPSecure = "ssl";
        return $smtp;
    }

    //OUTLOOK
    function smtpOutlook($file_path) {

        $json_data = file_get_contents($file_path);
        var_dump($json_data);

        $data = json_decode($json_data, true);
        var_dump($json_data);

        $smtp = new StdClass();
        $smtp->Host = "smtp.office365.com";
        $smtp->Port = 587;
        $smtp->Username = $data['UsernameOutlook'];
        $smtp->Password = $data['PasswordOutlook'];
        $smtp->SMTPSecure = "tls";
        return $smtp;
    }
?>