<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::to('/')}}/bootstrap_file/bootstrap.min.css">
    <script src="{{URL::to('/')}}/bootstrap_file/bootstrap.bunlde.min.js"></script>
    <title>File</title>
</head>

<body>

    <form class="row g-3" action="{{url('/')}}/file_upload" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Chooose File</label>
            <input type="file" class="form-control" name="file_co">
            <span class="text-danger">
                @error('file_co')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</body>
<table><thead>
    <tr>
        <th>File </th>
        <th>Download</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($files as $file)
    <tr>
    <td>
        {{$file_name = $file->getfilename();}}
    </td>
    <td><a href="{{route('download',$file_name)}}">Download</a></td>
    <td><a href="{{route('delete',$file_name)}}">Delete</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</html>

