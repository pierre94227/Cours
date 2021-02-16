<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Profil;
use App\Entity\Role;

class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Profil::class);
        $profils=$repo->findBy( [ ], ['id' => 'DESC'], 3);
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'profils' => $profils
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function home()
    {
        $repo = $this->getDoctrine()->getRepository(Profil::class);
        $profils = $repo->findAll();

        return $this->render('profil/home.html.twig', [
            'profils' => $profils
        ]);
    }

    /**
     * @Route("/profil/{id}", name="profil_show")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Profil::class);
        $profil = $repo->find($id);

        return $this->render('profil/show.html.twig', [
            "profil" => $profil
        ]);
    }
    /**
     * @Route("/roles", name="roles")
     */
    public function roles()
    {
        $repo = $this->getDoctrine()->getRepository(Role::class);
        $roles = $repo->findAll();

        return $this->render('profil/roles.html.twig', [
            "roles" => $roles
        ]);
    }
    /**
     * @Route("/roles/{id}", name="role_show")
     */
    public function role($id)
    {
        $repo = $this->getDoctrine()->getRepository(Role::class);
        $role = $repo->find($id);

        return $this->render('profil/role.html.twig', [
            "role" => $role
        ]);
    }
}
