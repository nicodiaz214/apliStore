<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Category;
use App\User;
use Auth;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::paginate(3);
        return view('applications.index', [
            'title' => "Listado de Apps",
            'applications' => $applications,
        ]);
    }

    public function search(Request $request)
    {
        $applications =Application::name($request->get('name'))->orderBy('name', 'ASC')->paginate(3);

        return view('applications.index',  ['applications' => $applications]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create',[
            'application' => new Application,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($request->hasFile('image_url')){
            $file = $request->file('image_url');
            $name = time().$file->getClientOriginalName();
            $destinationPath = public_path('/img/');
            $file->move($destinationPath, $name);
        }

        $application = Application::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'image_url' => 'img/'.$name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            ]);

        return redirect('/developer/applications/add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::find($id);

        return view('applications.show', [
            'application' => $application,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);

        return view('applications.edit',[
            'application' => $application,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'image_url' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $application = Application::find($id);

        $application-> update($request->all());

        return redirect('/applications/' . $products->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function users() {
        return $this->belongsToMany('App\User', 'user_id', 'application_id');
    }

}
