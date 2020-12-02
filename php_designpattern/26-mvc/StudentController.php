<?php

namespace MVC;

class StudentController
{
    private Student $model;
    private StudentView $view;

    public function __construct(Student $model, StudentView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function setStudentName(string $name)
    {
        $this->model->setName($name);
    }

    public function getStudentName(): string
    {
        return $this->model->getName();
    }

    public function setStudentRollNo(string $rollNo)
    {
        $this->model->setRollNo($rollNo);
    }

    public function getStudentRollNo(): string
    {
        return $this->model->getRollNo();
    }

    public function updateView()
    {
        $this->view->printStudentDetails($this->model->getName(), $this->model->getRollNo());
    }
}