<?php
////////////INICIO DEL HTML CON EL NAVBAR//////////////////
require('librerias/motor.php');


echo start();
$n = "";
if (isset($_POST['borra'])) {
  # code...
  borrar2($_POST['borra']);

  $n = $_POST['nombreF'];


  @unlink($n . "/1.jpg");
  //@unlink($n); 
  rmdir($n);
}

?>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet">
<script src="face-api.min.js"></script>
<section class="hero-wrap js-fullheight img" style="background-image: url(images/adminn.jpg);">
  <div class="overlay"></div>
  <div class="container">

    <style>
      /**/
      body {
        background-color: #212529;
        color: #3C4858;
        font-weight: 300;
      }

      canvas {
        position: absolute;

        top: 0;
        left: 0;
      }

      img {
        max-width: 650px;
        max-height: 500px;
      }

      * {
        margin: 0px;
        padding: 0px;
        font-family: helvetica;
      }

      p#texto {
        text-align: center;
        color: white;
      }

      div#div_file {
        position: relative;
        margin: 5px;
        padding: 10px;
        width: 147px;
        height: 48px;
        background-color: #f44336;
        -webkit-border-radius: 5px;
        -webkit-box-shadow: 0px 3px 0px #9e322a;
      }

      input#imageUpload {
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        width: 100%;
        height: 100%;
        opacity: 0;
      }
    </style>


    <div class=" ">
      <div class="sidebar" data-color="danger" data-background-color="black" data-image="">


        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo"><a href="admin.php" class="simple-text logo-normal">
            Administrador
          </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="index2.php">
                <i class="material-icons">dashboard</i>
                <p>Find My Family</p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="PE.php">
                <i class="material-icons">person</i>
                <p>Personas encontradas</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="index2.php">
                <i class="material-icons">bubble_chart</i>
                <p>Configuracion</p>
              </a>
            </li>


            <li class="nav-item active  ">
              <a class="nav-link" href="A2.php">
                <i class="material-icons">language</i>
                <p>Simulacion</p>
              </a>
            </li>
            <li class="nav-item active-pro ">
              <a class="nav-link" href="salir.php">
                <i class="material-icons">unarchive</i>
                <p>Salir</p>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <br>



    <div id="cont2"></div>

    <div style='margin-left: 38%;' class="col-lg-6 col-md-12">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
      
<div class="row">
          <div style="margin-left: 5%" id="div_file">
            <p id="texto">Subir imagen</p>
            <input type="file" id="imageUpload">
          </div>
         
          <form action="" method="post" name="miform" id="miform">
          <button style="margin-left: 20%; width: 147px;
        height: 48px; " name="l" id="l" type="button" class="btn btn-succes">Confirmar</button>
      
          <input type="hidden" name="vari" id="vari" value="">
         
    </form>
    </div>
        </div>
      </div>
    </div>

    <div id="cont3"></div>

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
       

document.getElementById('cont2').innerHTML=' <div style="margin-left: 52%; width: 34%" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span><b> Bien hecho </b> hemos notificado a la persona</span></div>' ;
      }
    })
  });
});
</script>

<script>
 document.getElementById('l').style.display = 'none';
    </script>

    <script type="text/javascript">
      //  max-width: 650px; max-height: 500px; include ('face-api.min.js');
      const imageUpload = document.getElementById('imageUpload')

      Promise.all([
        faceapi.nets.faceRecognitionNet.loadFromUri('models'),
        faceapi.nets.faceLandmark68Net.loadFromUri('models'),
        faceapi.nets.ssdMobilenetv1.loadFromUri('models')
      ]).then(start)

      async function start() {
        const container = document.createElement('div')
        container.style.position = 'absolute'
        container.style.right = '284px'
        container.style.top = '21%'

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
          const displaySize = {
            width: image.width,
            height: image.height
          }
          faceapi.matchDimensions(canvas, displaySize)
          const detections = await faceapi.detectAllFaces(image).withFaceLandmarks().withFaceDescriptors()
          const resizedDetections = faceapi.resizeResults(detections, displaySize)
          const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor))
          results.forEach((result, i) => {
            const box = resizedDetections[i].detection.box
            const drawBox = new faceapi.draw.DrawBox(box, {
              label: result.toString()
            })
            drawBox.draw(canvas)

          })

          const part = results[0].toString().split("(")
          if (part[0] != 'unknown ') {
            console.log(part[0]);
            let vari = part[0];
            document.getElementById("vari").value = vari;
            document.getElementById('l').style.display = 'inline';
            console.log(results)
            document.getElementById('cont2').innerHTML='<div style="margin-left: 37%; width: 50%" class="alert alert-info alert-with-icon" data-notify="container"><i class="material-icons" data-notify="icon">add_alert</i><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span data-notify="message">hemos encontrado similitud, con personas desapareceda en la base de datos, preciona confirmar para terminar el proceso.</span></div>'
          }
        })
      }

      function loadLabeledImages() {
        const labels = [<?php
                        $us = sacar();
                        foreach ($us as $mostrar) {

                          echo "'" . $mostrar["nombreF"] . "',";
                        } ?>]

        console.log(labels);
        return Promise.all(
          labels.map(async label => {
            const descriptions = []
            for (let i = 1; i <= 1; i++) {
              const img = await faceapi.fetchImage(`${label}/${i}.jpg` /* `https://raw.githubusercontent.com/WebDevSimplified/Face-Recognition-JavaScript/master/labeled_images/${label}/${i}.jpg `*/ )
              const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
              descriptions.push(detections.descriptor)
            }

            return new faceapi.LabeledFaceDescriptors(label, descriptions)
          })
        )


      }
    </script>



</section>
<?= /* fin del html

<div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Tasks:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Bugs
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> Website
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> Server
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                   
                  </div>
                </div>
              </div>
            </div>

*/ finaly(); ?>