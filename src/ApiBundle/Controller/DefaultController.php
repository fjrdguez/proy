<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use EmpresaBundle\Entity\empresa;
class DefaultController extends Controller
{
    // Mensajes definidos para usar como mensajes de devolución
    const BAD_NAME_COMPANY="Nombre de empresa incorrecto";
    const BAD_ID_COMPANY="Id de empresa incorrecto";
    const NO_ALL_ELEMENTS="Falta algún parámetro para crear la empresa";
    const NO_CONTENT="No se ha encontrado la emprea";

    public function indexAction()
    {
        return $this->render('ApiBundle:Default:index.html.twig');
    }
    private function badRequest($msg, $help=null){
        return array(
            'message'=>$msg, 
            'help'=>$help
        );
    }
    private function serializaEmpresa($empresa){
        return array("nombre"=>$empresa->getNombre(),
                    "ciudad" =>$empresa->getCiudad(),
                    "numEmpleados" => $empresa->getNumEmpleados()
    ); 

    }
    public function getEmpresaByIdGetMethodAction($id){
        $response;
        if($id == 0){
            $response = new JsonResponse($this->badRequest(self::BAD_ID_COMPANY, "Debe introducir una id válida"),400);
        }else{
            $repository=$this->getDoctrine()->getRepository('EmpresaBundle:empresa');
            $empresa = $repository->find($id);
            if(isset($empresa)){
                $data['empresa'][] = $this->serializaEmpresa($empresa);
                $response = new JsonResponse($data, 200);

            }else{
                $response = new JsonResponse($this->badRequest(self::NO_CONTENT, "Id " . $id . " de empresa incorrecto"),200);
            }
        }
        
        return $response;
    }
    public function createEmpresaAction(Request $req){
            $response = new JsonResponse(["error"=>"no hay datos"], 400);
            if($req->request->get("nombre")==null ||
                $req->request->get("ciudad")==null ||
                $req->request->get("numEmpleados")==null
            ){
                $response = new JsonResponse($this->badRequest(self::NO_ALL_ELEMENTS,""),400);
            }else{
                $emp = new empresa();
                $emp->setNombre($req->request->get("nombre"));
                $emp->setCiudad($req->request->get("ciudad"));
                $emp->setnumEmpleados($req->request->get("numEmpleados"));
                $em = $this->getDoctrine()->getManager();
                $em->persist($emp);
                $em->flush();
                $response = new JsonResponse($this->serializaEmpresa($emp), 200);
                
            }
            return $response;
    }
}
