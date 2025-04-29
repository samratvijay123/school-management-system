<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::to('/')}}/bootstrap_file/bootstrap.min.css">
    <script src="{{URL::to('/')}}/bootstrap_file/bootstrap.bunlde.min.js"></script>
    <title>Registration form</title>
    

</head>

<body>
    <div class="container">
        <form class="row g-3" action="{{url('/')}}/register" method="post" enctype="multipart/form-data">
            @csrf <!--this is token which is used to submit the form data -->
            <div class="col-md-6">
                <label for="inputname" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="inputEmail4">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password_confirmation">
                <span class="text-danger">
                    @error('password_confirmation')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="address">
                <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="inputNumber" class="form-label">Mobile number</label>
                <input type="number" class="form-control" name="number">
                <span class="text-danger">
                    @error('number')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" name="state"> 
                    <option selected>Choose...</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Rajsthan">Rajsthan</option>
                </select>
             
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Chooose File</label>
                <input type="file" class="form-control" name="file_c">
                <span class="text-danger">
                    @error('file_c')
                    {{$message}}
                    @enderror
                </span>
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- <button ></button> -->
            </div>
        </form>
    </div>
</body>

</html>
<div class="container">
    <table>
        <thead  class="p-3">
            <tr >
                <th>S.no</th>
                <th>Full_Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Mobile_number</th>
                <th>State</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table_data as $file)
            <tr>
                <td>{{$file['id']}}</td>
                <td>{{$file['fullname']}}</td>
                <td>{{$file['email']}}</td>
                <td>{{$file['password']}}</td> <!-- Added Password column -->
                <td>{{$file['address']}}</td>
                <td>{{$file['number_mob']}}</td>
                <td>{{$file['state']}}</td>
                <td>{{$file['file']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
