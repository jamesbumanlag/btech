document.getElementById('submitButton').addEventListener("click", (e)=>{
    
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === ''){
        alert('Enter username');
        return;
    };

    if (username.length <= 4 || username.length > 20){
        alert('Invalid Username Input');
        return;
    };

    if (password === ''){
        alert('Enter Password');
        return;
    };

    if (password.length <= 6 || password.length > 20){
        alert('Invalid Password Input');
        return;
    };


    window.location.replace("process_login.php");
    



    // if (username === ''){
    //     alert('Enter username');
    //     return;

    // } else if (username.length >= 6 && username.length <= 20){
    //     if (password === ''){
    //         alert('Enter Password');
    //         return;
    //     } else if (password.length >= 6 && password.length <= 14){
    //         window.location.href = "login.php";
    //     } else{
    //         alert("Invalid Password Input");
    //         return;
    //     }

    // } else {
    //     alert("Invalid Username Input");
    //     return;
    // }


});