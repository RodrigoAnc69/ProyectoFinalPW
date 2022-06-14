<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts() {
        return Product::all();
    }
    public function viweOfferts() {
        return view('ofertas');
    }

    public function postProducts(Request $request) {
        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "photo" => $request->photo
        ]);
        return ["result" => "ok"];
    }

    public function putProduct(Request $request) {
        $product = Product::where(["id" => $request->id])->first();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->photo = $request->photo;
        $product->update();
        return ["result" => "ok"];
    }

    public function deleteProduct($id) {
        $product = Product::where(["id" => $id])->first();
        $product->delete();
        return ["result" => "ok"];
    }

    public function listProducts() {
        return view("list");
    }

    public function newProducts() {
        return view("new");
    }

    public function editProduct($id) {
        return view("edit", ["id" => $id]);
    }
}
