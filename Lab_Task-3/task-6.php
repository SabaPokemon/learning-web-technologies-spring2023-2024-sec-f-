<?php

    $students= [ 's1'=>['id'=>1, 'name'=>"Saba", 'cgpa'=>3.97],
                 's2'=>['id'=>1, 'name'=>"nadim", 'cgpa'=>3.97],
                 's3'=>['id'=>1, 'name'=>"Rahi", 'cgpa'=>3.90],
                 's4'=>['id'=>1, 'name'=>"Moynul", 'cgpa'=>3.92]];

    foreach($students as $s)
    {
        if($s['cgpa']>= 3.92)
        {
            print_r($s);
        }else
        {
            echo "Nothing existed";
        }
    }

?>
