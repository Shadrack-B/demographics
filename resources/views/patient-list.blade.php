<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Patient List</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Patient List</h2>
        <div>
          <a href="{{url('add-patient')}}" class="btn btn-primary">Add</a>
        </div>
        <table class="table">
          <thead><tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Date of Birth</th>
            <th>Sex</th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach ($data as $patient)
            <tr>
              <td>{{$patient->id}}</td>
              <td>{{$patient->first_name}}</td>
              <td>{{$patient->last_name}}</td>
              <td>{{$patient->age}}</td>
              <td>{{$patient->date_of_birth}}</td>
              <td>{{$patient->sex}}</td>
              <td><a href="{{url('edit-patient/'.$patient->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('delete-patient/'.$patient->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>