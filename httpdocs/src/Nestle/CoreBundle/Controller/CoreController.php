<?php

namespace Nestle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class CoreController extends Controller
{
    public function indexAction()
    {
        throw new AccessDeniedHttpException();
    }

    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        
        if ($session->isStarted()) {
            // get the login error if there is one
            if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            } else {
                $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
                $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            }
            
            return $this->render('NestleCoreBundle:Core:login.html.twig', array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            ));
        } else {
            return $this->redirect($this->generateUrl('nestle_web_homepage'));
        }
    }

    public function loginCheckAction()
    {

    }

    public function forbiddenAction()
    {
        throw new AccessDeniedHttpException();
    }
}
