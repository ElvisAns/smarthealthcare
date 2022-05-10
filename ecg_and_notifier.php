    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="assets/js/chartist.min.js"></script>

    <script src="assets/js/bootstrap-notify.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">

        var color_map=['#FFA500','#008000','#FF0000','#FFFF00','#00FF00','#0000FF','#0000A0','00FFFF','#FFA500'];

    	$(document).ready(function(){


        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to our tool Dear <?php echo $_SESSION['type'];?> <b>The patient Monitor based on Internet Of Things</b> if its your first time please visit the guide section"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

<?php 
$i=0;
    while($i<$numberOfpatient){
?>

    <script type="text/javascript">


 var electroCardiogramStream<?php echo $i; ?>=0;


function getData<?php echo $i; ?>() {
   return electroCardiogramStream<?php echo $i; ?> ;
   }


var time<?php echo $i; ?> = new Date ();
var data<?php echo $i; ?> = [{
x: [time<?php echo $i; ?>=0],
y: [getData<?php echo $i; ?>()],
type:"scatter",
mode: 'lines' ,
line: {color: color_map[Math.round(Math.random()*8)] , width:2}
}]

var layout<?php echo $i; ?>={
title:'Patient  Heart Beat ',

xaxis:{
    title:'time',
},
yaxis:{
    title: 'HR BPM'
},
legend:{
y:0.5,
font:{
    size:13
}
}
}
Plotly.plot( 'ECG<?php echo $i; ?>' , data<?php echo $i; ?>, layout<?php echo $i; ?>);


setInterval(function showUser(){
    
    
    if(window.XMLHttpRequest){
        xmlhttp= new XMLHttpRequest();
    }
    else{
        xmlhttp= new AcriveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange=function(){

        if(this.readyState==4 && this.status==200){

            //console.log(this.responseText);
            var patient_data=JSON.parse(this.responseText);
            //console.log(patient_data[0]);
            //to create array in javascript , create object
            //document.getElementById("patient_name<?php echo "1";?>").innerHTML=patient_data[0].name;
            document.getElementById("patient_bpm"+patient_data[0].id.toString()).innerHTML=patient_data[0].bpm;
            document.getElementById("patient_tmp"+patient_data[0].id.toString()).innerHTML=patient_data[0].body;
            document.getElementById("room_tmp"+patient_data[0].id.toString()).innerHTML=patient_data[0].room;
            document.getElementById("spo2_level"+patient_data[0].id.toString()).innerHTML=patient_data[0].spo2;
            electroCardiogramStream<?php echo $i; ?>=patient_data[0].ecg;

            var time<?php echo $i; ?> = new Date ();
            var update<?php echo $i; ?> = {
            x:  [[time<?php echo $i; ?>]],
            y: [[getData<?php echo $i; ?>()]]
            }
            var olderTime<?php echo $i; ?> = time<?php echo $i; ?>.setMinutes(time<?php echo $i; ?>.getMinutes()-2);
            var futureTime<?php echo $i; ?> = time<?php echo $i; ?>.setMinutes(time<?php echo $i; ?>.getMinutes()+2);

            var minuteView<?php echo $i; ?> = {
            xaxis: {
            title:'time',
            type: 'date' ,
            range: [olderTime<?php echo $i; ?>,futureTime<?php echo $i; ?>]
                    },
            yaxis:{
                title: 'HR BPM',
                range:[0,1023]
            }
                  };
              Plotly.relayout('ECG<?php echo $i; ?>', minuteView<?php echo $i; ?>);
              Plotly.extendTraces( 'ECG<?php echo $i; ?>' , update<?php echo $i; ?>, [0])


                
        }
    };
    xmlhttp.open("GET","json_api_multiple.php?Request=<?php echo $patient_datas[$i]['devId'];?>",true);
    xmlhttp.send();


},400);

</script>
<?php
$i++; 
}
?>
