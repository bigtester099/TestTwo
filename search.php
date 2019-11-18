<?php

    include_once('db.php'); //Connect to database

    if(isset($_REQUEST['q']))
    {
        $q = $_REQUEST['q'];
        $query = mysqli_query($conn, "SELECT * FROM `words` WHERE `englishWord` LIKE '%".$q."%' OR `yupikWord` LIKE '%".$q."%'") or die(mysqli_error($conn)); 
        $count = mysqli_num_rows($query);
        if($count == 0){
          $output = '<h2>No result found</h2>';
        }else{
          while($row = mysqli_fetch_assoc($query)){
            $output .= '<h2>'.$row['yupikWord'].'</h2><br>';
            $output .= '<h2>'.$row['englishWord'].'</h2><br>';
            $output .= '<h2>'.$row['audio'].'</h2><br>';
            $audio_name = $row['audio'];
            $output .= '<td><audio src="audio/'.$audio_name.'" controls="control">'.$audio_name.'</audio></td>';
          }
        }
        echo $output;
      }else{
        "Please add search parameter";
    }

    mysqli_close($conn);
?>
