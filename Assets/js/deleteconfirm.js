var user_id;



function deleteConfirm(id){
    document.getElementById("confirm-box").style.display="block";
    user_id = id;
}



function deleteConfirmed(user_role){
    if (user_role == 'mother'){
        window.location.href="../../Config/admin-managemotherprocess.php?status=delete&id="+user_id;
    }else if(user_role == 'phm'){
        window.location.href="../../Config/admin-managephmprocess.php?status=delete&id="+user_id;
    }else if(user_role == 'doctor'){
        window.location.href="../../Config/admin-managedoctorprocess.php?status=delete&id="+user_id;
    }
}

function hideConfirmBox(){
    document.getElementById("confirm-box").style.display="none";
}