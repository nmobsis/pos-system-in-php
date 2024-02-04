<?php  

require '../config/function.php';

$paraRestulId = checkParamId('id');
if(is_numeric($paraRestulId)){

    $adminId = validate($paraRestulId);

    $admin = getById('admins', $adminId);
    if($admin['status'] == 200)
    {
        $adminDeleteRes = delete('admins', $adminId);
        if($adminDeleteRes)
        {
            redirect('admins.php', 'Admin Deleted Successfully!');
        }
        else
        {
            redirect('admins.php', 'Something Went Wrong.');
        }
    }
    else
    {
        redirect('admins.php', $admin['message']);
    }
    // echo $adminId;
}else{
    redirect('admins.php', 'Something Went Wrong.');
}


?>

    