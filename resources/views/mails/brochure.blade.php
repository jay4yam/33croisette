@extends('layouts.mail')
@section('content')
    <td class="content">

        <h2 style="text-align: center;">Presentation 33 Croisette</h2>

        <p>You have requested a brochure for the 33 Croisette new-build property development program.</p>
        <p>You can download the brochure by clicking on the image below</p>

        <a href="https://www.33-croisette.com/pdf/33croisette.pdf">
            <img src="{{ asset('images/couv-brochure.webp') }}" alt="couverture brochure">
        </a>

        <div style="text-align: center;padding-top: 30px;">
            <p>For more information on the program, please contact</p>
            <p><a style="text-decoration: none;" href="tel:+33497397777">Tel:+33(0)4.97.39.77.77</a></p>
            <p><a style="text-decoration: none;" href="mailto:33-croisette@michaelzingraf.com">33-croisette@michaelzingraf.com</a></p>
        </div>

        <img width="200" src="{{ asset('images/Logo_MZCIRE_33.png') }}" alt="logo christie's">
        <img width="200" src="{{ asset('images/christies-logo-or.png') }}" alt="logo christie's">
    </td>
@endsection
