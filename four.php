<?php 
    if (isset($_POST['Upload'])) { 

            $target_path = DVWA_WEB_PAGE_TO_ROOT."hackable/uploads/"; 
            $target_path = basename( $_FILES['uploaded']['name']); 

            if (!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) { 
                 
              $html  .=   echo '<pre>'; 
                echo 'Your image was not uploaded.'; 
                echo '</pre>'; 
                 
              } else { 
             
             $html .=    echo '<pre>'; 
                echo $target_path . ' succesfully uploaded!'; 
                echo '</pre>'; 
                 
            } 

        } 
?>
