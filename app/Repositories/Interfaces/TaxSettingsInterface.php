<?php

namespace App\Repositories\Interfaces;

interface TaxSettingsInterface
{
    public function getAllPercentege();
    public function storePercentege($data);
    public function updatePercentege($id , $data);
    public function deletePercentege($id);
    public function getPercentegeById($id);



    public function getAllCompanySlides();
    public function getCompanySlideById($id);
    public function updateCompanySlide($id , $data);

    public function getAllFreelanceSlides();
    public function getFreelanceSlideById($id);
    public function updateFreelanceSlide($id , $data);


}
