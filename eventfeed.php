<?php
    extract($_GET);
    // echo $start . " " . $end;
    // TODO: fetch events between start date and end date from database (take care of overlaps)
    $ev = array(
        "title" => "Chess tournament", 
        "start" => "2018-10-15T15:20:00+00:00",
        "end"   => "2018-10-15T16:20:00",
        "desc"  => "People will play chess against each other. Please take part.", 
        "venue" => "MRD Auditorium");
    $resp = array($ev);
    echo json_encode($resp);
?>