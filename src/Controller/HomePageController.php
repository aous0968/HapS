<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Elasticsearch\ClientBuilder;
use Symfony\Component\HttpFoundation\Request;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="app_home_page")
     */
    public function index(Request $request): JsonResponse
    {
        // $client = ClientBuilder::create()
        // ->setHosts(['http://localhost:9200'])
        // ->build();

        // $params = [
        //     'index' => 'tut_index',
        //     'id' => '1',
        //     'body' => [
        //         'first_name' => 'aous3 new one',
        //         'tut_title' => 'Elastic Search 3'
        //     ]
        // ];
        
        
        // // Create the index
        // $response = $client->index($params);

        // dd($request , $response);
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomePageController.php',
        ]);
    }
}
