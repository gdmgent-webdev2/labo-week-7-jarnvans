@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Nieuwe klant</h4>
    <form action="{{route('clients.save')}}" method="post">
        @csrf
            <div class="row">
                <div class="medium-4 small-12 columns">
                    <label>Titel</label>
                    <select name="title">
                        @foreach($titles as $title) :
                        <option value="{{$title->id}}" @if($client->client_id == $title->id) selected @endif>
                            {{ucfirst($title->name) . '.'}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Voornaam</label>
                    <input name="firstname" type="text" value="{{$client->firstname or old('firstname')}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Achternaam</label>
                    <input name="lastname" type="text" value="{{$client->lastname or old('lastname')}}">
                </div>
                <div class="medium-8 small-12  columns">
                    <label>Adres</label>
                    <input name="address" type="text" value="{{$client->address or old('address')}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Postcode</label>
                    <input name="zipcode" type="text" value="{{$client->zipcode or old('zipcode')}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Stad</label>
                    <input name="city" type="text" value="{{$client->city or old('city')}}">
                </div>
                <div class="medium-4 small-12  columns">
                    <label>Provincie</label>
                    <input name="province" type="text" value="{{$client->province or old('province')}}">
                </div>
                <div class="medium-12  columns">
                    <label>E-mail</label>
                    <input name="email" type="text" value="{{$client->email or old('email')}}">
                </div>
                <div class="medium-12  columns">
                    <input value="BEWAAR" class="button success hollow" type="submit">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
