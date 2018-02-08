<?php

namespace UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UsuariosBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use UsuariosBundle\Form\UserType;
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@Usuarios\Default\index.html.twig');
    }
    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function usuariosAction(){
            return $this->render('@Usuarios\Default\usuarios.html.twig');
    }
    /**
     * @Route("/register", name="user_registation")
     */
    public function registerAction(Request $request){
        // Creamos el formulario
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        // Para post: Handle enviado
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $password = $this->get("security.password_encoder")
            ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            // Guardamos usuario!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new response("Usuario Registrado");
        }
        return $this->render(
            '@Usuarios/Default/register.html.twig',
            array('form' => $form->createView())
        );        
    }
    /**
     * @Route("/usuarios/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authUtils = $this->get('security.authentication_utils');
            // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('@Usuarios/Default/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }    
}
