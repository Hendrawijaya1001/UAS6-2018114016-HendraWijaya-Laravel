@extends('layout.main')
@section('title', 'YOUR HISTORY')
@section('content')

<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<h1><font size="7" color="black" >List Study</font></h1>
<a href="history/create" class="btn btn-primary mb-1">
Input List Study </a> </br>


<table class="table">
<tr>
<tr bgcolor='$cyan-200'  align='center'>
<th scope="col">ID</th>
<th scope="col">Asal SD</th>
<th scope="col">Asal SMP/MTS</th>
<th scope="col">Asal SMA/SMK/MAN</th>
<th scope="col">Asal Kampus</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($history as $his)
<tr>

<td>{{ $his->id }}</td>
<td>{{ $his->asal_sd }}</td>
<td>{{ $his->asal_smp }}</td>
<td>{{ $his->asal_smk }}</td>
<td>{{ $his->asal_univ }}</td>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
