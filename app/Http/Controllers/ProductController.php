<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('pasarbatik.user.services.product.insert');
    }

    public function store(Request $request)
    {
        $request['slug'] = createSlug($request['name']);
        $request['partner_id'] = Auth::user()->provider->id;
        $product = Product::create($request->all());

        $product->productimage()->sync($request['product_images']);

        Session::flash('success', 'Berhasil');
        return redirect()->back();
    }

    public function uploadImage(Request $request)
    {
        $uploadedFile = $request->file('file');

        $fileName = uniqid() . $uploadedFile->getClientOriginalName();
        $path = 'uploads/product/';
        $size = $uploadedFile->getSize();

        Storage::disk('public')->putFileAs($path,$uploadedFile,  $fileName);

        $upload = ImageProduct::create([
            'filename' => $fileName,
            'path' => $path,
            'size' => $size,
        ]);

        return response()->json([
            'id' => $upload->id
        ]);
    }

    public function deleteImage($id)
    {
        $image = ImageProduct::find($id);

        $fullPath = $image['path'] . $image['filename'];

        Storage::disk('public')->delete($fullPath);

        $image->delete();

        return response('success', 204);
    }
}
