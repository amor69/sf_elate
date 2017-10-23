<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/about.html.twig');
    }

    /**
     * @Route("/galery", name="galery")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function galeryAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/gallery.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/blog.html.twig');
    }

    /**
     * @Route("/contacts", name="contacts")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/contacts.html.twig');
    }
}
