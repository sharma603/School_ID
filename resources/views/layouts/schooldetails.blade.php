@extends('template')
@section('script')

<script src="{{ asset('lang/javascript/schoolDetails.js') }}"></script>



@endsection

@section('title', 'Sign Up')

@section('content')
    <div class="container">
    <h2 class="mb-4">Sign Up</h2>
    <form id="signupForm">
        <div class="form-group">
            <label for="schoolName">School Name</label>
            <input type="text" class="form-control" id="schoolName" name="schoolName" required>
        </div>
        <div class="form-group">
            <label for="principalName">Principal Name</label>
            <input type="text" class="form-control" id="principalName" name="principalName" required>
        </div>
        <div class="form-group">
            <label for="contactNumber">Contact Number</label>
            <input type="text" class="form-control" id="contactNumber" name="contactNumber" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="establishmentDate">Establishment Date</label>
            <input type="date" class="form-control" id="establishmentDate" name="establishmentDate" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#signupForm').submit(function(e) {
                e.preventDefault();
                // Form submission logic
            });
        });
    </script>
@endsection
