<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\laptops;

class LaptopController extends Controller
{

    public function index()
    {
        return laptops::get();
    }

    public function store (Request $request)
    {
        try {
        $laptops = new laptops;
        $laptops->fill($request->validated())->save();

        
        return $laptops;

    } catch(\Exception $exception) {
        throw new HttpException(400, "Invalid data - {$exception->getMessage()}");
    }
    }


    public function show($id)
    {
        $laptops = laptops::findorfail($id);
        return $laptops;
    }
    
    public function update(Request $request, $id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
    
        try { 
            $laptops = Laptops::find($id);
            $laptops->fill($request->validated())->save();
            
            return $laptops;
            
    } catch(\Exception $exception) {
        throw new HttpException(400, "Invalid data - {$exception->getMessage()}");
    }
}

    public function destroy($id)
    {
        $laptops = Laptops::findOrfail($id);
        $laptops->delete();

        return response()->json(null, 204);
    }
}