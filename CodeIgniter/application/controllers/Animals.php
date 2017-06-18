<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animals extends CI_Controller
{
    public function index()
     {
         $data['action'] = 'saveNewAnimal';
         $data['button'] = 'Save';
         $this->twig->display('animalsView/zooForm');
     }

    public function saveNewAnimal()
        {
            $this->load->model('animal');

            $this->animal->nameOfTheType = $this->input->post('nameOfTheType');
            $this->animal->kind = $this->input->post('kind');
            $this->animal->habitat = $this->input->post('habitat');
            $this->animal->nameOfTheAnimal = $this->input->post('nameOfTheAnimal');
            $this->animal->age = $this->input->post('age');

            $this->animal->insertAnimal();

            $this->twig->display('animalsView/afterInsertAnimal');
        }

    public function searchAnimal() {
        $this->load->model('animal');

        $nameOfTheType = $this->input->post('nameOfTheType');
        $habitat = $this->input->post('habitat');

        if ($nameOfTheType && $habitat) {
            $data['zoo'] = $this->animal->searchByHabitatAndByType($nameOfTheType, $habitat);
        } elseif ($nameOfTheType) {
            $data['zoo']= $this->animal->searchByType($nameOfTheType);
        } elseif ($habitat) {
            $data['zoo'] = $this->animal->searchByHabitat($habitat);
        } else {
            $data['zoo'] = array();
        }

        $this->twig->display('animalsView/showAllAnimals', $data);
    }

    public function listAnimals()
    {
        $this->load->model('animal');
        $data['zoo'] = $this->animal->getAllAnimals();

        $this->twig->display('animalsView/showAllAnimals',$data);
    }

    public function deleteAnimal($id)
    {
        $this->load->model('animal');

        $this->animal->deleteById($id);

        $data['zoo'] = $this->animal->getAllAnimals();

        $this->twig->display('animalsView/showAllAnimals',$data);
    }

    public function updateForm($id)
    {
        $data['action'] = 'updateAnimal';
        $data['button'] = 'update info';
        $this->load->model('animal');

        $data['zoo'] = $this->animal->getById($id);

        $data['id'] = $id;

        $this->twig->display('animalsView/zooForm', $data);
    }

    public function updateAnimal($id)
    {
        $this->load->model('animal');

        $this->animal->nameOfTheType = $this->input->post('nameOfTheType');
        $this->animal->kind = $this->input->post('kind');
        $this->animal->habitat = $this->input->post('habitat');
        $this->animal->nameOfTheAnimal = $this->input->post('nameOfTheAnimal');
        $this->animal->age = $this->input->post('age');

        $this->animal->updateAnimal($id);

        $data['zoo'] = $this->animal->getAllAnimals();

        $this->twig->display('animalsView/showAllAnimals',$data);
    }


}