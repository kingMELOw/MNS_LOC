window.onload = function(){
    printTime();
};

function printTime() {
    var d = new Date();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var secs = d.getSeconds();
    var day = d.getDay();
    var date = d.getDate();
    var month = d.getMonth();
    var yeah = d.getFullYear

        switch (day){
            case 0: 
                day = "Lundi";
                break
            case 1: 
                day = "Mardi";
                break
            case 2: 
                day = "Mercredi";
                break
            case 3: 
                day = "Jeudi";
                break
            case 4: 
                day = "Vendredi";
                break
            case 5: 
                day = "Samedi";
                break
            case 6: 
                day = "Dimanche";
                break

        }

        if(hours<10){
            hours = "0" + hours;
        }
        if(hours<10){
            hours = "0" + mins;
        }
        if(hours<10){
            hours = "0" + secs;
        }

    month = month +1
    document.getElementById("test").innerHTML = hours + ":" +mins+ ":" +secs;
    document.getElementById("ttt").innerHTML = day + "," + date + "." + month + "." + year;
}
setInterval(printTime , 1000);