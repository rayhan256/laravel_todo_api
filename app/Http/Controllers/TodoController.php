<?php
namespace App\Http\Controllers;
use App\http\Controllers\BaseControllerApi as ControllerApi;
use App\Models\Todos;
use Illuminate\Http\Request;

class TodoController extends Controller {
    //
    public function index() {
        return Todos::all();
    }

    public function insert(request $req) {
        $todos = new Todos;
        $todos->todo = $req->todo;
        $todos->save();
        return "Data Berhasil Diinput";

    }

    public function update(request $req, $id) {
        $todo = $req->todo;

        $todos = Todos::find($id);
        $todos->todo = $todo;
        $todos->save();

        return "Data Berhasil Diupdate";
    }

    public function destroy($id) {
        Todos::find($id)->delete();
        return "Data Berhasil Didelete";
    }
}
