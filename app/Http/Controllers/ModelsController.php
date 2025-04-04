<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Dress;
use App\Models\SocialNetworks;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function modelList()
    {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        $dresses = Dress::orderBy('id','desc')->paginate(6);
        return view(
            'admin.modelList',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'dresses' => $dresses
            ]
        );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        $dresses = Dress::orderBy('id','desc')->paginate(6);
        return view(
            'admin.modelCreate',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'dresses' => $dresses
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:30'],
            'slug' => ['required', 'max:30'],
            'price' => ['required', 'numeric'],
            'size' => ['required', 'max:10'],
            'short_description' => ['required', 'max:200'],
            'description' => ['required', 'max:800'],
            'image' => ['required','max:2048','mimes:jpg,jpeg,png']
        ]);
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/dresses'), $filename);
        $image = url('assets/img/dresses/' . $filename);
        $dress = new Dress();
        $dress->name = $request->name;
        $dress->slug = $request->slug;
        $dress->price = $request->price;
        $dress->size = $request->size;
        $dress->short_description = $request->short_description;
        $dress->description = $request->description;
        $dress->image = $image;
        $dress->save();
        return redirect()->route('modelList')->with('success', 'Model created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        $dresses = Dress::orderBy('id','desc')->paginate(6);
        $dress = Dress::where('id', $id)->first();
        if (!$dress) {
            return redirect()->route('modelList')->with('error', 'Dress not found');
        }
        return view(
            'admin.modelEdit',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'dresses' => $dresses,
                'dress' => $dress
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dress = Dress::find($id);
        if (!$dress) {
            return redirect()->route('modelList')->with('error', 'Dress not found');
        }
        $request->validate([
            'name' => ['required', 'max:30'],
            'slug' => ['required', 'max:30'],
            'price' => ['required', 'numeric'],
            'size' => ['required', 'max:10'],
            'short_description' => ['required', 'max:200'],
            'description' => ['required', 'max:800'],
            'image' => ['nullable', 'max:2048', 'extensions:jpg,png']
        ]);

        // Caso 1: Si se sube una nueva imagen
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/dresses'), $filename);
            $image = url('assets/img/dresses/' . $filename);

            // Eliminar la imagen anterior si existe
            if ($dress->image != "") {
                $oldImagePath = public_path('assets/img/dresses/' . basename($dress->image));
                if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }
        // Caso 2: Si el campo image está vacío (el usuario quiere borrar la imagen)
        elseif ($request->input('image') === null || $request->input('image') === '') {
            // Eliminar la imagen anterior si existe
            if ($dress->image != "") {
                $oldImagePath = public_path('assets/img/dresses/' . basename($dress->image));
                if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image = ""; // Guardar como vacío en la BD
        }
        // Caso 3: Si no se envía nada en el campo image (mantener la imagen actual)
        else {
            $image = $dress->image;
        }

        $dress->name = $request->name;
        $dress->slug = $request->slug;
        $dress->price = $request->price;
        $dress->size = $request->size;
        $dress->short_description = $request->short_description;
        $dress->description = $request->description;
        $dress->image = $image;
        $dress->save();

        return redirect()->route('modelList')->with('success', 'Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dress = Dress::find($id);
        if (!$dress) {
            return redirect()->route('modelList')->with('error', 'Dress not found');
        }
        // verificar si el dress existe
        if (!$dress) {
            return redirect()->route('modelList')->with('error', 'Model not found');
        }
        // Eliminar la imagen anterior si existe
        if ($dress->image != "") {
            $oldImagePath = public_path('assets/img/dresses/' . basename($dress->image));
            if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $dress->delete();
        return redirect()->route('modelList')->with('success', 'Model deleted successfully');
    }
}
