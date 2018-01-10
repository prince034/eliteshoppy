<?php
namespace App\Http\Controllers;


use App\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class FormController extends Controller
{
    public function dataView(Request $request){

        DB::enableQueryLog();

        $request->validate([
            'name'=>'required',
            'city'=>'required',
        ],['name.required'=>'I :attribute am required i m name']);


        $name = $request->input('name');
        $city = $request->input('city');

        $request->session()->put('name', $name);
        $value = session()->get('name', 'default');
        $data = DB::table('students')->where('id','>',1)->get();
        //dd($data);

        //dd(DB::getQueryLog());
        //DB::table('students')->insert(['stud_name' => 'spiderman', 'stud_city'=>'delhi', 'stud_class'=>'XII', 'age'=>15]);
        return view('view', ['success'=>true,'name'=>$name,'city'=>$city, 'data'=>$data,'value'=>$value]);
    }


    public function insertData(Request $data){
        $stud_name=$data->input('stud_name');
        $stud_city=$data->input('stud_city');
        $stud_class=$data->input('stud_class');
        $age=$data->input('age');

        $query=DB::table('students')->insert(['stud_name' => $stud_name, 'stud_city'=>$stud_city, 'stud_class'=>$stud_class, 'age'=>$age]);
if($query){
    $success=true;
}else {
    $success=false;
}
        return view('profile',['stud_name'=>$stud_name,'success'=>$success]);
    }


    public function editData($id){
    $data=DB::table('students')->where('id','=',$id)->first();
        return view('profile', ['id'=>$id,'data'=>$data]);
    }

    public function getPersons(){
        $data=Utils::MongoDB()->collection('persons')->where('id','=',1)->first();



        return view('persons',['data'=>$data,'value'=>$value]);
    }


}