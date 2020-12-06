 function calculateBmi() {
        var weight = document.getElementById("weight").value;
        var height = document.getElementById("height").value;
        if(weight > 0 && height > 0){	
        var finalBmi = weight/(height/100*height/100);
        document.getElementById("bmi").value = finalBmi;
        }
        else{
        alert("Please Fill in everything correctly");
        }
        }