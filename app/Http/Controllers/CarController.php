<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('pages.index');
    }


    public function carList()
    {
        return view('pages.car_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create_car');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cars = new Car();

        $cars->make = $request->make;
        $cars->model = $request->model;
        $cars->year = $request->year;
        $cars->plate_no = $request->plate_no;

        $cars->save();


        return redirect('create-car')->with(['success' => 'New Car created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


        $cars = Car::all();

        return view('pages.car_list',['cars'=>$cars]);

    }



}
