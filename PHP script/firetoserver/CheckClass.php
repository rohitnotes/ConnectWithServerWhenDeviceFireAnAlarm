<?php

Class CheckClass
{

    private $DATE;

    function prepare($data)
    {

        if (array_key_exists('date', $data))
            $this->DATE = $data['date'];

    }

    function check()
    {

        //$d=strtotime("2017-08-03 20:51:20");
        //echo "Created date is " . date("Y-m-d h:i:s a", $d);

        $d = "2017-08-03";

        if (strcmp($this->DATE, $d) == 0) {

            $json['success'] = 1;
            echo json_encode($json);

        } else {
            $json['success'] = 0;
            echo json_encode($json);
        }
    }
}
