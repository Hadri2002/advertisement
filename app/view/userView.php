<?php

include 'app/service/userService.php';

$userService = new UserService();
$users = $userService->getAllUsers();
echo'<ul class="users">';

if(empty($users)){
    echo'<h2>There are no users in the system!</h2>';
}
else {
    foreach($users as $user){
        echo'<li>';
    
        if($user->get_id()%2==0){
            echo'<i class="fa-solid fa-user fa-2xl"></i><br>';
        }
        else{
            echo'<i class="fa-regular fa-user fa-2xl"></i><br>';
        }
        echo'<h3>'.$user->get_name().'</h3></li>';
    }
    
    echo '</ul>';
}