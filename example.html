<?php include "header_other.php";?>

<style type="text/css">
#result{
	height:200px;
	border:1px solid;
}
button{
font-size:20px;
position:absolute;
top:240px;
left:50px;
}
</style>

<body>
<h2>inut</h2>
<p id="result"></p>
<button onclick="startConverting();"></button>
<script type="text/javascript">
var r = document.getElementById('result');

function startConverting() {

if('webkitSpeechRecognition' in window){
var speechRecognizer = new webkitSpeechRecognition();
speechRecognizer.continuos =true;
speechRecognizer.interimResults =true;
speechRecognizer.lang = 'en-IN';
speechRecognizer.start();
var finalTranscripts= '';
speechRecognizer.onresult= function(event){
var interimTranscripts='';
for(var i=event.resultIndex;i<event.results.length;i++){
	var transcript=event.results[i][0].transcript;
	if(event.results[i].isFinal){
		finalTranscripts += transcript;
	}else{
	interimTranscripts += transcript;
	}
}

r.innerHTML= finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
};
speechRecognizer.onerror= function(event){

};
}
else {
r.innerHTML = 'broswer not supported';
}

}




</script>
</body>
</html>