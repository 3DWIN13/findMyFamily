<?php
require('librerias/motor.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="face-api.min.js"></script> 
  <!-- <script defer src="script.js"></script> -->

  <title>Face Recognition</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column
    }

    canvas {
      position: absolute;
     
      top: 0;
      left: 0;
    }

			  img{
				  max-width: 650px;
				  max-height: 500px;
        }
        
        *{
	margin:0px;
	padding:0px;
	font-family: helvetica;
}

p#texto{
	text-align: center;
	color:white;
}

div#div_file{
	position:relative;
	margin:50px;
	padding:10px;
	width:150px;
	background-color: #2499e3;
	-webkit-border-radius:5px;
	-webkit-box-shadow:0px 3px 0px #1a71a9;
}

input#imageUpload{
	position:absolute;
	top:0px;
	left:0px;
	right:0px;
	bottom:0px;
	width:100%;
	height:100%;
	opacity: 0;
}
		  
  </style>
</head>
<body>
  
<?php 

//echo $_POST['vari'];

  
/* if(isset($_POST['l'])){
 echo alert('Felicidades',' El algoritmo funciona correctamente', 'succes');
} */





// una vez que obtengas los datos, pasas esos en un json_encode()
// esto es para que puedas utilizarlo del lado del cliente


?>
<div id="cont2"></div>
<div id="div_file">
<p id="texto">Subir imagen</p>
  <input type="file" id="imageUpload">
</div>
  <form action="" method="post" name="miform" id="miform">
<input type="text" name="vari" id="vari" value="">
<button name="l" id="l" type="button">enviar</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
// una vez que renderice el DOM ejecuto lo siguiente
$(document).ready(function() {
  // agrego un evento al hacer click en el botón
  
	$('button').on('click', function() {
    let relacion = $("#vari").val();
  	$.ajax({
      // metodo: puede ser POST, GET, etc
    	method: "POST",
      // la URL de donde voy a hacer la petición
      url: "peticion.php",
      // los datos que voy a enviar
      data: { name: relacion },
      // si tuvo éxito la petición
      success: function(data) {
      	// muestro en el log la info de la petición
      	console.log(data);
        // muestro un valor
       

document.getElementById('cont2').innerHTML=' <div class="alert alert-success" role="alert"> A simple success alert—check it out! </div>' ;
      }
    })
  });
});
</script>

<script>
 document.getElementById('l').style.display = 'none';
    </script>
  </form>

 

  

  <script  type="text/javascript">
  
  //include ('face-api.min.js');
    const imageUpload = document.getElementById('imageUpload')

Promise.all([
  faceapi.nets.faceRecognitionNet.loadFromUri('models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('models'),
  faceapi.nets.ssdMobilenetv1.loadFromUri('models')
]).then(start)

async function start() {
  const container = document.createElement('div')
  container.style.position = 'relative'
  document.body.append(container)
  const labeledFaceDescriptors = await loadLabeledImages()
  const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6)
  let image
  let canvas
  document.body.append('Loaded')
  imageUpload.addEventListener('change', async () => {
    if (image) image.remove()
    if (canvas) canvas.remove()
    image = await faceapi.bufferToImage(imageUpload.files[0])
    container.append(image)
    canvas = faceapi.createCanvasFromMedia(image)
    container.append(canvas)
    const displaySize = { width: image.width, height: image.height }
    faceapi.matchDimensions(canvas, displaySize)
    const detections = await faceapi.detectAllFaces(image).withFaceLandmarks().withFaceDescriptors()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor))
    results.forEach((result, i) => {
      const box = resizedDetections[i].detection.box
      const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() })
      drawBox.draw(canvas)
     
    })
        
   const part =  results[0].toString().split("(")
    if(part[0]!='unknown '){
        console.log(part[0]);
       let vari= part[0];
       document.getElementById("vari").value = vari;
       document.getElementById('l').style.display = 'inline';
       console.log(results)
      }
  })
}

function loadLabeledImages() {
  const labels = [ <?php
  $us = sacar();
  foreach ($us as $mostrar) { 
  
  echo"'" .$mostrar["nombreF"] ."',";

 } ?> ]

   console.log (labels);
  return Promise.all(
    labels.map(async label => {
      const descriptions = []
      for (let i = 1; i <= 1; i++) {
        const img = await faceapi.fetchImage(`${label}/${i}.jpg`/* `https://raw.githubusercontent.com/WebDevSimplified/Face-Recognition-JavaScript/master/labeled_images/${label}/${i}.jpg `*/)
        const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
        descriptions.push(detections.descriptor)
      }

      return new faceapi.LabeledFaceDescriptors(label, descriptions)
    })
  )

  
}
  </script>


  <a href="Agregar.php">pa atras</a>

  <?php


 /*  $us = sacar();
  foreach ($us as $mostrar) { 
  
   '<?= $mostrar['nombreF'] ?>',

 } */ ?>
</body>
</html>