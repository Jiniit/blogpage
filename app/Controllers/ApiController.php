<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class ApiController extends Controller
{
    public function fetchApiData()
    {
        $httpClient = \Config\Services::curlrequest();

        $apiUrl = 'https://jsonplaceholder.typicode.com/posts';
        $response = $httpClient->get($apiUrl);
        $responseBody = $response->getBody();
        $responseData = json_decode($responseBody, true);
        $db = \Config\Database::connect();
        $builder = $db->table('api_blogs');

        foreach ($responseData as $data) {
            $builder->insert($data);
        }

        return 'API data inserted into the database.';
    }
}
