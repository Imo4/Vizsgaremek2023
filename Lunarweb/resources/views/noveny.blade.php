@extends('layout')
@section('content')
<script>
    
    async function send(id) {
        const response = await fetch(`/inditas/${id}`, { method: 'POST' });
        console.log(response);
    }
  </script>



<h1>{{$noveny->nev}}</h1>

<table>
    <tr>
        <th>{{$noveny->ido}}mp</th>
    </tr>
    <button onclick="send({{ $noveny->id }})" class="inditas btn btn-primary float-end">Indítás</button>
    
</table>
@endsection