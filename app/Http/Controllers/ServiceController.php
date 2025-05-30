<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Services;
use App\Models\SocialNetworks;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function serviceList()
    {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        $services = Services::orderBy('id','desc')->get();
        return view(
            'admin.serviceList',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'services' => $services
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
        $services = Services::orderBy('id','desc')->take(5)->get();
        return view(
            'admin.serviceCreate',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'services' => $services
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
            'short_description' => ['required', 'max:200'],
            'description' => ['required', 'max:500'],
            'is_featured' => 'nullable',
            'image' => ['required','max:2048','extensions:jpg,png']
        ]);
    
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/services'), $filename);
        $image = url('assets/img/services/' . $filename);

        $services = new Services();
        $services->name = $request->name;
        $services->slug = $request->slug;
        $services->short_description = $request->short_description;
        $services->description = $request->description;
        $services->is_featured = $request->has('is_featured') ? true : false;
        $services->image = $image;
        $services->save();
        return redirect()->route('serviceList')->with('success', 'Service created successfully');

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
        $services = Services::orderBy('id','desc')->take(5)->get();
        $service = Services::find($id);
        if (!$service) {
            return redirect()->route('serviceList')->with('error', 'The service does not exist.');
        }


        return view(
            'admin.serviceEdit',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks,
                'services' => $services,
                'service' => $service
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::find($id);
        if (!$service) {
            return redirect()->route('serviceList')->with('error', 'The service does not exist.');
        }
        $request->validate([
            'name' => ['required', 'max:30'],
            'slug' => ['required', 'max:30'],
            'short_description' => ['required', 'max:200'],
            'description' => ['required', 'max:500'],
            'is_featured' => 'nullable',
            'image' => ['nullable','max:2048','extensions:jpg,png']
        ]);
        
        // Caso 1: Si se sube una nueva imagen
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/services'), $filename);
            $image = url('assets/img/services/' . $filename);
            
            // Eliminar la imagen anterior si existe
            if ($service->image != "") {
                $oldImagePath = public_path('assets/img/services/' . basename($service->image));
                if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }
        // Caso 2: Si el campo image está vacío (el usuario quiere borrar la imagen)
        elseif ($request->input('image') === null || $request->input('image') === '') {
            // Eliminar la imagen anterior si existe
            if ($service->image != "") {
                $oldImagePath = public_path('assets/img/services/' . basename($service->image));
                if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image = ""; // Guardar como vacío en la BD
        }
        // Caso 3: Si no se envía nada en el campo image (mantener la imagen actual)
        else {
            $image = $service->image;
        }

        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->is_featured = $request->has('is_featured') ? true : false;
        $service->image = $image;
        $service->save();

        return redirect()->route('serviceList')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar el servicio por su ID
        $service = Services::find($id);
        if (!$service) {
            return redirect()->route('serviceList')->with('error', 'The service does not exist.');
        }

        // Verificar si el servicio existe
        if (!$service) {
            return redirect()->route('serviceList')->with('error', 'Service not found');
        }

        // Eliminar la imagen anterior si existe
        if ($service->image != "") {
            $oldImagePath = public_path('assets/img/services/' . basename($service->image));
            if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $service->delete();

        return redirect()->route('serviceList')->with('success', 'Service deleted successfully');

    }
}
