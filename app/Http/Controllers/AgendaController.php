<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use DateTime;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AgendaController extends Controller
{
  public function index()
  {
      $filter = Request::input('filter');
      $agenda = DB::table('agenda')
              ->join('categories','titles.id_category','=','categories.id_category')
              ->where('titles.title','LIKE','%'.$filter.'%')->get();
      return view('agenda.index');
  }

  public function create()
  {

      return view('agenda.create');
  }


  public function edit()
  {

      return view('agenda.edit');
  }


  public function delete()
  {

      destroy
  }
}
