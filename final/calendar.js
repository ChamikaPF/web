function maxDays(month, year){
var mDay;
    if((month == 3) || (month == 5) || (month == 8) || (month == 10)){
        mDay = 30;
      }
      else{
          mDay = 31
          if(month == 1){
               if (year/4 - parseInt(year/4) != 0){
                   mDay = 28
               }
               else{
                   mDay = 29
              }
   }
  }
return mDay;
}
function changeBg(id){
    if (eval(id).style.backgroundColor != "yellow"){
        eval(id).style.backgroundColor = "yellow"
    }
    else{
        eval(id).style.backgroundColor = "#ffffff"
    }
}
function writeCalendar(){
var d = new Date
var date = d.getDate()
var month = d.getMonth()
var day = d.getDay()
var year = d.getFullYear()
var arrM = new Array("January","February","March","April","May","June","July","August","September","October","November","December")
var arrY = new Array()
    for (ii=0;ii<=30;ii++){
        arrY[ii] = year - 2 + ii
    }
var arrD = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")

var text = ""
text = "<form name=calForm>"
text += "<table border=1>"
text += "<tr><td>"
text += "<table width=100%><tr>"
text += "<td align=left>"
text += "<select name=selMonth onChange='changeCal()'>"
    for (ii=0;ii<=11;ii++){
        if (ii==month){
            text += "<option value= " + ii + " Selected>" + arrM[ii] + "</option>"
        }
        else{
            text += "<option value= " + ii + ">" + arrM[ii] + "</option>"
        }
    }
text += "</select>"
text += "</td>"
text += "<td align=right>"
text += "<select name=selYear onChange='changeCal()'>"
    for (ii=0;ii<=30;ii++){
        if (ii==2){
            text += "<option value= " + arrY[ii] + " Selected>" + arrY[ii] + "</option>"
        }
        else{
            text += "<option value= " + arrY[ii] + ">" + arrY[ii] + "</option>"
        }
    }
text += "</select>"
text += "</td>"
text += "</tr></table>"
text += "</td></tr>"
text += "<tr><td>"
text += "<table border=1>"
text += "<tr>"
    for (ii=0;ii<=6;ii++){
        text += "<td align=center><span class=label>" + arrD[ii] + "</span></td>"
    }
text += "</tr>"
aa = 0
    for (kk=0;kk<=5;kk++){
        text += "<tr>"
        for (ii=0;ii<=6;ii++){
            text += "<td align=center><span id=sp" + aa + " onClick='changeBg(this.id)'>1</span></td>"
            aa += 1
        }
        text += "</tr>"
    }
text += "</table>"
text += "</td></tr>"
text += "</table>"
text += "</form>"
document.write(text)
changeCal()
}
function changeCal(){
var d = new Date
var date = d.getDate()
var month = d.getMonth()
var day = d.getDay()
var year = d.getFullYear()
var currM = parseInt(document.calForm.selMonth.value)
var prevM
    if (currM!=0){
        prevM = currM - 1
    }
    else{
        prevM = 11
    }
var currY = parseInt(document.calForm.selYear.value)
var mmyear = new Date()
mmyear.setFullYear(currY)
mmyear.setMonth(currM)
mmyear.setDate(1)
var day1 = mmyear.getDay()
    if (day1 == 0){
        day1 = 7
    }
var arrN = new Array(41)
var aa
    for (ii=0;ii<day1;ii++){
        arrN[ii] = maxDays((prevM),currY) - day1 + ii + 1
    }
    aa = 1
    for (ii=day1;ii<=day1+maxDays(currM,currY)-1;ii++){
        arrN[ii] = aa
        aa += 1
    }
    aa = 1
    for (ii=day1+maxDays(currM,currY);ii<=41;ii++){
        arrN[ii] = aa
        aa += 1
    }
    for (ii=0;ii<=41;ii++){
        eval("sp"+ii).style.backgroundColor = "#FFFFFF"
    }
var dCount = 0
    for (ii=0;ii<=41;ii++){
        if (((ii<7)&&(arrN[ii]>20))||((ii>27)&&(arrN[ii]<20))){
            eval("sp"+ii).innerHTML = arrN[ii]
            eval("sp"+ii).className = "c3"
        }
        else{
            eval("sp"+ii).innerHTML = arrN[ii]
            if ((dCount==0)||(dCount==6)){
                eval("sp"+ii).className = "c2"
            }
            else{
                eval("sp"+ii).className = "c1"
            }
            if ((arrN[ii]==date)&&(month==currM)&&(year==currY)){
                eval("sp"+ii).style.backgroundColor="yellow"
            }
        }
    dCount += 1
        if (dCount>6){
            dCount=0
        }
    }
}