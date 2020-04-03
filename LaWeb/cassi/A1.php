<?php
require('../librerias/motor.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>algoritmo</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<script src="../face-api.min.js"></script> 

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		/* body {
		  margin: 0;
		  padding: 0;
		  width: 100vw;
		  height: 100vh;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  flex-direction: column
		}*/
	
		canvas {
		  position: absolute;
		 
		  top: 0;
		  left: 0;
		}
	
				  img{
					  max-width: 650px;
					  max-height: 500px;
					 
			}
			
			/* *{
		margin:0px;
		padding:0px;
		font-family: helvetica;
	}  */
	
	p#texto{
		text-align: center;
		color:white;
	}
	
	div#div_file{
		position:relative;
		margin:5px;
		padding:10px;
		width:147px;
		height: 48px;
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

	<!-- Offcanvas Menu Section end -->
	<br>
	<br>
	<br>
	<br>
	
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item">
				<div class="hero-text">
					<div id="div_file">
						<p id="texto">Subir imagen</p>
						  <input type="file" id="imageUpload">
					</div>
					<br>
					<h3 >Prueba de algoritmo</h3>
					<br>
					<p>Puedes probar si la foto que subiste al sistema, nuestro algoritmo 
                        la reconoce, puedes probar subiendo una foto en grupo o sola, el 
                        algoritmo marcará las caras con unos cuadros azules y mostrará el 
                        nombre de quien esté en la base de datos registrada. Puedes intentarlo
                         cuanta veces quieras.
</p>
					<a href="../Agregar.php" class="ht-btn"><i class="arrow_left"></i> Volver</a>
				</div>
				 <div class="hi-bg set-bg" id="vari" >
					 
				 </div>
</div>

</div>
				</section>
	<!-- Hero section end   icon_lock-open -->

	
	<script  type="text/javascript">
  
  //include ('face-api.min.js'); right: 13%;top: 12%;
    
	const imageUpload = document.getElementById('imageUpload')

Promise.all([
  faceapi.nets.faceRecognitionNet.loadFromUri('../models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('../models'),
  faceapi.nets.ssdMobilenetv1.loadFromUri('../models')
]).then(start)

async function start() {
  const container = document.createElement('div')
  container.style.position = 'absolute'
  container.style.right='2%'
  container.style.top='5%'
  document.body.append(container)
  const labeledFaceDescriptors = await loadLabeledImages()
  const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6)
  let image
  let canvas
  document.body.append('loaded')
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
	 //  document.getElementById('l').style.display = 'inline';
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
		const img = await faceapi.fetchImage(`../${label}/${i}.jpg`/* `https://raw.githubusercontent.com/WebDevSimplified/Face-Recognition-JavaScript/master/labeled_images/${label}/${i}.jpg `*/)
		const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
		descriptions.push(detections.descriptor)
	  }

	  return new faceapi.LabeledFaceDescriptors(label, descriptions)
	})
  )

  
}
  </script>
		
		
	
	  

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
