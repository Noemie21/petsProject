<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class Mailer
{
    private $mailerInterface;

    public function __construct(MailerInterface $mailerInterface)
    {
      $this->mailerInterface = $mailerInterface;  
    }

    public function sendMail($address) {
        $email = new Email();
        $email->from("contact@petsProject.fr")
            ->to($address)
            ->subject("Bienvenue sur mon site")
            ->text("hello")
            ->html("<h1>Bienvenue</h1><br><p>Voici mon premier mail</p>");
        
        //$this->mailerInterface->send($email);
        
        return "ok";
    }
}