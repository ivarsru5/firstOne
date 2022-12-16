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