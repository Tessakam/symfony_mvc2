<?php


namespace App\Entity;



class showMyName
{
    private int $id;
    private string $name = "Unknown";


    public function getId(): int
    {
        return $this->id;
    }

    public function showMyName(): string
    {
        return $this->name;
    }

    // If the user arrives here from the change your name form, save his choice in a $_SESSION variable.
    // After the form is saved, redirect the user to the showMyName action. This should change the URL.
    //  You should not be able to go to this URL if the method is not a POST request.
    public function getName(): string
    {
        $session = new Session();
        $saveSession = $session->get('name');

        if (isset($_POST['name'])) {
            $session->set('name', $_POST['name']);
            $this->name = $_POST['name'];
        } elseif (isset($saveSession)) {
            $this->name = $saveSession;
        }
        return $this->name;
    }
}