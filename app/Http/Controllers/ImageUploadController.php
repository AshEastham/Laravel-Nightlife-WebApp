<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->only(['index','fileUpload']);
    }
    
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    {

        return view('imageUpload');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function fileUpload(Request $request)
    {
        $image = $request->file('image');
        $input = $image->getClientOriginalName();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input);

        return back()

            ->with('success','You have successfully uploaded your image.')

            ->with('image', $input);

    }
}
