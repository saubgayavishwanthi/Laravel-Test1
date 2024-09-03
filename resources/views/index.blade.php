<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>My first Laravel project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/custom.css') }}" />
</head>
<body>
    <div class="row">
        <div class="col-6 studentAdd">
            @if (session::has('message'))
                <p>{{ session::get('message') }}</p>
            @endif

            <h1>Student Add</h1>
            <form method="post" action="{{ route('student.save') }}">
                @csrf
                <div class="mb-3">
                    <label for="studentname" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student name">
                </div>
                <div class="mb-3">
                    <label for="studentemail" class="form-label">Email address</label>
                    <input type="email"  class="studentemail" id="studentemail" name="studentemail" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="studentDOB" class="form-label">Student DOB</label>
                    <input type="date" class="form-control" id="studentDOB" name="studentDOB" placeholder="Student DOB">
                </div>
                <input type="submit" class="btn btn-success" value="Add Student">
            </form>
        </div>
        <div class="col-6">
            <!-- Additional content can go here -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
