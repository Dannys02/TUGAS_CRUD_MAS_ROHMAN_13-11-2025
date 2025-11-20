<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subjectModel;
use Illuminate\Support\Facades\DB;

class subjectController extends Controller
{
  public function create()
  {
    return view("subject.createSubject");
  }

  public function store(Request $request)
  {
    $subjects = $request->validate([
      "subject_name" => "required|string|max:255",
    ]);
    DB::table("subject")->insert([
      "subject_name" => $subjects["subject_name"],
      "created_at" => now(),
      "updated_at" => now(),
    ]);

    return redirect("/subject/index")->with(
      "success",
      "Registrer Student successfully"
    );
  }

  public function edit($id)
  {
    $subjects = subjectModel::find($id);
    return view("subject.editSubject", compact("subjects"));
  }

  public function index()
  {
    $subjects = subjectModel::all();
    return view("subject.indexSubject", compact("subjects"));
  }

  public function update(Request $request, $id)
  {
    $validated = $request->validate([
      "subject_name" => "required|string|max:255",
    ]);

    subjectModel::where("id", $id)->update([
      "subject_name" => $validated["subject_name"],
      "updated_at" => now(),
    ]);

    return redirect("/subject/index")->with(
      "succes",
      "update data succesfully"
    );
  }

  public function destroy($id)
  {
    $subjects = subjectModel::findOrFail($id);
    $subjects->delete();

    return redirect("/subject/index")->with("succes", "delete succesfully");
  }
}
