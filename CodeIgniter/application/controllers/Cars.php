
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller
{
    public function index()
    {
        $data['testVariable'] = 'This is a test variable just to show how to use in TWIG';
        $this->twig->display('carsShop/carsForm', $data);

    }
    public function saveTheNewCar() {

        $this->load->model('car');

        $this->car->brand = $this->input->post('brand');
        $this->car->model = $this->input->post('model');
        $this->car->year = $this->input->post('year');
        $this->car->color = $this->input->post('color');

        $this->car->insertCar();

        $this->load->view('carsShop/after_car_insert');
    }

    public function search()
    {
        $this->load->view('carsShop/carsSearch');
    }

    public function searchCars() {
        $this->load->model('car');

        $brand = $this->input->post('brand');
        $model = $this->input->post('model');

        if ($brand) {
            $data['car'] = $this->car->searchByBrand($brand);
        } elseif($model) {
            $data['car'] = $this->car->searchByModel($model);
        } elseif ($brand && $model) {
            $data['car'] = $this->car->searchByBrandAndModel($brand, $model);
        } else {
            $data['car'] =array();
        }
        $this->load->view('/carsShop/show_cars', $data);
    }

    public function listCars()
    {
        $this->load->model('car');

        $data['allCars'] = $this->car->getCars();

        $this->twig->display('carsShop/show_all_cars', $data);
    }
}
