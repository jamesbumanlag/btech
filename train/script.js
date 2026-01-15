document.getElementById("goButton").addEventListener("click", () => {
    const select = document.getElementById("passenger").value;
    let showPrice = document.getElementById('showPrice');
    if (select ===  "adult"){
            showPrice.innerText = "$10";
        } else if (select ===  "student"){
            showPrice.innerText = "$7";
        } else if (select ===  "senior"){
            showPrice.innerText = "$8";
        } else if (select ===  "kids"){
            showPrice.innerText = "$5";
        } else {
            alert("Please select a passenger type")
        } 


});