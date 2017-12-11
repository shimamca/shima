<div class="container">  

<h1>Welcome to Users!</h1>
<?php 
 $i =0;
foreach ($users as $users_item):
   $i++;
    ?>

        
        <div class="main">
                <?php echo $i.". ". $users_item['user_name']; ?>
        </div>
       
<?php 

endforeach; 
//print_r($usersByID);
?>

<h1>Welcome to Users <u> <?php echo $usersByID['user_name']; ?></u></h1>
</div>

