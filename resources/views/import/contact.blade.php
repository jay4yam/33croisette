@extends('layouts.app', ['title' => 'import', 'robots' => 'noindex'])

@section('content')
<main id="content" class="flex flex-col gap-12 p-24">

    <!-- menu -->
    <section class="flex items-center justify-center gap-4">
        <a href="{{ route('import.index') }}" class="bg-gray-600 text-white p-4 rounded-md hover:text-white hover:bg-gray-800">Import Produit & Plan</a>
        <a href="{{ route('contacts.index') }}" class="bg-gray-600 text-white p-4 rounded-md hover:text-white hover:bg-gray-800">Contacts</a>
    </section>

    <!-- liste contacts -->
    <section class="bg-gray-50 border p-4">

        <!-- tableau des contacts -->
        <table class="table-auto w-full">
            <thead class="bg-gray-600 text-white">
            <tr>
                <th class="p-2">id</th>
                <th class="text-left">Email</th>
                <th class="text-left">Source</th>
                <th class="text-left">Ip</th>
                <th class="text-left">Info</th>
            </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td class="py-2 text-center">{{ $contact->id }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->source }}</td>
                        <td>{{ $contact->ip_address }}</td>
                        <td>
                            <span class="text-xs">name :</span> <b>{{ $contact->name }}</b>
                            <span class="text-xs">phone :</span> <b>{{ $contact->phone }}</b>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- end tableau des contacts -->

        <div>
            {{ $contacts->links() }}
        </div>
    </section>
</main>


@endsection
