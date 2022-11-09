@extends('layouts,helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach (items as item)
            <tr>
                <td>{{$items as $item}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
