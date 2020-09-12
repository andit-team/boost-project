@extends('layouts.boostmaster')

@section('content')
@include('layouts.inc.header.contactHeader')
@push('css')
<style>
    
.common-form-sei {
  padding: 30px 50px;
  background: #c7c7c738;
  width: 60%;
  margin: 60px auto 0 auto;
}

.common-form-sei .form-control:focus {
  background-color: #fff;
  border-color: #000;
  outline: 0;
  box-shadow: none;
}
</style>
@endpush
@include('elements.alert')

<section class="sei-un-distributore-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="sei-un-dis-form-area">
                    <small>ENTRA IN BOOST</small>
                    <h2>Sei un agente plurimandatario?</h2>
                    <p>Se sei un agente plurimandatario già operativo e sei interessato a lavorare con noi, compila il form qui sotto in ogni sua parte e ti contatteremo quanto prima.</p>
                    <p>Non dimenticare di indicarci anche informazioni sulla tua rete commerciale e sul tuo pacchetto clienti.</p>
                    <form action="{{ route('distributorstore') }}" method="POST" enctype="multipart/form-data" class="common-form-sei" id="validateForm">
                        @csrf
                        <div class="form-group">
                            <label for="company_name">Ragione Sociale (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('company_name') }}</span>
                            <input type="text" class="form-control @error('company_name') border-danger @enderror" required name="company_name" value="{{ old('company_name') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="type">tipologia (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('type') }}</span>
                            <select class="form-control @error('type') border-danger @enderror" name="type">
                                <option value="agente plurimandatario">agente plurimandatario</option>
                                <option value="agente con deposito">agente con deposito</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="municipality">Comune (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('municipality') }}</span>
                            <input type="text" class="form-control @error('municipality') border-danger @enderror" name="municipality" value="{{ old('municipality') }}" required />
                        </div>
                        <div class="form-group">
                            <label for="province">Provincia (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('municipality') }}</span>
                            <input type="text" class="form-control @error('province') border-danger @enderror" name="province" value="{{ old('province') }}" required />
                        </div>
                        <div class="form-group">
                            <label for="name_surame">Nome e Cognome (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name_surame') }}</span>
                            <input type="text" class="form-control @error('name_surame') border-danger @enderror" name="name_surame" value="{{old('name_surame')}}" required />
                        </div>
                        <div class="form-group">
                            <label for="tel_number">Recapito telefonico (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('tel_number') }}</span>
                            <input type="number" class="form-control @error('tel_number') border-danger @enderror" name="tel_number" value="{{old('tel_number')}}" required />
                        </div>
                        <div class="form-group">
                            <label for="email">La tua email (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span>
                            <input type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{old('email')}}" required />
                        </div>
                        <div class="form-group">
                            <label for="coverage_area">zona di copertura (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('coverage_area') }}</span>
                            <input type="text" class="form-control @error('coverage_area') border-danger @enderror" name="coverage_area" value="{{old('coverage_area')}}" required />
                        </div>
                        <div class="form-group">
                            <label for="agent_number">numero di agenti (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('agent_number') }}</span>
                        <input type="text" class="form-control @error('agent_number') border-danger @enderror" name="agent_number" value="{{old('agent_number')}}" required />
                        </div>
                        <div class="form-group">
                            <label for="customer_package">pacchetto clienti (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('customer_package') }}</span>
                            <input type="text" class="form-control @error('customer_package') border-danger @enderror" name="customer_package" value="{{old('customer_package')}}" required />
                        </div>
                        <div class="form-group">
                            <label for="message">Il tuo messaggio</label>
                            <textarea rows="10" class="form-control" name="message"></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="agreed" id="exampleCheck1" />@error('agreed')<br><b class="text-danger">Must Be Aggred</b>@enderror</p>
                            <label class="form-check-label" for="exampleCheck1">
                                Accetto di fornire i miei dati al fine di esser contattato per informazioni commerciali e consapevole che i dati saranno trattati secondo l'Informativa sulla Privacy e in linea con il GDPR (Regolamento UE n.
                                2016/679)t
                            </label>
                        </div>
                        <div class="sei-un-destrib-form-btn">
                            <button type="submit" class="btn btn-footer">Invia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

  
  @include('layouts.inc.footer.contactFooter')
@endsection
