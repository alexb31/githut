<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller
{
    /**
     * @Route("/", name="githut")
     */
    public function githutAction(Request $request)
    {
        return $this->render('githut/index.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
        return $this->render('githut/profile.html.twig', [
            'avatar_url' => 'https://avatars1.githubusercontent.com/u/17199383?v=3',
            'name' => "Alexandre Bornstein",
            'blog' => "www.alexandrebornstein.fr",
            'social_data' => [
                'Followers' => 2,
                'Following' => 4,
                'Public Repos' => 12,
            ]
        ]);
    }

}