<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    // This method will show all Services
    public function index(){
       echo " List Services";
    }

    public function create(){
        // echo " Create Services";

        return view('admin.services.create');
    }

    public function save(){
        echo "Save Services in DB";
    }

    public function edit(){
        echo "show Edit Services form";
    }

    public function update(){
        echo "Update Services in DB";
    }

    public function delete(){
        echo " Delete a Service";
    }
}
