@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="text-center bg-success p-2  text-light">
           <div class="row">
            <h3 class="font-weight-bold col-9">Register A Boda</h3>
            <div class="col-3">
                    <a class="btn btn-danger" href="{{ route("boda.index")}}">
                      Show All
                    </a>
            </div>
        </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
       <form method="POST" action="{{route("boda.store")}}"  class="border border-light p-3 bg-light">
            @method("POST")
            @csrf
           <div class="row">
                <div class="mb-2 col">
                        <label for="boda_reg_no" class="form-label">Boda Reg No.</label>
                        <input type="text" class="form-control shadow-none " id="boda_reg_no" name="boda_reg_no" placeholder="eg. DB29H">
                </div>
                <div class="mb-2 col">
                        <label for="name" class="form-label">Boda-Boda Cyclist </label>
                        <input type="text" class="form-control shadow-none " name="name" id="name" placeholder="eg. John Smith">
                </div>
            </div>
            <div class="row">
                 <div class="mb-3 col">
                <label for"age" class="form-label">Cyclist Age</label>
                <input type="number" class="form-control shadow-none " id="age" name="age" placeholder="eg. 28">
                </div>
                    <div class="mb-3 col">
                        <label for="address" class="form-label">Address of Residence</label>
                        <input type="tex" class="form-control shadow-none " id="address" name="address" placeholder="eg. Salaama, Lusaala Road">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="tel" class="form-control shadow-none " id="phone" name="phone" placeholder="eg. 0774805401">
                </div>
                <div class="mb-3 col">
                   <label for="next_of_kin" class="form-label">Next of Kin</label>
                    <input type="text" class="form-control shadow-none " id="next_of_kin" name="next_of_kin" placeholder="eg. James Browne">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                        <label for="next_of_kin_contact" class="form-label">Next of Kin Contact</label>
                        <input type="tel" class="form-control shadow-none " id="next_of_kin_contact" name="next_of_kin_contact" placeholder="eg. 0774805401">
                </div>
                    <div class="mb-3 col">
                        <label for="stage" class="form-label">Stage</label>
                        <input type="text" class="form-control shadow-none" id="stage" name="stage" placeholder="eg. Munyonyo Stage">
                </div>
           <div class="row justify-content-center">
                <button class="btn btn-success col-8" type="submit"> <strong>Save</strong>  </button>
            </div>
       </form>
    </div>

@endsection
