@extends('layouts/main-layout')

@section('content')

    <div class="container">
        <h1>Aggiungi un fumetto</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="POST" class="py-5">
            @csrf
            @method('PUT');
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{$comic->title}}">
                @error('title')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror"  name="description" id="description">{{$comic->description}}</textarea>
                @error('description')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="thumb">Link Immagine</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
                @error('thumb')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{$comic->price}}">
                @error('price')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="mb-3">
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series" value="{{$comic->series}}">
                @error('series')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date">Data di lancio</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
                @error('sale_date')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

            <div class="mb-3">
                <label for="type">Tipo</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="{{$comic->type}}">
                @error('type')
                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                   
                @enderror
            </div>

           <button type="submit" class="btn btn-primary">Aggiorna</button>
           

        </form>
    </div>

@endsection