function validateCredentials(){
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

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

const loginForm = document.getElementById('loginForm');

if (loginForm){
    loginForm.addEventListener('submit', (e)=>{
        e.preventDefault();
        if (!validateCredentials()) return;
        e.target.submit();
        
    })
}

const addUserForm = document.getElementById('addUserForm');

if (addUserForm){
    addUserForm.addEventListener('submit', (e)=>{
        e.preventDefault();
        if (!validateCredentials()) return;
        e.target.submit();
        
    })
}


function closeError(){
    document.getElementById("error-box").style.display = "none";
}