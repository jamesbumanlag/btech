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


const addModalContainer = document.getElementById("add-modal-container");
const addItemBtn = document.getElementById("addItemButton");
const submitCloseBtn = document.querySelectorAll(".submit-close-btn");


addItemBtn.addEventListener("click", ()=>{
    addModalContainer.classList.add("show");
});

submitCloseBtn.forEach(closeBtn => {
    closeBtn.addEventListener('click', () =>{
        addModalContainer.classList.remove("show");
    });
    
});

const materialRadio = document.querySelectorAll('input[name="category"]');

materialRadio.forEach(material => {
    material.addEventListener('change', ()=>{
        document.getElementById('cableForm-container').style.display = 'none';
        document.getElementById('ntdForm-container').style.display = 'none';
        document.getElementById('pcdForm-container').style.display = 'none';

        if (material.value === 'cable') {
            document.getElementById('cableForm-container').style.display = 'block';
        } else if (material.value === 'ntd') {
            document.getElementById('ntdForm-container').style.display = 'block';
        } else if (material.value === 'pcd') {
            document.getElementById('pcdForm-container').style.display = 'block';
        }

    })
})

const cableType = document.getElementById('cableType');

function updateLengthFields () {

    const internal = document.getElementById('cableLengthInternal');
    const external = document.getElementById('cableLengthExternal');

    // hide
    internal.style.display = 'none';
    external.style.display = 'none';


    if (cableType.value === 'internal'){
        internal.style.display = 'block';
    }  else if (cableType.value === 'external') {
        external.style.display = 'block';
    }
}

cableType.addEventListener('change', updateLengthFields);

window.addEventListener("DOMContentLoaded", updateLengthFields);