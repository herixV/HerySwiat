@extends('admin.app')
   
@section('breadcrumbs')
<x-breadcrumbs title="Models-List" :links="[['name' => 'Models-List', 'url' => 'modelList']]" />
@endsection

@section('content')
<section id="table" class="padding-small">
    <div class="container-fluid padding-side">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <x-button route="{{ route('modelCreate')}}" title="Create Dress" variant="simple" />
        <table class="table table-hover align-middle shadow-sm rounded-3 overflow-hidden">
            <thead  style="background-color: var(--coffee-cream);">
                <tr>
                    <th scope="col" class="fw-normal ps-4">#</th>
                    <th scope="col" class="fw-normal">Name</th>
                    {{-- <th scope="col" class="fw-normal">Short Description</th> --}}
                    <th scope="col" class="fw-normal text-center">Price</th> <!-- Centrado -->
                    <th scope="col" class="fw-normal text-center">Image</th> <!-- Centrado -->
                    <th scope="col" class="fw-normal text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dresses as $dress)
                <tr class="{{ $loop->index % 2 == 0 ? 'bg-lightbrown' : 'bg-light' }}">
                    <td class="ps-4">1{{ $loop->iteration }}</td>
                    <td>{{ $dress->name }}</td>
                    <td>{{ $dress->price }}</td>
                    {{-- <td>{{ $service->short_description }}</td> --}}
                    <td class="text-center"> <!-- Contenedor centrado -->
                        <img src="{{ $dress->image ? asset($dress->image) : url('/assets/img/default2.jpg') }}" 
                             class="img-thumbnail rounded-4" 
                             style="width: 300px; height: 100px; object-fit: cover;" 
                             alt="Image">
                    </td>
                    <td class="text-end pe-4">
                        {{-- {{ route('/', ['id'=>$service->id]) }} --}}
                        <a href="{{ route('modelEdit', ['id'=>$dress->id]) }}" class="btn btn-smaller me-2">Editar</a>
                        <form action="{{ route('modelDelete', ['id' => $dress->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-smaller bg-danger text-light" onclick="return confirm('Are you sure you want to delete this dress?')">Eliminar</button>
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
