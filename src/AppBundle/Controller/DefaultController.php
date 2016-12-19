<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function showsAction()
    {
        $em = $this->get('doctrine')->getManager();
        $repo = $em->getRepository('AppBundle:TVShow');

        return [
            'shows' => $repo->findAll()
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
        return [];
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
