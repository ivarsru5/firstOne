function getCurrentDay(){
    let date = new Date();
    let dd = date.getDate();
    let mm = date.getMonth() + 1;
    let yy = date.getFullYear();
    if(dd < 10){
        dd = "0" + dd;
    }
    if(mm < 10){
        mm = "0" + mm;
    }
    
   return yy + '-' + mm + '-' + dd;
}

document.getElementById("date").setAttribute("min", getCurrentDay());

const form = document.querySelector("form");
const button = document.getElementById("submit");

button.addEventListener("click", (e) =>{
    e.preventDefault()

    let xml = new XMLHttpRequest();
    xml.open("POST", "backEndScript.php", true);
    xml.onload = () =>{
        if(xml.readyState == 4 && xml.status == 200){
            let response = xml.response;
            if(response != "Appointmant made."){
                alert(response);
            }else{
                form.reset()
            }
        }
    }
    let formData = new FormData(form);
    xml.send(formData);
});