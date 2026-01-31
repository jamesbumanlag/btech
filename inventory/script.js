function validateCredentials(){
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === ''){
        alert('Username cannot be empty');
        return false;
    };

    if (username.length <= 4 || username.length > 20){
        alert('Invalid Username Input');
        return false;
    };

    if (password === ''){
        alert('Enter Password');
        return false;
    };

    if (password.length <= 4 || password.length > 20){
        alert('Invalid Password Input');
        return false;
    }

    return true;

}









document.getElementById('submitButton').addEventListener("click", (e)=>{
    e.preventDefault();
    
    if (!validateCredentials()) return;

    window.location.replace("login.php");


});    


document.getElementById('addButton').addEventListener('click', (e)=>{
    e.preventDefault();

    if (!validateCredentials()) return;

    



});

    



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


