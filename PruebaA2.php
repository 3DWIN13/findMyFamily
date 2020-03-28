<?php

require('librerias/motor.php');
echo start();
?>
<script type="text/javascript">
navigator.mediaDevices.getUserMedia({audio: false, video:true}).then((stream)=>{
    let video = document.getElementById('video')

    video.srcObject = stream

    video.onloadedmetadata = (ev) => video.play() 
}).catch((err)=>console.log(err))
</script>

<video width="640" id="video"  height="480" autoplay muted class="js-video"></video>


<?= /* fin del html */ finaly(); ?>