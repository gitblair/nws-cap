<?php
//PULL NYC ALERTS
            $ch = curl_init();
            // set url
            curl_setopt($ch, CURLOPT_URL, "https://alerts.weather.gov/cap/wwaatmget.php?x=NYC061");
            //return the transfer as a string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            // $output contains the output string
            $output = curl_exec($ch);
            file_put_contents("feeds/alert-NYC061.xml", $output); // now your xml file is saved.
            // close curl resource to free up system resources
            curl_close($ch);

//PULL ESSEX ALERTS
            $ch = curl_init();
            // set url
            curl_setopt($ch, CURLOPT_URL, "https://alerts.weather.gov/cap/wwaatmget.php?x=NJC013&y=0");
            //return the transfer as a string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            // $output contains the output string
            $output = curl_exec($ch);
            file_put_contents("feeds/alert-NJC013.xml", $output); // now your xml file is saved.
            // close curl resource to free up system resources
            curl_close($ch);
?>
