<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\TaskType;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function new(Request $request): Response
    {
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('Tomorrow'));

        $form = $this->createForm(TaskType::class, $task);

        return $this->render('task/new.html.twig', [
            'from' => $form,
        ]);

        // $form = $this->createFormBuilder($task)
        //     ->add('task', TextType::class)
        //     ->add('dueDate', DateType::class)
        //     ->add('save', SubmitType::class, ['label' => 'Create Task'])
        //     ->getForm();
    }
}
