<?php

namespace App\Controller;

use App\Entity\GcEmpresa;
use App\Form\GcEmpresaType;
use PDO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gc/empresa")
 */
class GcEmpresaController extends AbstractController
{
    /**
     * @Route("/", name="gc_empresa_index", methods={"GET"}) //Ruta para la sección de empresas, donde se muestran las empresas ingresadas
     */
    public function index(): Response
    {
        $gcEmpresas = $this->getDoctrine()  //Se llama a Doctrine, el cual gestiona nuestra base de datos dentro de Symfony
            ->getRepository(GcEmpresa::class)  //Llamada a la clase GcEmpresa
            ->findAll();  //Se ejecuta findAll dentro de GcEmpresa, este método es el equivalente a un select * from gc_empresa

        return $this->render('gc_empresa/index.html.twig', [
            'gc_empresas' => $gcEmpresas, //Se renderiza el resultado de la consulta
        ]);
    }

    /**
     * @Route("/new", name="gc_empresa_new", methods={"GET","POST"}) //Ruta para la sección de crear una empresa
     */
    public function new(Request $request): Response
    {
        $gcEmpresa = new GcEmpresa(); //Se crea un objeto que hereda todos los métodos y atributos de la clase GcEmpresa
        $form = $this->createForm(GcEmpresaType::class, $gcEmpresa); //Se genera un formulario, en el que se llama a todos los campos de la clase GcEmpresa
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { //Comprobación de que el formulario ha sido enviado y que es válido
            $entityManager = $this->getDoctrine()->getManager(); //Se llama a doctrine para ejecutar la instruccion sql, en este caso un insert
            $entityManager->persist($gcEmpresa); //Método que verifica que exista algún problema con los tipos de dato, tamaño de cadenas o duplicación de claves primarias al momento de hacer el insert
            $entityManager->flush(); //Se ejecuta el insert
            //Proceso para la inserción de parametro en la tabla parametro secuencial
            $conexion = new PDO("mysql:host=localhost;dbname=prueba", 'desarrollowiam', 'root$'); //Llamo a mi conexion PDO
            $sql = "CALL sp_parametro_secuencial(?,?,?,?,?,?,?,?,?,?)"; //Almaceno la llamada al sp en un string
            $stmt = $conexion->prepare($sql); //Con mi conexión lista, llamo al método prepare el cual me permitirá enviar parámetros de forma segura al sp mediante el método bindParam
            $idEmpresa = 9; //Variables que se enviarán como parámetros que se enviarán al sp
            $var2 = 'TE';
            $var3= 5;
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
            return $this->redirectToRoute('gc_empresa_index'); //Redirección a la sección de empresas, para verificar que se ha ingresado
        }

        return $this->render('gc_empresa/new.html.twig', [ //Si la comprobación del if da como resultado false, el formulario se recarga indicando los errores que han surgido
            'gc_empresa' => $gcEmpresa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{emId}", name="gc_empresa_show", methods={"GET"}) //Ruta para ver el detalle de una empresa
     */
    public function show(GcEmpresa $gcEmpresa): Response //Este método es el encargado de mostrar los detalles de una sola empresa, inicialmente las empresas se muestran en un grid.
    {
        return $this->render('gc_empresa/show.html.twig', [
            'gc_empresa' => $gcEmpresa,
        ]);
    }

    /**
     * @Route("/{emId}/edit", name="gc_empresa_edit", methods={"GET","POST"}) //Ruta para la edición de una empresa
     */
    public function edit(Request $request, GcEmpresa $gcEmpresa): Response
    {
        $form = $this->createForm(GcEmpresaType::class, $gcEmpresa); //Carga el formulario con los datos de la empresa seleccionada para editar
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { //Comprobación de que el formulario ha sido enviado y que es válido
            $this->getDoctrine()->getManager()->flush(); //Se ejecuta la actualización, en este caso no se hace la comprobación con persist porque se esta editando un registro ya ingresado

            return $this->redirectToRoute('gc_empresa_index');  //Redirección a la seccion de empresas para verificar la modificacion
        }

        return $this->render('gc_empresa/edit.html.twig', [  //Si la comprobación del if da como resultado false, el formulario se recarga indicando los errores que han surgido
            'gc_empresa' => $gcEmpresa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{emId}", name="gc_empresa_delete", methods={"DELETE"}) //Ruta para eliminar empresas
     */
    public function delete(Request $request, GcEmpresa $gcEmpresa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gcEmpresa->getEmId(), $request->request->get('_token'))) { //Aquí se comprueba que el Id de la empresa seleccionada existe
            $entityManager = $this->getDoctrine()->getManager(); //Se llama a doctrine para ejecutar la instruccion sql
            $entityManager->remove($gcEmpresa); //Método que verifica que exista algún problema con la base de datos,en este caso mira si la tabla tiene una clave foránea, lo que impide que se elimine el registro
            $entityManager->flush(); //Elimina el registro
        }

        return $this->redirectToRoute('gc_empresa_index'); //Redireccion a la seccion de empresas para verificar que se eliminó
    }

    /**
     *@Route("/busquedas", name="busquedas")
     */
    public function Busquedas(){
        $em= $this->getDoctrine()->getManager();
        $empresaRepository = $em->getRepository(GcEmpresa::class)->BuscarEmpresa();
        return $this->render('standard/busqueda.html.twig', array(
            'Empresa' =>  $empresaRepository
        ));
    }
}
