<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use File;
use Image;


class FlowerController extends Controller
{
	public function index()
    {
        return view('index');
    }
	public function manage()
    {
        $flowers = flower::orderby('name','asc')->get();
        return view('pages.manage', compact('flowers'));
    }
   
    public function create()
    {
        $flowers = flower::orderby('name','asc')->get();
        return view('pages.create', compact('flowers'));
    }


    public function store(Request $request)
    {
        $flower = new flower(); 
        $flower->name                              =   $request->name;
        $flower->description                       =   $request->description;
        $flower->quantity                          =   $request->quantity;
        $flower->price                      	   =   $request->price ;

       //Flower Image
        if( $request->image)
        {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/flowers/' . $img);
            Image::make($image)->save($location);
            $flower ->image =$img;

        }
        $flower->save();
        $notification = array(
            'message' => 'New Flower Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('createFlower');
    }

    
   
    public function edit($id)
    {
        $flower = flower::find($id);
        if(!is_null($flower) )  // if our flower isnt null
        {
            
            return view('pages.edit', compact('flower'));   //compact flower with edit page(edit.blade.php)
        }
        else{
            
            return redirect()->route('manage');
        }
    }

    public function update(Request $request, $id)
    {
        $flower = flower::find($id);  
        $flower->name                              =   $request->name;
        $flower->description                       =   $request->description;
        $flower->quantity                          =   $request->quantity;
        $flower->price                      	   =   $request->price ;
        $flower->image                             =   $request->image ;
        $flower->save();
        
       //Flower Image
        if( $request->image )
        {
            //if existing image
            if(File::exists('img/flowers/' . $flower->image ))
            {
                File::delete('img/flowers/' . $flower->image);
            }
            //upload new img
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/flowers/' . $img);
            Image::make($image)->save($location);
            $flower ->image =$img;

        }
        $flower->save();

        $notification = array(
            'message' => ' Flower Information Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('createFlower');

    }

    public function destroy($id)
    {
        $flower = Flower::find( $id);
        if( !is_null($flower) )
        {
            //if existing image
            if(File::exists('img/flowers/' . $flower->image ))
            {
                File::delete('img/flowers/' . $flower->image);
            }
            $flower->delete();

            $notification = array(
            'message' => ' Flower Record Deleted Successfully',
            'alert-type' => 'error'
        );
            return redirect()->route('createFlower')->with($notification);
        }
    }
}
