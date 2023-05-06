@php
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without menu - Layouts')

@section('content')

<!-- Layout Demo -->

<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Bem vindo {{ Auth::user()->name }}! 🎉</h5>
                        @if (!isset(Auth::user()->cpf))
                        <p class="mb-4">Finalize seu cadastro e desfrute de todos nosso serviços, <span class="fw-bold"> acesse seu perfil clicando no botão abaixo</span></p>
                        <a href="/profile" class="btn btn-sm btn-outline-primary">Concluir cadastro</a>
                        @else
                        <p class="mb-4">Temos um desconto <span class="fw-bold">preparado</span> especialmente para você.</p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <!-- Order Statistics -->

    <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">

        <div class="card h-100">


            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Conheça nossos serviços</h5>
                    <small class="text-muted">Informações sobre os planos disponiveis</small>
                </div>
            </div>
            @foreach($plans as $plan)
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">{{ $plan->name }}</h2>
                        <span>Beneficios</span>
                    </div>
                    <div id="orderStatisticsChart"></div>
                </div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sem limite</h6>
                                <small class="text-muted">24/7, tenha atendimento em qualquer lugar e qualquer hora.</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">+20 Especialidades</h6>
                                <small class="text-muted">Conte com atendimentode mais de 20 especialistas</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Beneficios exclusivos</h6>
                                <small class="text-muted">Parcerias com diversos planos de saude</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">R$ {{ $plan->price }}</h6>
                                <small class="text-muted">Assinatura válida por 30 dias</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">

                    </li>
                </ul>
            </div>
            <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary btn-block shadow rounded-pill">Contratar Plano</a>
            @endforeach
        </div>
    </div>

</div>
</div>

@endsection