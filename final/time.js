function startTime() {
    var t = new Date();
    var diem="AM";
    var h = t.getHours();
    var m = t.getMinutes();
    var s = t.getSeconds();


    if (h==0) {
        h=12;
    }
    else if (h>12) {
        h=h-12;
        diem="PM";
    }
    if (h<10) {
        h="0"+h;
    }
    if (m<10) {
        m="0"+m;
    }
    if (s<10) {
        s="0"+s;
    }
    
    document.getElementById('txt1').innerHTML =
    h + ":" + m + ":" + s +" " +diem;
   
     setTimeout('startTime()', 1000);
}

