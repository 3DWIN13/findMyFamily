<?php

function cargar($id){
    $sql = "select * from usuario where id='{$id}'";
    $rs = conexion::consulta($sql);

    $fila = mysqli_fetch_assoc($rs);

    $cliente = new stdClass();
    $cliente->id = $id;
    $cliente->email = $fila['email'];
    $cliente->password = $fila['password'];
    
    return $cliente;

    conexion::consulta($sql);
}
function cargar2(){
    $sql= "Select count(*) total from usuarios where lugarN LIKE 'SANTO%'";
    $rs = conexion::consulta($sql);
    $total= mysqli_fetch_assoc($rs);

    echo $total['total'];
    /*$final=[];
    while($fila = mysqli_fetch_assoc($rs)){
        $final[]= $fila;
    }
    return $final;*/
}
function nuevos(){
    //nombreEm, nombre, apellido, comenterios, lugarN, cedula, nombreP, donaciones
    $usuarios = new stdClass();
    $usuarios->id=0;
    $usuarios->nombreEm =''; 
    $usuarios->nombre ='';
    $usuarios->apellido = '';
    $usuarios->comentarios='';
    $usuarios->lugarN='';
    $usuarios->cedula='';
    $usuarios->nombreP='';
    $usuarios->donaciones='';
    return $usuarios;
}

function edit($id){
    $sql = "select * from usuarios where id='{$id}'";
    $rs = conexion::consulta($sql);

    $fila = mysqli_fetch_assoc($rs);

    $usuarios = new stdClass();
    $usuarios->id=$id;
    $usuarios->id = $id;
    $usuarios->email = $fila['email'];
    $usuarios->password = $fila['password'];

    return $usuarios;
}

function borrartodo(){
    $sql = "TRUNCATE TABLE empleados";

    conexion::consulta($sql);
}

function borrar($usuarios){
    $sql = "delete from usuarios$usuarios where id = '{$usuarios}'";

    conexion::consulta($sql);
}
function borrar2($empleados){
    $sql = "delete from empleados where id = '{$empleados}'";

    conexion::consulta($sql);
}

/****************consulta guardar info**************** */
function guardarInfoUsuario($info){
  /* if($usuarios->id > 0){
        $sql="UPDATE usuarios $usuarios SET cedula='{$usuarios->cedula}', nombre='{$usuarios->nombre}', apellido='{$usuarios->apellido}', fechaN='{$usuarios->fechaN}', lugarN='{$usuarios->lugarN}', img='{$usuarios->img}' 
        WHERE id='{$usuarios->id}'";
        conexion::consulta($sql);

    

    }else{*/

    $sql="INSERT INTO informacionu (nombreF, contacto, descripcion, fecha, foto, idU, idF)
     VALUES ('{$info->nombreF}', '{$info->contacto}', '{$info->descipcion}', '{$info->fecha}', '{$info->foto}', '{$info->idU}', '{$info->idF}')";

     conexion::consulta($sql);

     /* var_dump($info->nombreF); */
    }
    /****************consulta guardar info**************** */
//}

function Login($informacion){
 /* if($usuarios->id > 0){
        $sql="UPDATE usuarios $usuarios SET cedula='{$usuarios->cedula}', nombre='{$usuarios->nombre}', apellido='{$usuarios->apellido}', fechaN='{$usuarios->fechaN}', lugarN='{$usuarios->lugarN}', img='{$usuarios->img}' 
        WHERE id='{$usuarios->id}'";
        conexion::consulta($sql);

    

    }else{*/

        $sql="INSERT INTO usuario (email, password)
        VALUES ('{$informacion->email}', '{$informacion->password}')";
   
        conexion::consulta($sql);
   
        /* var_dump($info->nombreF); */
       }
   //}

   function Entrar($informacion){
    /* if($usuarios->id > 0){
           $sql="UPDATE usuarios $usuarios SET cedula='{$usuarios->cedula}', nombre='{$usuarios->nombre}', apellido='{$usuarios->apellido}', fechaN='{$usuarios->fechaN}', lugarN='{$usuarios->lugarN}', img='{$usuarios->img}' 
           WHERE id='{$usuarios->id}'";
           conexion::consulta($sql);
   
       
   
       }else{*/
   
           $sql="SELECT (email, password) FROM usuario
           VALUES ('{$informacion->email}', '{$informacion->password}')";
      
           conexion::consulta($sql);
      
           /* var_dump($info->nombreF); */
          }
      //}


function guardar2($empleados){
    $sql="INSERT INTO empleados (cedula, nombreP, donacion)
    VALUES ('{$empleados->cedula}', '{$empleados->nombreP}', '{$empleados->donacion}')";

    conexion::consulta($sql);
}
function contador(){
    $total=null;
    $sql = "SELECT COUNT(*) as total FROM  empleados";

    $rs=conexion::consulta($sql)->fetch_assoc();

    $total = $rs['total'];
    
    return $total;
}
function Nem(){
    $sql = "SELECT*FROM usuarios";
    $rs=conexion::consulta($sql);

    $conteo = mysqli_num_rows($rs);
    echo $conteo;
}

