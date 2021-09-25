<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classs;
use App\Http\Resources\Classs as ClasssResource;
class ClassController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Classs::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Classs::create($request->all());
    }


    public function show(Classs $classs)
    {
        return $classs;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classs $classs)
    {
        $classs->update($request->all());
        return $classs;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classs $classs)
    {
       $classs->delete();
    }
    public function nnCountStudentOnClass(Classs $classs){
        return $classs->student->count();
    }
    public function allClassStudent(){
        $class=Classs::all();
        foreach($class as $cl){
           echo $cl->nameclass."<br/>";
           foreach($cl->student as $ki){
               echo $ki->name;
               echo "<br>";
           }
           echo "<hr>";
        }
    }
    public function showClass(Classs $classs){
        return $classs->student;
    }
    
    
}
