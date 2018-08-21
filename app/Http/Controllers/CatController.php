<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Product;
use App\Category;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // \DB::enableQueryLog();
        $cat = Cat::isBirthday()->get(); // query scope
        // dd(\DB::getQueryLog());
        $cat= Cat::all();  //trả về giá trị là 1 Collection
        dd($cat, $cat->toArray());// toArray() là 1 method mà Collection hổ trợ để chuyển định dạng data thành array
        // dd($cat);
        return view('cats.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data=[
        //     'name' => 'meo 2',
        //     'dob' => '2000-10-10',
        //     'breed_id' => 1
        // ];
        // $cat= Cat::create($data);

        // dd($cat);



        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $name= $request->get('name');
        $dob= $request->get('dob');
        $catData= [
            'name' => $name,
            'dob' => $dob
        ];
        $cat= Cat::create($catData);
        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        $data= $request->all();
        $cat->update($data);
        return redirect()->route('cats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($cat);
        $cat= Cat::find($id);
        $cat->delete();
        return redirect()->route('cats.index');
    }
}
