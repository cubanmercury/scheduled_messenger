
function Timer() {
    var dt=new Date()
    document.getElementById('time').innerHTML=dt.getHours()+":"+dt.getMinutes()+":"+dt.getSeconds();
    setTimeout("Timer()",1000);
 }
 Timer();