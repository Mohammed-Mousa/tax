<?php

namespace App\Repositories\Repositories;

use App\Models\company_slide;
use App\Models\freelance_slide;
use App\Models\percentege;
use App\Repositories\Interfaces\TaxSettingsInterface;

class TaxSettingsRepository implements TaxSettingsInterface
{


    public function getAllPercentege()
    {
        $pertcentegs = percentege::all();
        return $pertcentegs;    }

    public function storePercentege($data)
    {
        $percentege = percentege::create($data);
        return $percentege;    }

    public function updatePercentege($id, $data)
    {
        $percentege = percentege::findOrFail($id);
        $percentege->update($data);
        return $percentege;    }

    public function deletePercentege($id)
    {
        $percentege = percentege::findOrFail($id);
        $percentege->delete();
        return true;    }

    public function getPercentegeById($id)
    {
        $percentege = percentege::findOrFail($id);
        return $percentege;    }

    public function getAllCompanySlides()
    {
        $company_slides = company_slide::all();
        return $company_slides;      }

    public function getCompanySlideById($id)
    {
        $company_slide = company_slide::findOrFail($id);
        return $company_slide;     }

    public function updateCompanySlide($id, $data)
    {
        $company_slide = company_slide::findOrFail($id);
        $company_slide->update($data);
        return $company_slide;     }

    public function getAllFreelanceSlides()
    {
        $company_slides = freelance_slide::all();
        return $company_slides;      }

    public function getFreelanceSlideById($id)
    {
        $freelance_slide = freelance_slide::findOrFail($id);
        return $freelance_slide;     }

    public function updateFreelanceSlide($id, $data)
    {
        $freelance_slide = freelance_slide::findOrFail($id);
        $freelance_slide->update($data);
        return $freelance_slide;      }
}