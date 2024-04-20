@extends('template')
@section('script')

<script src="{{ asset('lang/javascript/schoolDetails.js') }}"></script>



@endsection

@section('title', 'Student Detail Import')

@section('content')
<!--start brnad name here -->
<div class="container-fluid brnad bg-danger ">
    <h3 class="mt-5 text-white text-center mt-2 p-2 ">ScriptQube International School </h3>
    
</div>
<!-- end brnad name here -->
    
<div class="container">
    
    <div>
        <h1>Upload Excel File</h1>
        <input type="file" id="fileInput" accept=".xlsx, .xls">
        <button type="button" class="btn btn-primary">Upload</button>
        <p id="message"></p>
    </div>



</div>
@endsection

@section('scripts')


<script>

   
$(document).ready(function() {
           $(".btn").click(function() {
            alert();
           });
        });
    </script>
@endsection
