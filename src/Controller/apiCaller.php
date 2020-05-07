<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Curl\Curl;
use function App\Controller\curl;

class apiCaller extends AbstractController
{

    /**
     * @Route("/result", name="api_call")
     * @param Request $request
     * @return Response
     */

    public function apiCall(Request $request){

        $searchIn = '';
        $apiUrl = "https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&srsearch=".$searchIn."";
        function curl($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }


        $apiArray = curl($apiUrl);
        $apiDecode = json_decode($apiArray, true);

        $searchTitle = $apiDecode['query']['search'][0]['title'];
        $searchInfo = $apiDecode['query']['search'][0]['snippet'];

        //$location = $weatherDecode['name'];
        //$degrees = $weatherDecode['main']['temp'];
        //$description = $weatherDecode['weather'][0]['main'];

        var_dump($searchTitle);

        return $this->render('result.html.twig', [
            'searchTitle' => $searchTitle,
            'searchInfo' => $searchInfo

        ]);
    }

}