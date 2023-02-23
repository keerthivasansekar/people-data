<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $session;
    private $dataCount;
    private $dataPosition;
    private $name;
    private $location;

    public function __construct(){
        $this->session = \Config\Services::session();
        $this->dataCount = $this->session->dataCount;
        $this->dataPosition = $this->session->dataPosition;
    }

    public function index()
    {
        $this->session->dataCount = 0;
        $this->session->dataPosition = 0;
        return view('people_data');
    }

    public function getPerson()
    {
        $allPeople = json_decode(file_get_contents(base_url('/public/assets/data/data.json')), true);
        if ($this->dataPosition < count($allPeople)) {
            $this->session->dataCount += 1;
            $this->session->dataPosition += 1;
            $this->name = $allPeople[$this->dataPosition]['name'];
            $this->location = $allPeople[$this->dataPosition]['location'];
            $data = [
                'personCount' => $this->dataCount + 1,
                'name' => $this->name,
                'location' => $this->location,
            ];
            return view('person_data_cell', $data);
        } else {
            return null;
        }
    }
}
