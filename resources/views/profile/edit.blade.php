@php
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without menu - Layouts')

@section('content')

<!-- Layout Demo -->

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Configurações da conta /</span> Usuário
</h4>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Minha conta</a></li>
            <li class="nav-item"><a class="nav-link" href="/home"><i class="bx bx-link-alt me-1"></i> Home</a></li>
        </ul>
        <div class="card mb-4">
            <h5 class="card-header">Detalhes da conta</h5>
            <!-- Account -->
            <div class="card-body">
                <form id="formAccountSettings" method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nome Completo</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ Auth::user()->name }}" autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input class="form-control" type="text" name="cpf" id="cpf" value="{{ Auth::user()->cpf }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Data Nascimento</label>
                            <input class="form-control" type="date" name="birthDate" id="birthDate" " value=" {{ date('d-m-Y', strtotime(Auth::user()->birthDate))}}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Número de Telefone</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">+55</span>
                                <input type="text" id="numberPhone" name="numberPhone" class="form-control" value="{{ Auth::user()->numberPhone }}" />
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Salvar alterações" class="btn btn-primary me-2" />
                </form>

            </div>
            <!-- /Account -->
        </div>
        <div class="card mb-4">
            <h5 class="card-header">Informações sobre endereço</h5>
            <!-- Account -->
            <div class="card-body">
                <form id="formAccountSettingsInfo" method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode" value="{{ Auth::user()->zipCode }}" maxlength="6" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Rua</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ Auth::user()->address}}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Cidade</label>
                            <input class="form-control" type="text" id="city" name="city" value="{{ Auth::user()->city }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Estado</label>
                            <input class="form-control" type="text" id="state" name="state" value="{{ Auth::user()->state }}" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
        <div class="card">
            <h5 class="card-header">Deletar conta</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Tem certeza de que deseja excluir sua conta?</h6>
                        <p class="mb-0">Depois de excluir sua conta, não há como voltar atrás. Por favor, tenha certeza.</p>
                    </div>
                </div>
                <form id="formAccountDeactivation" onsubmit="return false">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                        <label class="form-check-label" for="accountActivation">Confirmo a desativação da minha conta</label>
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Excluir conta</button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection