<?php

namespace AppBundle\TimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	    public function createProductAction()
    {
        $category = new user();
        $category->setName('Main Products');

        $product = new Product();
        $product->setName('Foo');
        $product->setPrice(19.99);
        $product->setDescription('Lorem ipsum dolor');
        // relate this product to the category
        $product->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();

        return new Response(
            'Created product id: '.$product->getId()
            .' and category id: '.$category->getId()
        );
    }
    public function indexAction($name)
    {
        return $this->render('AppBundleTimeBundle:Default:index.html.twig', array('name' => $name));
    }
}
