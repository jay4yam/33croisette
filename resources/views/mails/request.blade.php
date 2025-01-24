@extends('layouts.mail')
@section('content')
    <td class="content">

        <h2 style="text-align: center;">DEMANDE D'INFORMATION<br>
            33 CROISETTE</h2>

        <p>NOM : {{ $name }}</p>
        <p>EMAIL : {{ $email }}</p>
        <p>PHONE : {{ $phone }}</p>
        <p>MESSAGE : {{ $user_message }}</p>

        <p><em>Team Marketing</em></p>

    </td>
@endsection
