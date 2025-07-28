<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table1;
use App\Models\Table2;


class MoveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $getdetails1 = $this->gettable1();
        $getdetails2 = $this->gettable2();

        return view('tables', compact('getdetails1','getdetails2'));
    }

    public function gettable1(){
        $getalldetails1 = Table1::all();

        return $getalldetails1;
    }

    public function gettable2(){
        $getalldetails2 = Table2::all();

        return $getalldetails2;
    }



    public function moved(Request $request, $id){
        

        $getproductbyid1 = Table1::findorfail($id);

        Table2::create([
            'nameNameProduct' => $getproductbyid1->NameProduct, // ✅ this was missing
            'id' => $getproductbyid1->id,
            'price' => $getproductbyid1->Price,
            'bought' => 'True',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    


        return redirect('Move')->with('success','Moved Successfully');
    }

public function deletetwo($id)
{
    $getproductbyid2 = Table2::findorfail($id);
    $getproductbyid2->delete();
    return redirect('Move')->with('success','deleted');
}

}
