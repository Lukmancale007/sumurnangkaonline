<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript">
        function displayTime(){
            var clientTime=new Date();
            var Time =new Date(clientTime.getTime());
            var sh=time.getHours().tostring();
            var sm=time.getMinutes().toString();
            var ss=time.getSeconds().toString();
            document.getElementById("time").innerHTML=(sh.lenght==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+":"+(ss.length==1?"0"+ss:ss);
        }
        </script>
</head>
<body onload= "setInterval('displayTime()', 1000);">
        <h1>Jam Sekarang</h1>
        <h1 id="time">

         </h1>

</body>
</html>
