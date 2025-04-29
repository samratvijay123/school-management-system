<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>

</head>

<body>
    <div class="container">
    <form class="row g-3" action="" method="">
    <div class="col-md-6">
            <label for="inputname" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputEmail4">
        </div>
        @error('name')
            {{message}}
        @enderror
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" >
        </div>
        @error('email')
            {{message}}
        @enderror
        <div class="col-md-6">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" name="address"  >
        </div>
        
        <div class="col-md-6">
            <label for="inputNumber" class="form-label">Mobile number</label>
            <input type="number" class="form-control" name="number">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select" name="state">
                <option selected>Choose...</option>
                <option>Bihar</option>
                <option>Gujrat</option>
                <option>Kolkata</option>
                <option>Rajsthan</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Chooose File</label>
            <input type="file" class="form-control" name="file">
        </div>
        
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</body>

</html>