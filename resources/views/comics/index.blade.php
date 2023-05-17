@extends('layouts/main-layout')

@section('content')

    <table class="table table-striped">
        <thead>
            <th>
                Titolo
            </th>
            <th>
                Descrizione
            </th>
            <th>
                Prezzo
            </th>
            <th>
                Serie
            </th>
            <th>
                Data di lancio
            </th>
            <th>
                Tipo
            </th>
            <th>

            </th>
        </thead>

        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="">Apri</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>   

@endsection