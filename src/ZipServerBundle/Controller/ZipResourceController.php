<?php

namespace ZipServerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ZipResourceController extends Controller
{
    /**
     * @Route(
     *    "/{zip}.{_format}",
     *    defaults={"_format": "json"},
     *    requirements={
     *         "_format": "json"
     *     }
     * )
     * @Method("GET")
     */
    public function getAction(Request $request, $zip, $_format)
    {
        $zip = preg_replace("/[^0-9]/", "", $zip);

        //TODO: Retornar Bad Request
        if(strlen($zip) !== 8)
          return new JsonResponse();

        return new JsonResponse(array('zip' => $zip));
    }
}
