
dataObj = {}
getdata = function(){
    var home = document.getElementById('input1').value
    var online = document.getElementById('input2').value
    dataObj.home = home;
    dataObj.online = online;
    console.log(dataObj);
}
