<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    public function login(AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();

        $defaults = array(
            '_target_path' => $this->get('router')->generate('app_lucky_number')
        );

        $form = $this->createFormBuilder($defaults, [
            'action' => $this->get('router')->generate('login'),
            'method' => 'POST',
        ])
            ->add('_username', TextType::class)
            ->add('_password', PasswordType::class)
            ->add('_target_path', HiddenType::class)
            ->getForm();

        return $this->render('security/login.html.twig', [
            'form' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

}