@php
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without menu - Layouts')

@section('content')


<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <div class="alert alert-primary d-flex" role="alert">
                            <span class="badge badge-center rounded-pill bg-primary border-label-primary p-3 me-2"><i class="bx bx-command fs-6"></i></span>
                            <div class="d-flex flex-column ps-1">
                                <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Nova assinatura</h6>
                                <span>Assinatura concluida com sucesso, agora você pode desfrutar de todos beneficios!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
            <a href="/dashboard" class="btn btn-primary btn-block shadow rounded-pill">Voltar para a home</a>
        </div>
    </div>

</div>



@endsection