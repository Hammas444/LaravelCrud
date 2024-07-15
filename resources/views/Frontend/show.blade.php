
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Student Semester</th>
      <th colspan="2">ACTION</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
    @foreach($users as $user)
     <td>{{ $user->std_id }}</td>
      <td>{{ $user->std_name }}</td>
      <td>{{ $user->std_email }}</td>
      <td>{{ $user->std_sem }}</td>
      <td><a href="edit/{{ $user->std_id }}">update</a></td>
      <td><a href="delete/{{ $user->std_id }}">delete</a></td>
    </tr>
 @endforeach
  </tbody>
</table>
</body>
</html>












