@extends('layouts.app')

@section('content')
    <main id="content" class="p-24">
        <form action="{{ route('import.request') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="excel_file">Fichier Excel</label>
                <input type="file" name="excel_file" class="border border-gray-100 rounded-md">
                @error('excel_file')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="p-3 bg-green-700 text-white rounded-md">Import</button>
        </form>
    </main>
@endsection
