<html>
<head>
    <title>ProjectForCTG65</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="row">
<div class="main">
    <div class="col-lg-12" >
        @include('error.errors')
        <form action="{{route('data.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="name"><br>
            <textarea name="task"></textarea>
            <input type="file" name="image">
            <input type="submit" name="submit" value="Add">
        </form>
    </div>
    <div class="show">
        @if(session('updateSuccess'))
            {{session('updateSuccess')}}
            @endif
        <table border=" 1px">
            <tr>
                <td>Name</td>
                <td>Task</td>
                <td>Image</td>
                <td>action</td>
            </tr>

            @forelse($allData as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->task}}</td>
                    <td>
                        @if($data->image==null)
                            <p>image not found</p>
                            @else
                            <img src="{{asset('photos/'.$data->image)}}" alt="" width="100px">
                        @endif
                    </td>
                    <td>
                        <a href="{{route('data.edit.show',[$data->id])}}">Edit</a>||<a onclick="return confirm('Really')" href="{{route('data.delete',[$data->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr><td> colspan="4" Nothing to show</td></tr>
            @endforelse
        </table>


    </div>
</div>
</div>

</body>
</html>
