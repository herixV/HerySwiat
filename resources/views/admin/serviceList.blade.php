@extends('admin.app')
   
@section('breadcrumbs')
<x-breadcrumbs title="Service-List" :links="[['name' => 'Service-List', 'url' => 'services']]" />
@endsection

@section('content')
<section id="table" class="padding-small">
    <div class="container-fluid padding-side">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <x-button route="{{ route('serviceCreate')}}" title="Create Service" variant="simple" />
        <table class="table table-hover align-middle shadow-sm rounded-3 overflow-hidden">
            <thead  style="background-color: var(--coffee-cream);">
                <tr>
                    <th scope="col" class="fw-normal ps-4">#</th>
                    <th scope="col" class="fw-normal">Name</th>
                    {{-- <th scope="col" class="fw-normal">Short Description</th> --}}
                    <th scope="col" class="fw-normal text-center">Image</th> <!-- Centrado -->
                    <th scope="col" class="fw-normal text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr class="{{ $loop->index % 2 == 0 ? 'bg-lightbrown' : 'bg-light' }}">
                    <td class="ps-4">1{{ $loop->iteration }}</td>
                    <td>{{ $service->name }}</td>
                    {{-- <td>{{ $service->short_description }}</td> --}}
                    <td class="text-center"> <!-- Contenedor centrado -->
                        <img src="{{ $service->image }}" 
                             class="img-thumbnail rounded-4" 
                             style="width: 300px; height: 100px; object-fit: cover;" 
                             alt="Image">
                    </td>
                    <td class="text-end pe-4">
                        {{-- {{ route('/', ['id'=>$service->id]) }} --}}
                        <a href="{{ route('serviceEdit', ['id'=>$service->id]) }}" class="btn btn-smaller me-2">Editar</a>
                        <form action="{{ route('serviceDelete', ['id' => $service->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-smaller bg-danger text-light" onclick="return confirm('¿Estás seguro de eliminar este servicio?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                {{-- <tr class="bg-light">
                    <td class="ps-4">2</td>
                    <td>Spa Completo</td>
                    <td>Incluye sauna, jacuzzi y masaje</td>
                    <td class="text-center">
                        <img src="ruta-de-otra-imagen.jpg" 
                             class="img-thumbnail rounded" 
                             style="width: 80px; height: 80px; object-fit: cover;" 
                             alt="Spa">
                    </td>
                    <td class="text-end pe-4">
                        <button class="btn btn-smaller me-2">Editar</button>
                        <button class="btn btn-smaller bg-danger text-light">Eliminar</button>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</section>

@endsection

@section('scripts')
@endsection
