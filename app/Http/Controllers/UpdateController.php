<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table1;

class UpdateController extends Controller
{
    //
public function getProduct($id){
    $gotproduct = Table1::findorfail($id);
    return $gotproduct;

}

    public function add(Request $request){

$request->validate([
'NameProduct' =>'string|required|max:255',
'Price'=>'integer|required|max:1000 '
]);

//Now code to push into table
$productdetails = Table1::create([
    'NameProduct' => $request->NameProduct,
    'Price' => $request->Price
]);


        return redirect('/')->with('success', 'Product Added Succesfully');
    }

    public function edit(Request $request , $id){

    $productbyid = Table1::findorFail($id);


        return view('update',compact('productbyid'));
    }

public function update(Request $request , $id){

$request->validate([
    'NameProduct'=> 'string|required|max:255',
    'Price'=>'integer|required|max:1000'
]);

$product = $this->getproduct($id);


$product->update([
'NameProduct' => $request->NameProduct,
    'Price' => $request->Price
]);

return redirect('/')->with('success','Updated Successfuly');
}

public function delete(Request $request, $id){

    
    $product = $this->getproduct($id);
    $product->delete();

    return redirect('/')->with('success', 'Deleted Successfully');


}

}
