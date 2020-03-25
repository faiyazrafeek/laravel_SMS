<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('sticky-footer.css') }}" rel="stylesheet">
    <title>SMS</title>
  </head>
  <body>
    @include('pages.navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if ($layout=='index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('pages.studentsList')
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif ($layout=='create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('pages.studentsList')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://image.shutterstock.com/image-photo/midsection-closeup-female-student-using-600w-159380270.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Enter the Information of the new Student</h5>
                          <form action="{{ url('/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label>CNE</label>
                              <input type="text" name="cne" class="form-control" aria-describedby="emailHelp" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="firstName" class="form-control" placeholder="Enter the First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" class="form-control" placeholder="Enter Second Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                          </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @elseif ($layout=='show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('pages.studentsList')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>
    @elseif ($layout=='edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('pages.studentsList')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://image.shutterstock.com/image-photo/midsection-closeup-female-student-using-600w-159380270.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Edit the Student Information</h5>
                          <form action="{{ url('/update/'.$student->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label>CNE</label>
                              <input type="text" name="cne" value="{{ $student->cne }}" class="form-control" aria-describedby="emailHelp" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="firstName" value="{{ $student->firstName }}" class="form-control" placeholder="Enter the First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" value="{{ $student->lastName }}" class="form-control" placeholder="Enter Second Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" value="{{ $student->age }}" class="form-control" placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input type="text" name="speciality" value="{{ $student->speciality }}" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>
    @endif
    @include('pages.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
