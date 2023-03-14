<?php

namespace App\Repositories\Repositories;

use App\Models\assignment_person;
use App\Models\profession;
use App\Repositories\Interfaces\AssignmentPersonInterface;

class AssignmentPersonRepository implements AssignmentPersonInterface
{
    public function getAll()
    {
        $assignment_person = assignment_person::all();
        return $assignment_person;
    }

    public function store($data)
    {
        $dataprof = $data['professions'];
        unset($data['professions']);
        $assignment_person = assignment_person::create($data);
        foreach ($dataprof as $profession ){
            $profession['assignment_person_id'] = $assignment_person->id;
            $professiond =profession::create($profession);
        }
        return $assignment_person;
    }

    public function update($id , $data)
    {
        $assignment_person = assignment_person::findOrFail($id);
        $assignment_person->update($data);
        return $assignment_person;
    }

    public function delete($id)
    {
        $assignment_person = assignment_person::findOrFail($id);
        $assignment_person->delete();
        return true;
    }

    public function getById($id)
    {
        $assignment_person = assignment_person::findOrFail($id);
        $assignment_person->professions = profession::where('assignment_person_id',$assignment_person->id)->get();
        return $assignment_person;
    }

    public function multiPage()
    {
        $assignment_person = assignment_person::paginate(10);
        return $assignment_person;
    }

}
