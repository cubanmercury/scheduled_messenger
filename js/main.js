
function Timer() {
    var dt=new Date()
    var minutes = dt.getMinutes();
    let seconds = dt.getSeconds();
    
    if (minutes < 10){
        minutes = "0" + minutes;
    }
    if (seconds < 10){
        seconds = "0" + seconds;
    }
    document.getElementById('time').innerHTML=dt.getHours()+":"+minutes+":"+seconds;
    setTimeout("Timer()",1000);
 }
 Timer();