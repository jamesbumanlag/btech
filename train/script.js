document.getElementById("goButton").addEventListener("click", () => {
    
    const select = document.getElementById("passenger").value;
    const showPrice = document.getElementById('showPrice');
    const receipt = document.getElementById("receipt-container");
    const from = document.getElementById('from').value;
    const destination = document.getElementById("to").value;
    const name = document.getElementById("inputName").value;

    if (name === ""){
        alert("Enter your name");
        return;
    } else if (from === "Select") {
        alert("Please Select Origin");
        return;
    } else if (destination === "Select"){
        alert("Please select Destination");
        return;
    } else if ( from === to ){
        alert("Invalid origin and destination");
        return;
    } 
        
            




    if (select ===  "adult"){
        showPrice.innerText = "$10";
    } else if (select ===  "student"){
        showPrice.innerText = "$7";
    } else if (select ===  "senior"){
        showPrice.innerText = "$8";
    } else if (select ===  "kids"){
        showPrice.innerText = "$5";
    } else {
        alert("Please select a passenger type");
        return;
    } 
    
        
    document.querySelector("#name span").innerText = name;
    document.querySelector("#from span").innerText = from;
    document.querySelector("#to span").innerText = destination;
    
    const today = new Date();
    
    document.querySelector("#date span").innerText = today.toDateString();
    document.querySelector("#time span").innerText = today.toLocaleTimeString();
    receipt.classList.remove("hidden");

    

});