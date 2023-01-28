<?php

include 'app/service/advertisementService.php';

$advertServ = new AdvertisementService();
$adverts = $advertServ->getAllAdvertisements();
echo'<ul class="users ad">';

if(empty($adverts)){
    echo'<h2>There are no advertisements in the system!</h2>';
}
else {
    foreach($adverts as $ad){
        echo'<li>';
    
        if($ad->get_id()%2==0){
            echo'<i class="fa-solid fa-address-card fa-2xl"></i><br>';
        }
        else{
            echo'<i class="fa-regular fa-address-card fa-2xl"></i><br>';
        }
        echo'<h3>'.$ad->get_title().'</h3>
        <p>By '.$ad->get_user()->get_name().'</p></li>';
    }
    
    echo '</ul>';
}