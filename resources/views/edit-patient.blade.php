<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Edit Patient</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Edit Patient</h2>
        <form action="{{url('update-student')}}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$data->id}}">
          <div class="md-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{$data->first_name}}" placeholder="Enter first name">
          </div>
          <div class="md-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Enter last name" value="{{$data->last_name}}">
          </div>
          <div class="md-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" placeholder="Enter age" value="{{$data->age}}">
          </div>
          <div class="md-3">
            <label for="sex" class="form-label">Sex</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" value="male" @if ($data->sex =="male")
                  checked
              @endif>
              <label class="form-check-label" for="flexRadioDefault1">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="female" @if ($data->sex =="female")
                  checked
              @endif> 
              <label class="form-check-label" for="flexRadioDefault2">
                Female
              </label>
            </div>
          </div>
          <div class="md-3">
            <label for="sex" class="form-label">Race</label>
            @foreach ($races as $race)
            <div class="form-check">
              <input class="form-check-input" type="radio" name="race" id="flexRadioDefault1" value="{{$race}}" @if ($data->race ==$race)
                  checked
              @endif>
              <label class="form-check-label" for="flexRadioDefault1" >
                {{$race}}
              </label>
            </div>
            @endforeach
            
            
          </div>
          <div class="md-3">
            <label for="sex" class="form-label">Ethnicity</label>
            @foreach ($ethnicities as $ethnicity)
                <div class="form-check">
              <input class="form-check-input" type="radio" name="{{$ethnicity}}" id="flexRadioDefault1" value="{{$ethnicity}}" 
              @if ($data->ethnicity == $ethnicity)
                  checked
              @endif>
              <label class="form-check-label" for="flexRadioDefault1" >
                {{$ethnicity}}
              </label>
            </div>
            @endforeach
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ethnicity" id="flexRadioDefault1" value="not_hispanic">
              <label class="form-check-label" for="flexRadioDefault1">
                Not hispanic
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ethnicity" id="flexRadioDefault1" value="unknown">
              <label class="form-check-label" for="flexRadioDefault1">
                Unknown
              </label>
            </div>
            
          </div>

          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{url('patient-list')}}" class="btn btn-danger">Back</a>
          
        </form>
        
      </div>
    </div>
  </div>
  
</body>
</html>