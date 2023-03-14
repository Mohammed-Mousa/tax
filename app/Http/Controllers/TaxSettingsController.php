<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\TaxSettingsInterface;
class TaxSettingsController extends Controller
{
    protected $tax_settings_repo;

    public function __construct(TaxSettingsInterface $tax_settings_repo )
    {
        $this->tax_settings_repo = $tax_settings_repo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $percentege =  $this->tax_settings_repo->getAllPercentege();
        $company_slides =  $this->tax_settings_repo->getAllCompanySlides();
        $freelance_slides =  $this->tax_settings_repo->getAllFreelanceSlides();

        return view('taxsettings.index',compact('percentege' , 'company_slides','freelance_slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $percentege =   $this->tax_settings_repo->storePercentege($data);
        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
