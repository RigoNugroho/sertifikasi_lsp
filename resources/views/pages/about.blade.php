@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'About'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>About</h2>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <img src="img/2131730085.jpeg" alt="Your Image" class="me-4" style="max-width: 200px; max-height: 200px;">
                        <div>

                            <table>
                                <tr>
                                    <td><strong>Nama</strong></td>
                                    <td>:</td>
                                    <td>Rigo Nugroho</td>
                                </tr>
                                <tr>
                                    <td><strong>NIM</strong></td>
                                    <td>:</td>
                                    <td>2131730012</td>
                                </tr>
                                <tr>
                                    <td><strong>TTL</strong></td>
                                    <td>:</td>
                                    <td>Tulungagung, 18 April 2002</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
@endsection
