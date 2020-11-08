<?php

namespace App\Controller;

use App\Entity\Example;
use App\Repository\ExampleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    /**
     * @Route("/example", name="example")
     */
    public function __invoke(ExampleRepository $repository): Response
    {
        $entity = (new Example())->setTitle('example - ' . time());

        $repository->save($entity);

        dump($repository->findAll());

        return $this->render('example/index.html.twig', [
            'controller_name' => 'ExampleController',
        ]);
    }
}
