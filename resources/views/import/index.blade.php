@extends('layouts.app', ['title' => 'import', 'robots' => 'noindex'])

@section('content')
<main id="content" class="flex flex-col gap-12 p-24">

    <section class="flex items-center justify-center gap-4">
        <a href="{{ route('import.index') }}" class="bg-gray-600 text-white p-4 rounded-md hover:text-white hover:bg-gray-800">Import Produit & Plan</a>
        <a href="{{ route('contacts.index') }}" class="bg-gray-600 text-white p-4 rounded-md hover:text-white hover:bg-gray-800">Contacts</a>
    </section>

    <!-- import fichier excel de produit -->
    <section class="bg-gray-50 p-4 border">
        <h2 class="font-bold text-xl">Import de Produits</h2>
        <form action="{{ route('import.request') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="excel_file">Fichier Excel</label>
                <input type="file" name="excel_file" class="border border-gray-100 rounded-md">
                @error('excel_file')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="p-3 bg-green-700 text-white rounded-md">Import</button>
        </form>
    </section>
    <!-- end import-->

    <section class="bg-gray-50 border p-4">
        <table class="table-auto w-full">
            <thead class="bg-gray-600 text-white">
                <tr>
                    <th class="p-2">Floor.</th>
                    <th class="text-left">Title</th>
                    <th class="text-left">Picture</th>
                    <th class="text-left">Surf.</th>
                    <th class="text-left">Price</th>
                    <th>Plan</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($properties as $property)
                    <tr >
                        <td class="p-2 text-center">
                            {{$property->floor}}
                        </td>
                        <td>
                            {{$property->title}}
                        </td>
                        <td>
                            <img class="object-cover w-40 group-hover:scale-110 transition-all duration-200 delay-150 ease-in-out" src="{{ $property->picture->url }}" alt="{{ $property->title }}">
                        </td>
                        <td>
                            {{ $property->area }} m<sup>2</sup>
                        </td>
                        <td>
                            {{ \Illuminate\Support\Number::currency($property->price, 'EUR', 'fr') }}
                        </td>
                        <td class="w-1/4">
                            @if(!$property->floorPlan)
                                <form action="{{ route('add.plan') }}" method="post" class="flex gap-2 items-end" name="add_floor_plan" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="flex flex-col gap-1">
                                        <input type="hidden" name="property_id" value="{{ $property->id }}">
                                        <label for="floorPlan">Attach Map to this property</label>
                                        <input name="floorPlan" type="file">
                                    </div>
                                    <button type="submit" class="bg-green-700 hover:bg-green-500 p-2 text-white h-12 rounded-md">Add Plan</button>
                                </form>
                            @else
                                @if(session()->has('message'))
                                    <p>{{ session()->get('message') }}</p>
                                @endif
                                <img class="h-40" src="{{ asset('storage/plan/'.$property->floorPlan->name) }}" alt="floor plan">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('property.edit', [$property]) }}">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>
@endsection
