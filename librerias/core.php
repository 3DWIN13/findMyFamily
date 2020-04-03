<?php

function cargar($id)
{
    $sql = "select * from usuarios where id='{$id}'";
    $rs = conexion::consulta($sql);

    $fila = mysqli_fetch_assoc($rs);

    $cliente = new stdClass();
    $cliente->id = $id;
    $cliente->email = $fila['email'];
    $cliente->pass = $fila['pass'];

    return $cliente;

   // conexion::consulta($sql);
}
function cargar2()
{
    $sql = "Select count(*) total from usuarios where lugarN LIKE 'SANTO%'";
    $rs = conexion::consulta($sql);
    $total = mysqli_fetch_assoc($rs);

    echo $total['total'];
    /*$final=[];
    while($fila = mysqli_fetch_assoc($rs)){
        $final[]= $fila;
    }
    return $final;*/
}
function nuevos()
{
    //nombreEm, nombre, apellido, comenterios, lugarN, cedula, nombreP, donaciones
    $usuarios = new stdClass();
    $usuarios->id = 0;
    $usuarios->nombreEm = '';
    $usuarios->nombre = '';
    $usuarios->apellido = '';
    $usuarios->comentarios = '';
    $usuarios->lugarN = '';
    $usuarios->cedula = '';
    $usuarios->nombreP = '';
    $usuarios->donaciones = '';
    return $usuarios;
}

function edit($id)
{
    $sql = "select * from usuarios where id='{$id}'";
    $rs = conexion::consulta($sql);

    $fila = mysqli_fetch_assoc($rs);

    $usuarios = new stdClass();
    $usuarios->id = $id;
    $usuarios->id = $id;
    $usuarios->email = $fila['email'];
    $usuarios->password = $fila['password'];

    return $usuarios;
}

function noti($id)
{
    $sql = "select * from informacionu where idF='{$id}'";
    $rs = conexion::consulta($sql);

    $fila = mysqli_fetch_assoc($rs);

    $usuarios = new stdClass();

    $usuarios->idF = $id;
   // $usuarios->idU = $fila['idU'];
    $usuarios->nombreF = $fila['nombreF'];
    $usuarios->img = $fila['img'];
    $usuarios->estatus = $fila['estatus'];

    return $usuarios;
}

function otra($id)
{
    $sql = "select * from informacionu where nombreF='{$id}'";
    $rs = conexion::consulta($sql);

    $fila = mysqli_fetch_assoc($rs);

    $usuarios = new stdClass();

    $usuarios->idF =$fila['idF'];
    $usuarios->idU = $fila['idU'];
    $usuarios->nombreF = $id;
    $usuarios->img = $fila['img'];
    $usuarios->estatus = $fila['estatus'];

    return $usuarios;
}
function borrartodo()
{
    $sql = "TRUNCATE TABLE empleados";

    conexion::consulta($sql);
}

function borrar($usuarios)
{
    $sql = "delete from informacionu $usuarios where id = '{$usuarios}'";

    conexion::consulta($sql);
}
function borrar2($info)
{
    $sql = "delete from informacionu where idF = '{$info}'";

    conexion::consulta($sql);
}

/****************consulta guardar info**************** */
function guardarInfoUsuario($info)
{
    /* if($usuarios->id > 0){
        $sql="UPDATE usuarios $usuarios SET cedula='{$usuarios->cedula}', nombre='{$usuarios->nombre}', apellido='{$usuarios->apellido}', fechaN='{$usuarios->fechaN}', lugarN='{$usuarios->lugarN}', img='{$usuarios->img}' 
        WHERE id='{$usuarios->id}'";
        conexion::consulta($sql);

    

    }else{*/

    $sql = "INSERT INTO informacionu (nombreF, contacto, descripcion, fecha, foto, img, idU, idF)
     VALUES ('{$info->nombreF}', '{$info->contacto}', '{$info->descipcion}', '{$info->fecha}', '{$info->foto}','{$info->img}', '{$info->idU}', '{$info->idF}')";

    conexion::consulta($sql);

    /* var_dump($info->nombreF); */
}
/****************consulta guardar info**************** */
//}

/*****************comsulta para registro**************************** */
function registro($informacion)
{

    $sql = "INSERT INTO usuarios (nombre, email, pass, admin)
        VALUES ('{$informacion->nombre}','{$informacion->correo}', '{$informacion->pass}', '{$informacion->admin}')";

    conexion::consulta($sql);
}

/*****************comsulta para registro**************************** */

function Entrar($email)
{
    $sql = "SELECT * FROM usuarios WHERE email = '{$email}' ";

    $rs = conexion::consulta($sql);
    $row = mysqli_fetch_assoc($rs);

    $usuarios = new stdClass();
    $usuarios->id = $row['id'];
    $usuarios->email = $row['email'];
    $usuarios->pass = $row['pass'];
    $usuarios->admin = $row['admin'];

    return $usuarios;
}




function guardar2($empleados)
{
    $sql = "INSERT INTO empleados (cedula, nombreP, donacion)
    VALUES ('{$empleados->cedula}', '{$empleados->nombreP}', '{$empleados->donacion}')";

    conexion::consulta($sql);
}
function contador()
{
    $total = null;
    $sql = "SELECT COUNT(*) as total FROM  empleados";

    $rs = conexion::consulta($sql)->fetch_assoc();

    $total = $rs['total'];

    return $total;
}
function Nem()
{
    $sql = "SELECT*FROM usuarios";
    $rs = conexion::consulta($sql);

    $conteo = mysqli_num_rows($rs);
    echo $conteo;
}

function sacar()
{
    $sql = "select * from informacionu";
    $rs = conexion::consulta($sql);

    $final = [];
    while ($fila = mysqli_fetch_assoc($rs)) {
        $final[] = $fila;
    }
    return $final;
    //var_dump($final);
}

function sacarL()
{
    $sql = "select * from usuarios";
    $rs = conexion::consulta($sql);

    $final = [];
    while ($fila = mysqli_fetch_assoc($rs)) {
        $final[] = $fila;
    }
    return $final;
    var_dump($final);
}

function estatus($usuarios){
   /*  $sql="UPDATE informacionu $usuarios SET cedula='{$usuarios->cedula}', nombre='{$usuarios->nombre}', apellido='{$usuarios->apellido}', fechaN='{$usuarios->fechaN}', lugarN='{$usuarios->lugarN}', img='{$usuarios->img}' 
        WHERE id='{$usuarios->id}'"; */
       $sql= "UPDATE informacionu SET estatus='1' WHERE nombreF='{$usuarios->nombreF}'";
        conexion::consulta($sql);
}
function union($e){
    $sql="SELECT usuarios.email
    FROM usuarios
    INNER JOIN informacionu ON usuarios.id = informacionu.idU WHERE informacionu.idU ='{$e->id}';";

$rs = conexion::consulta($sql);
$row = mysqli_fetch_assoc($rs);

$usuarios = new stdClass();
$usuarios->email = $row['email'];
}

function sacarS()
{
    $sql = "select * from informacionu WHERE estatus=1";
    $rs = conexion::consulta($sql);

    $final = [];
    while ($fila = mysqli_fetch_assoc($rs)) {
        $final[] = $fila;
    }
    return $final;
    var_dump($final);
}

function guardar3($e)
{

   /*  $sql = "INSERT INTO camaras (camara1, camara2, camara3, camara4, camara5, camara6, camara7)
    VALUES ('{$e->camara1}', '{$e->camara2}', '{$e->camara3}', '{$e->camara4}', '{$e->camara5}', '{$e->camara6}', '{$e->camara7}')";

    conexion::consulta($sql);*/

    $sql="UPDATE camaras SET camara1='{$e->camara1}',camara2='{$e->camara2}',camara3='{$e->camara3}',camara4='{$e->camara4}',camara5='{$e->camara5}',camara6='{$e->camara6}',camara7='{$e->camara7}' WHERE id = 1";
        conexion::consulta($sql); 
}

function sacarC()
{
    $sql = "select * from camaras";
    $rs = conexion::consulta($sql);

    $final = [];
    while ($fila = mysqli_fetch_assoc($rs)) {
        $final[] = $fila;
    }
    return $final;
    //var_dump($final);
}


