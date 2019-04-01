@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Nieuwe klant</h4>
    <form action="{{route('clients.save')}}" method="post">
        @csrf
            <input name="id" type="hidden" value="{{$client->id}}">
            <div class="row">
                <div class="medium-4 small-12 columns">
                    <label>Titel</label>
                    <select name="title">
                        @foreach($titles as $title) :
                        <option @if($client->title_id == $title->id) selected @endif value="{{$title->id}}">
                            {{ucfirst($title->name) . '.'}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Voornaam</label>
                    <input name="firstname" type="text" value="{{old('firstname', $client->firstname)}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Achternaam</label>
                    <input name="lastname" type="text" value="{{old('lastname', $client->lastname)}}">
                </div>
                <div class="medium-8 small-12  columns">
                    <label>Adres</label>
                    <input name="address" type="text" value="{{old('address', $client->address)}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Postcode</label>
                    <input name="zipcode" type="text" value="{{old('zipcode', $client->zipcode)}}">
                </div>
                <div class="medium-4 small-6  columns">
                    <label>Stad</label>
                    <input name="city" type="text" value="{{old('city', $client->city)}}">
                </div>
                <div class="medium-4 small-12  columns">
                    <label>Provincie</label>
                    <input name="province" type="text" value="{{old('province', $client->province)}}">
                </div>
                <div class="medium-12  columns">
                    <label>E-mail</label>
                    <input name="email" type="text" value="{{old('email', $client->email)}}">
                </div>
                <div class="medium-12  columns">
                    <input value="BEWAAR" class="button success hollow" type="submit">
                </div>
            </div>
        </form>
    </div>
    <div class="alert alert-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
