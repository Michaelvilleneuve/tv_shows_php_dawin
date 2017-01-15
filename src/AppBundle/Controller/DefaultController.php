<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/shows", name="shows")
     * @Template()
     */
    public function showsAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $dql   = "SELECT a FROM AppBundle:TVShow a";
        $query = $em->createQuery($dql);

        $page = $request->query->getInt('page', 1);
        
        $paginator  = $this->get('knp_paginator');
        $shows = $paginator->paginate(
            $query,
            $page,
            10
        );

        $next_page = count($paginator->paginate($query, $page + 1, 10));
        $next_page = ($next_page) ? $page + 1 : false;

        $previous_page = $page - 1;
        
        return [
            'shows' => $shows,
            'next_page' => $next_page,
            'previous_page' => $previous_page
        ];

    }

    /**
     * @Route("/show/{id}", name="show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $repo = $em->getRepository('AppBundle:TVShow');

        return [
            'show' => $repo->find($id)
        ];        
    }

    /**
     * @Route("/calendar", name="calendar")
     * @Template()
     */
    public function calendarAction()
    {
        $em = $this->get('doctrine')->getManager();
        $repo = $em->getRepository('AppBundle:Episode');
        
        return [
            'episodes' => $repo->asCalendar()
        ];
    }

    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction()
    {
        return [];
    }

    /**
     * @Route("/search", name="search")
     * @Template()
     */
    public function searchAction(Request $request)
    {
        $search_data = $request->request->get('search');

        $em = $this->get('doctrine')->getManager();

        $show_bd = $em->getRepository('AppBundle:TVShow');
        $episode_bd = $em->getRepository('AppBundle:Episode');

        $episodes = $episode_bd->createQueryBuilder('ep')
                                ->where('ep.name LIKE :name')
                                ->setParameter('name',"%$search_data%")
                                ->getQuery()
                                ->getResult();

        $shows = $show_bd->createQueryBuilder('sh')
                                ->where('sh.name LIKE :name')
                                ->setParameter('name',"%$search_data%")
                                ->getQuery()
                                ->getResult();

        return [
            'shows' => $shows,
            'episodes' => $episodes,
            'search_data' => $search_data
        ];
    }
}
