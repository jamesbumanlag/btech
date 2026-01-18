document.getElementById("submitButton").addEventListener("click", function(){
        const width = Number(document.getElementById("widthInput").value);
        const height = Number(document.getElementById("heightInput").value);
    
        checkInput(width, height);

    
    })


    function getArea(width, height){
        const area = width * height;
        alert(area);
        console.log(area);
    }

    function checkInput(width, height){
    if (width > 0 && height > 0) {
        getArea(width, height);
    } else {
        alert("Invalid Input!")
        console.log("Invalid Input")
    }
    }


   
