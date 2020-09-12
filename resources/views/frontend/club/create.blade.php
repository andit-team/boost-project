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
            <small>ENTRA NELLA RETE DI BOOST</small>
            <h2>Gestisci un locale?</h2>
            <p>Sei il gestore di un locale o hai una rivendita?</p>
            <p>Compila il form qui sotto e ti daremo tutte le informazioni per ordinare il prodotto.</p>
            <p>Se vuoi vedere quali
              altri locali e punti vendita hanno Boost puoi cliccare qui.</p>

            <form action="{{ route('cludbstore') }}" method="POST" enctype="multipart/form-data" class="common-form-sei" id="validateForm">
                @csrf
              <div class="form-group">
                <label for="company_name">Ragione Sociale (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('company_name') }}</span>
               <input type="text" class="form-control @error('company_name') border-danger @enderror" name="company_name" value="{{old('company_name')}}" required>
              </div>
              <div class="form-group">
                <label for="re_office_address">indirizzo sede legale (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('re_office_address') }}</span>
              <input type="text" class="form-control @error('re_office_address') border-danger @enderror" name="re_office_address" value="{{old('re_office_address')}}" required>
              </div>
              <div class="form-group">
                <label for="municiplitay_province">Comune e Prov. (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('municiplitay_province') }}</span>
              <input type="text" class="form-control @error('municiplitay_province') border-danger @enderror" name="municiplitay_province" value="{{ old('municiplitay_province') }}" required>
              </div>
              <div class="form-group">
                <label for="type">tipologia (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('type') }}</span>
                <select class="form-control @error('type') border-danger @enderror" name="type" required>
                  <option value="bar">bar</option>
                  <option value="ristorante/pizzeria">ristorante/pizzeria</option>
                  <option value="pub/discoteca">pub/discoteca</option>
                  <option value="rivendita">rivendita</option>
                  <option value="altro">altro</option>
                </select>
              </div>
              <div class="form-group">
                <label for="vanue_address">Indirizzo del Locale (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('vanue_address') }}</span>
              <input type="text" class="form-control @error('vanue_address') border-danger @enderror" name="vanue_address" value="{{ old('vanue_address') }}" required>
              </div>
              <div class="form-group">
                <label for="municiplitay_province_room">Comune e Prov. del locale (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('municiplitay_province_room') }}</span>
              <input type="text" class="form-control @error('municiplitay_province_room') border-danger @enderror" name="municiplitay_province_room" value="{{ old('municiplitay_province_room') }}" required>
              </div>
              <div class="form-group">
                <label for="name_surname">Nome e Cognome referente (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name_surname') }}</span>
              <input type="text" class="form-control @error('name_surname') border-danger @enderror" name="name_surname" value="{{ old('name_surname') }}"  required>
              </div>
              <div class="form-group">
                <label for="tel_number">Recapito telefonico (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name_surname') }}</span>
              <input type="number" class="form-control @error('tel_number') border-danger @enderror" name="tel_number" value="{{ old('tel_number') }}" required>
              </div>
              <div class="form-group">
                <label for="email">La tua email (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span>
              <input type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{ old('email') }}" required>
              </div>
              <div class="form-group">
                <label for="vat">partita iva (facoltativo)</label>
              <input type="text" class="form-control" name="vat" value="{{ old('vat') }}">
              </div>
              <div class="form-group">
                <label for="unique_code">codice univoco o pec (facoltativo)</label>
              <input type="text" class="form-control" name="unique_code" value="{{ old('unique_code') }}">
              </div>
              <div class="form-group">
                <label for="number_of_table">numero tavoli (richiesto)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('number_of_table') }}</span>
              <input type="number" class="form-control @error('number_of_table') border-danger @enderror" name="number_of_table" value="{{ old('number_of_table') }}" required>
              </div>
              <div class="form-group">
                <label for="text">Il tuo messaggio</label>
                <textarea rows="10" class="form-control" name="message" ></textarea>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="agreed" id="exampleCheck1">@error('agreed')<br><b class="text-danger">Must Be Aggred</b>@enderror
                <label class="form-check-label" for="exampleCheck1">Accetto di fornire i miei dati al fine di esser
                  contattato
                  per informazioni commerciali e consapevole che i dati saranno trattati secondo l'Informativa sulla
                  Privacy e in
                  linea con il GDPR (Regolamento UE n. 2016/679)t</label>
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
