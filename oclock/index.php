<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
    
    <style type="text/css">
      #divchrono{
        margin: auto ;
        width: 300px;
        text-align: center;
        
      }

      #formChrono{
      	margin: auto;
      	width: 300px;
      	border: 1px solid rgba(0,0,0,0.5);
      	padding:5px 0;
      	text-align: center;
      	font-size: 1.5em;
      	font-family: digital;
      	margin-bottom: 10px;


      }
     
      button{
        background: #3498db;
        color: #fff;
        width: 70px;
        border-radius: 5px;
        line-height: 1.5em;
        border: none
      }
     

	</style>


</head>
<body>
<div id="divChrono">00:00:00</div>
<form id="formChrono">
   <input type="button" id="bStart" value="Démarrer" onClick="fStart()" />
   <input type="button" id="bLap" value="Tours" onClick="fLap()" />
   <input type="button" id="bStop" value="Stop" onClick="fStop()" />
   <input type="button" id="bRecall" value="Rappels" onClick="fMemory()" />
   <input type="button" id="bDel" value="Remise à zéro" onClick="fReset()" />
</form>
</body>
<script src="script.js"></script>
</html>