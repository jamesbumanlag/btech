document.getElementById('submitButton').addEventListener("click", (e)=>{
    
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === ''){
        alert('Enter username');
        exit();
    };

    if (username.length <= 4 || username.length > 20){
        alert('Invalid Username Input');
        exit();
    };

    if (password === ''){
        alert('Enter Password');
        exit();
    };

    if (password.length <= 4 || password.length > 20){
        alert('Invalid Password Input');
        exit();
    } else{
        window.location.replace("index.php");
    }


    
    



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