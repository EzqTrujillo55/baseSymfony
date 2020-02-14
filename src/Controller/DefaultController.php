<?php

namespace App\Controller;


use App\Entity\GcEmpresa;
use App\Entity\GcUsuario;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver\PDOMySql\Driver;
use PDO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManager;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class DefaultController
 * @package App\Controller
 * @ApiResource
 */
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function index(): Response
    {

        return $this->render('default/index.html.twig');
    }

    /**
     *@Route("/menu", name="menu")
     */
    public function Menu(){
        $em= $this->getDoctrine()->getManager();
        $empresaRepository = $em->getRepository(GcEmpresa::class, GcUsuario::class)->Menu();
        return $this->render('standard/busqueda.html.twig', array(
            'Empresa' =>  $empresaRepository
        ));
    }

    /**
     *@Route("/busqueda", name="busqueda")
     */
    public function Empresa(){
        $em= $this->getDoctrine()->getManager();
        $empresaRepository = $em->getRepository(GcEmpresa::class)->BusquedaEmpresa();
        return $this->render('standard/busqueda.html.twig', array(
            'Empresa' =>  $empresaRepository
        ));
    }


    /**
     *@Route("/sp", name="sp")
     */
    public function  sp(){
        $conexion = new PDO("mysql:host=localhost;dbname=itm_base_th", 'desarrollowiam', 'root$'); //Llamo a mi conexion PDO
        $sql = "CALL sp_menus_permisos(?,?,?)"; //Almaceno la llamada al sp en un string
        $stmt = $conexion->prepare($sql); //Con mi conexión lista, llamo al método prepare el cual me permitirá enviar parámetros de forma segura al sp mediante el método bindParam
        $idEmpresa = 1; //Variables que se enviarán como parámetros que se enviarán al sp
        $idUsuario = 1;
        $disponible =1;
        $stmt->bindParam(1, $idEmpresa, PDO::PARAM_INT); //llamo a la función bindParam la cual se encargará de enviar las variables como parámetros a mi sp,
        $stmt->bindParam(2, $idUsuario, PDO::PARAM_INT); //especifico la posición del parámetro, el parámetro y el tipo de dato que es
        $stmt->bindParam(3, $disponible, PDO::PARAM_INT);
        $stmt->execute(); //ejecuto el sp
        $resultado = $stmt->fetchAll(); //almaceno la respuesta del sp en un arreglo con el método fetchAll
        foreach ($resultado as $dato){ //foreach para recorrer el arreglo
            $menu[] = $dato['pr_descripcion']  ; //almaceno en un nuevo arreglo los datos del campo que voy a presentar en pantalla
            $menupadre[] = $dato['pr_nombre_padre']; //también almaceno el parámetro pr_nombre_padre para diferenciar los menus padres de los menus hijos
        }
        $numero= sizeof($menu)-1; //Numero de opciones disponibles


        $response = new Response(json_encode($resultado));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    /**
     *@Route("/sp2", name="sp2")
     */
    public function  sp2(){
        $conexion = new PDO("mysql:host=localhost;dbname=prueba", 'desarrollowiam', 'root$'); //Llamo a mi conexion PDO
        $sql = "CALL sp_parametro_secuencial(?,?,?,?,?,?,?,?,?,?)"; //Almaceno la llamada al sp en un string
        $stmt = $conexion->prepare($sql); //Con mi conexión lista, llamo al método prepare el cual me permitirá enviar parámetros de forma segura al sp mediante el método bindParam
        $idEmpresa = 8; //Variables que se enviarán como parámetros que se enviarán al sp
        $var2 = 'TE';
        $var3= 9;
        $var4= 0;
        $stmt->bindParam(1, $idEmpresa, PDO::PARAM_INT); //llamo a la función bindParam la cual se encargará de enviar las variables como parámetros a mi sp,
        $stmt->bindParam(2, $var2, PDO::PARAM_STR_CHAR); //especifico la posición del parámetro, el parámetro y el tipo de dato que es
        $stmt->bindParam(3, $var3, PDO::PARAM_INT);
        $stmt->bindParam(4, $var4, PDO::PARAM_INT);
        $stmt->bindParam(5, $var2, PDO::PARAM_STR);
        $stmt->bindParam(6, $var3, PDO::PARAM_INT);
        $stmt->bindParam(7, $var4, PDO::PARAM_INT);
        $stmt->bindParam(8, $var2, PDO::PARAM_STR);
        $stmt->bindParam(9, $var3, PDO::PARAM_INT);
        $stmt->bindParam(10, $var4, PDO::PARAM_INT);

        $stmt->execute(); //ejecuto el sp
        $resultado = $stmt->fetchAll(); //almaceno la respuesta del sp en un arreglo con el método fetchAll

        return new Response( '<html><body>Hello</body></html>');

    }

    /**
     *@Route("/sp3/{fi}/{ff}/{ci}/{cf}/{ma}", name="sp3")
     */
    public function  sp3($fi,$ff,$ci,$cf,$ma){
        $conexion = new PDO("mysql:host=localhost;dbname=itm_base_th", 'desarrollowiam', 'root$'); //Llamo a mi conexion PDO
        $sql = "CALL sp_consulta_contabilidad_mayorgeneral(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; //Almaceno la llamada al sp en un string
        $stmt = $conexion->prepare($sql); //Con mi conexión lista, llamo al método prepare el cual me permitirá enviar parámetros de forma segura al sp mediante el método bindParam
        $idEmpresa = 1; //Variables que se enviarán como parámetros que se enviarán al sp
        $fechaInicio = $fi;
        $fechaFin= $ff;
        $cuentaInicial= $ci;
        $cuentaFinal= $cf;
        $manualAutomatico= $ma;
        $comprobante= '';
        $beneficiario= '';
        $concepto= '';
        $ajuste = 1;
        $departamento=1;
        $estadoComp=0;
        $condic1='2';
        $condic2='=';
        $condic3='';
        $stmt->bindParam(1, $idEmpresa, PDO::PARAM_INT); //llamo a la función bindParam la cual se encargará de enviar las variables como parámetros a mi sp,
        $stmt->bindParam(2, $fechaInicio, PDO::PARAM_STR_CHAR); //especifico la posición del parámetro, el parámetro y el tipo de dato que es
        $stmt->bindParam(3, $fechaFin, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(4, $cuentaInicial, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(5, $cuentaFinal, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(6, $manualAutomatico, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(7, $comprobante, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(8, $beneficiario, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(9, $concepto, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(10, $ajuste, PDO::PARAM_INT);
        $stmt->bindParam(11, $departamento, PDO::PARAM_INT);
        $stmt->bindParam(12, $estadoComp, PDO::PARAM_INT);
        $stmt->bindParam(13, $condic1, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(14, $condic2, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(15, $condic3, PDO::PARAM_STR_CHAR);


        $stmt->execute(); //ejecuto el sp
        $resultado = $stmt->fetchAll(); //almaceno la respuesta del sp en un arreglo con el método fetchAll
       // print_r($resultado);
        //var_dump($resultado);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        $response = new Response(json_encode($resultado));
        $response->headers->set('Content-Type', 'application/json');

        return $response;


    }

    /**
     *@Route("/sp4/{fi}/{ff}/{idtc}/{ma}/{ec}", name="sp4")
     */
    public function  sp4($fi,$ff,$idtc,$ma,$ec){
        $conexion = new PDO("mysql:host=localhost;dbname=itm_base_th", 'desarrollowiam', 'root$'); //Llamo a mi conexion PDO
        $sql = "CALL sp_consulta_contabilidad_diariogeneral(?,?,?,?,?,?)"; //Almaceno la llamada al sp en un string
        $stmt = $conexion->prepare($sql); //Con mi conexión lista, llamo al método prepare el cual me permitirá enviar parámetros de forma segura al sp mediante el método bindParam
        $idEmpresa = 1; //Variables que se enviarán como parámetros que se enviarán al sp
        $fechaInicio = $fi;
        $fechaFin= $ff;
        $idTipoComprobante= $idtc;
        $manualAutomatico= $ma;
        $estadoComp=$ec;

        $stmt->bindParam(1, $idEmpresa, PDO::PARAM_INT); //llamo a la función bindParam la cual se encargará de enviar las variables como parámetros a mi sp,
        $stmt->bindParam(2, $fechaInicio, PDO::PARAM_STR_CHAR); //especifico la posición del parámetro, el parámetro y el tipo de dato que es
        $stmt->bindParam(3, $fechaFin, PDO::PARAM_STR_CHAR);
        $stmt->bindParam(4, $idTipoComprobante, PDO::PARAM_INT);
        $stmt->bindParam(5, $manualAutomatico, PDO::PARAM_INT);
        $stmt->bindParam(6, $estadoComp, PDO::PARAM_INT);


        $stmt->execute(); //ejecuto el sp
        $resultado = $stmt->fetchAll(); //almaceno la respuesta del sp en un arreglo con el método fetchAll
        //print_r($resultado);
        //var_dump($resultado);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        $response = new Response(json_encode($resultado));
        $response->headers->set('Content-Type', 'application/json');

        return $response;


    }


}
