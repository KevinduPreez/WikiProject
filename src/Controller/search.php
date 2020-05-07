<?php

namespace App\Controller;

use App\Controller\Form\ArticleFormType;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class search extends AbstractController
{
    /**
     * @Route("/search", name="search")
     * @param Request $request
     * @return Response
     */

    public function search(Request $request){
        $searchTerm = 'Rugby';
        $form = $this->createForm(ArticleFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();
            $searchData = $data['Search'];
            $searchDataExplode = explode(" ", $searchData);
            $searchTerm = implode("%20", $searchDataExplode);
        }
        $apiUrl = "https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&srsearch=".$searchTerm;
        $searchUrl = "https://en.wikipedia.org/wiki/".$searchTerm;
        $searchImageUrl = "https://en.wikipedia.org/w/api.php?action=query&titles=".$searchTerm."&prop=pageimages&format=json&pithumbsize=100";


        function curl($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        $imageApiArray = curl($searchImageUrl);
        $imageApiDecode = json_decode($imageApiArray, true);

        $apiArray = curl($apiUrl);
        $apiDecode = json_decode($apiArray, true);
        $searchTitle = $apiDecode['query']['search'][0]['title'];
        $searchInfo = $apiDecode['query']['search'][0]['snippet'];

        //$pageId = $apiDecode['query']['search'][0]['pageid'];
        //$searchImage = $imageApiDecode['query']['pages'][$pageId]['thumbnail']['source'];

        return $this->render('result.html.twig', [
            'searchForm'=> $form->createView(),
            'searchTitle'=> $searchTitle,
            'searchInfo'=> $searchInfo,
            'searchUrl'=>$searchUrl,
            'searchTerm'=>$searchTerm
            //'searchImage'=>$searchImage
        ]);
    }
}