<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\files;
use App\Models\Users;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = files::all();
        return view('act2.fileupload')->with([
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(files $file)
    {
        $file = files::find($file);
        return view('act2.addfile')->with([
            'file'=> $file
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, files $file)
    {
        $request->validate([
            'files' => 'required|max:2048',
    
           ]);
           
            $filename = $request->file('files')->getClientOriginalName();
            $name = pathinfo($filename, PATHINFO_FILENAME);

            $path = $request->file('files')->store('uploads', 'public');
    
            $extension = $request->file('files')->getClientOriginalExtension();
    
           #$file = new File;
           
           $file->name = $name;
           $file->extension = $extension;
           $file->path = $path;
            
           $file->save();
           
           if($file->save()){
                return redirect()->route('file.index')->with('success', 'File has been uploaded!');
           }
           else{
                return redirect()->route('file.create')->with('error','Error in uploading file');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(files $file)
    {

        return view('act2.show')->with([
            'file' => $file,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(files $file)
    {
        return view('act2.edit')->with([
            'file'=> $file,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, files $file)
    {
        $request->validate([
            'files' => 'max:2048',
            'name'=> 'required',
    
           ]);
    
           #$file = new File;
           $file->name = $request->name;
            
           $file->save();
           
           if($file->save()){
                return redirect()->route('file.index')->with('success', 'File has been uploaded!');
           }
           else{
                return redirect()->route('file.create')->with('error','Error in uploading file');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(files $file)
    {
        $file->delete();
        return redirect()->route('file.index');
    }
}
