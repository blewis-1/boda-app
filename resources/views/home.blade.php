@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container text-center pt-2 mb-2 bg-success text-light">
        <div class="row">
            <h3 class="font-weight-bold col-6">Boda Listing</h3>
            <div class="col-3">
                    <a class="btn btn-danger" href="{{ route("boda.create")}}">
                     <i class="bi bi-plus-circle-fill"></i>
                      Add Record
                    </a>
            </div>
            <div class="input-group  col pb-1">
                <form action="#" method="get">
                    <input
                    type="text"
                    value="{{request('search')}}"
                    name="search"
                    class="form-control"
                    placeholder="Search Name & Reg No"
                    aria-label="Search"
                    aria-describedby="basic-addon1"
                    >
                </form>
            </div>
        </div>
    </div>

    <table class="table table-striped  table-hover table-responsive-lg">

        <thead class="bg-success text-white">
            <tr>
                <th scope="col">Reg No.</th>
                <th scope="col">Stage </th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Contact</th>
                <th scope="col"> Next of Kin</th>
                <th scope="col"> Next of Kin Phone</th>
                <th scope="col"> Actions </th>

            </tr>
        </thead>
        @foreach ($bodas as $boda)
        <tbody>
            <tr>
                <th scope="row">{{$boda->boda_reg_no}}</th>
                <td> {{$boda->stage}}</td>
                <td>{{$boda->name}}</td>
                <td>{{$boda->age}}</td>
                <td>{{$boda->address}}</td>
                <td>{{$boda->phone}}</td>
                <td>{{$boda->next_of_kin}}</td>
                <td>{{$boda->next_of_kin_contact}}</td>
                <td>
                    <form action="{{route("boda.destroy", $boda->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit"><i class="bi bi-trash-fill link-danger"> </i> </button
                    </form>
                    <a href="{{route("boda.edit", $boda)}}" class="link-primary">
                       <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
            </tr>
        </tbody>
        @endforeach
  </table>
    <div class="pull-right">
        {!! $bodas->links() !!}
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success position">
            <p>{{ $message }}</p>
        </div>
    @endif

</div>
@endsection
