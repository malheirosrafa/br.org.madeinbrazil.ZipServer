<?php

namespace ZipServerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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

        if(strlen($zip) !== 8)
          return new JsonResponse(array('error'=>'invalid zip'), JsonResponse::HTTP_BAD_REQUEST);

        //$address = $em->getRepository('ZipServerBundle:LogBairro')->find(1);

        $address = $this->getDoctrine()->getEntityManager()
            ->getRepository('ZipServerBundle:LogLogradouro')
            ->createQueryBuilder('logradoudo')
            ->select('partial logradoudo.{logNuSequencial, ufeSg, logNome},
                partial bairro.{baiNuSequencial, baiNo},
                partial cidade.{locNuSequencial, locNo}')
            ->join('logradoudo.baiNuSequencialIni', 'bairro')
            ->join('logradoudo.locNuSequencial', 'cidade')
            ->where('logradoudo.cep = :zip')
            ->setParameters(array('zip'=>$zip))
            ->getQuery()
            ->getSingleResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        if(!$address)
          return new JsonResponse(array('error'=>'not found'), JsonResponse::HTTP_NOT_FOUND);

        $logradouro['address'] = $address['logNome'];
        $logradouro['area'] = $address['baiNuSequencialIni']['baiNo'];
        $logradouro['city'] = $address['locNuSequencial']['locNo'];
        $logradouro['state'] = $address['ufeSg'];


        return new JsonResponse($logradouro);
    }
}
