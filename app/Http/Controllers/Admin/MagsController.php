<?php

namespace App\Http\Controllers\Admin;
use App\Mag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MagFormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class MagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mags = Mag::all();
        return view('admin.mags', compact('mags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MagFormRequest $request)
    {
        $mag = new Mag(array(
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'no' => $request->get('no'),
                'image' => $request->file('image')->getClientOriginalName(),
                'intro' => $request->get('intro'),
                'status' => $request->get('status'),
                'link1' => $request->get('link1'),
                'link2' => $request->get('link2'),
                'link3' => $request->get('link3'),
                'date' => $request->get('date'),
                ));
                        		$fileName = $mag->no . '.' .
                $request->file('image')->getClientOriginalExtension();

                $request->file('image')->move(
                base_path() . '/public/images/mags/', $fileName
                        );
                $mag->save();
                 return redirect('/admin/mag')->with('status', 'Новый номер опубликован!'
        );        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
