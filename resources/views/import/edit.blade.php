@extends('layouts.app', ['title' => 'import', 'robots' => 'noindex'])

@section('content')
<main id="content" class="flex flex-col gap-12 p-24">

    <section class="flex items-center justify-center gap-4">
        <a href="{{ route('import.index') }}" class="bg-gray-600 text-white p-4 rounded-md hover:text-white hover:bg-gray-800">Import Produit & Plan</a>
        <a href="{{ route('contacts.index') }}" class="bg-gray-600 text-white p-4 rounded-md hover:text-white hover:bg-gray-800">Contacts</a>
    </section>

    @if(session()->has('update'))
        <div>
            {{ session('update') }}
        </div>
    @endif
    <section class="bg-gray-50 border p-4">
        <form action="{{ route('property.update', [$property]) }}" method="post">
            @csrf
            @method('post')

            <div class="flex flex-col pb-2">
                <label for="status">Status:</label>
                <input class="w-1/4" type="text" name="status" value="{{ old('status', $property->status) }}">
                @error('status')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="reference">Référence:</label>
                <input class="w-1/4" type="text" name="reference" value="{{ old('status', $property->reference) }}">
                @error('reference')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="type">Type:</label>
                <input class="w-1/4" type="text" name="type" value="{{ old('status', $property->type) }}">
                @error('type')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="address">Address:</label>
                <input class="w-1/4" type="text" name="address" value="{{ old('status', $property->address) }}">
                @error('address')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="residence">Residence:</label>
                <input class="w-1/4" type="text" name="residence" value="{{ old('status', $property->residence) }}">
                @error('residence')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="postal_code">Postal Code:</label>
                <input class="w-1/4" type="text" name="postal_code" value="{{ old('status', $property->postal_code) }}">
                @error('postal_code')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="city">City :</label>
                <input class="w-1/4" type="text" name="city" value="{{ old('status', $property->city) }}">
                @error('city')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="price">price :</label>
                <input class="w-1/4" type="text" name="price" value="{{ old('status', $property->price) }}">
                @error('price')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="rooms">Rooms :</label>
                <input class="w-1/4" type="text" name="rooms" value="{{ old('status', $property->rooms) }}">
                @error('rooms')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="bedrooms">Bedrooms :</label>
                <input class="w-1/4" type="text" name="bedrooms" value="{{ old('status', $property->bedrooms) }}">
                @error('bedrooms')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="area">Area :</label>
                <input class="w-1/4" type="text" name="area" value="{{ old('status', $property->area) }}">
                @error('area')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="floor">Floor :</label>
                <input class="w-1/4" type="text" name="floor" value="{{ old('status', $property->floor) }}">
                @error('floor')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="title">Title :</label>
                <input class="w-1/4" type="text" name="title" value="{{ old('status', $property->title) }}">
                @error('title')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col pb-2">
                <label for="description">Description :</label>
                <textarea class="w-1/4" type="text" name="description">{{ old('status', $property->description) }}</textarea>
                @error('description')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <button class="bg-green-700 hover:bg-green-600 text-white p-2 rounded">Update</button>

        </form>

        <div class="flex flex-wrap gap-2 w-full">
        @foreach($property->pictures as $picture)
            <div class="w-1/4">
                <form action="{{ route('property.update.image', [$picture]) }}" method="post">
                    @csrf
                    @method('post')
                    <input type="hidden" name="picture_id" value="{{ $picture->id }}">
                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                    <div class="flex flex-col gap-2">
                        <img class="w-40 py-2" src="{{ $picture->url }}" alt="image">
                        <input type="text" name="url" value="{{ $picture->url }}">
                        <button type="submit" class="bg-red-400 w-40 text-white">Update</button>
                    </div>
                </form>
            </div>
        @endforeach
        </div>


        <div class="py-4">
            <h2>Bulk Images Update</h2>
            <p>Attention, vous allez effacer toutes les images et les remplacer par les nouvelles</p>
            <form action="{{ route('property.update.image.bulk', [$property]) }}" method="post">
                @csrf
                @method('post')
                <div class="flex flex-col gap-2">
                    <input type="text" name="bulk_images" value="{{ old('bulk_images') }}">
                    <button type="submit" class="bg-green-700 w-40 text-white rounded p-2">Erase and Update</button>
                </div>
            </form>
        </div>

    </section>
</main>
@endsection
