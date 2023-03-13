<?php

namespace App\Http\Controllers;

use App\Models\profession;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\AssignmentPersonInterface;
use Illuminate\View\View;

class AssignmentPersonController extends Controller
{
    protected $assignment_person_repo;

    public function __construct(AssignmentPersonInterface $assignment_person_repo )
    {
        $this->assignment_person_repo = $assignment_person_repo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $assignment_persons =   $this->assignment_person_repo->multiPage();
//    return $assignment_persons;
      return View('assignmentpersons.index' , compact('assignment_persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('assignmentpersons.create' );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data = $request->all();
       $assignment_persons =   $this->assignment_person_repo->store($data);

//        return $data;
        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assignment_person=   $this->assignment_person_repo->getById($id);
       // return $assignment_person->professions ;
        return View('assignmentpersons.view' ,  compact('assignment_person') );

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
