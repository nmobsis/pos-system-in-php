<?php  

require '../config/function.php';

$paraRestulId = checkParamId('id');
if(is_numeric($paraRestulId)){

    $categoryId = validate($paraRestulId);

    $category = getById('categories', $categoryId);

    if($category['status'] == 200)
    {
        $response = delete('categories', $categoryId);
        if($response)
        {
            redirect('categories.php', 'Category Deleted Successfully!');
        }
        else
        {
            redirect('categories.php', 'Something Went Wrong.');
        }
    }
    else
    {
        redirect('categories.php', $category['message']);
    }
    
}else{
    redirect('categories.php', 'Something Went Wrong.');
}


?>

    