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
                <form id="formAccountSettings" method="POST" action="{{ route('profile.update') }}" onsubmit="return false">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nome Completo</label>
                            <input class="form-control" type="text" id="name" name="name" :value="old('name', $user->name)" autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">CPF</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Data Nascimento</label>
                            <input class="form-control" type="date" name="birthDate" id="birthDate" value="25/02/2001" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Número de Telefone</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">+55</span>
                                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="61 9434 9434" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
        <div class="card mb-4">
            <h5 class="card-header">Informações sobre endereço</h5>
            <!-- Account -->
            <div class="card-body">
                <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465" maxlength="6" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Rua</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Bairro</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Cidade</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Estado</label>
                            <select id="country" class="select2 form-select">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
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