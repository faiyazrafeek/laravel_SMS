<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Student Details</h5>
        <p class="card-text">Here you can find all the information about Students</p>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->cne}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->speciality}}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ url('/edit/'.$student->id)  }}">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>

