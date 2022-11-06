<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Search</label>
                <input type="text" class="form-control" name="query" id="exampleFormControlInput1"
                       placeholder="Enter Keyword">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info">Search</button>
            </div>
        </form>
        <div class="offset-2 col-8">
            @if(isset($result) && count($result))
                <table class="table table-bordered">
                    <tr>
                        <th>Sr</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>language</th>
                        <th>Official Site</th>
                        <th>Image</th>
                    </tr>
                    @foreach($result as $key=>$r)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$r->show->id}}</td>
                            <td>{{$r->show->name}}</td>
                            <td>{{$r->show->type}}</td>
                            <td>{{$r->show->language}}</td>
                            <td><a href="{{$r->show->officialSite}}">{{$r->show->officialSite}}</a></td>
                            <td><a target="_blank" href="{{$r->show->image->medium}}">View</a></td>
                        </tr>
                    @endforeach
                </table>
                @else
                <h3 class="alert alert-danger">No Data Found</h3>
            @endif
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
