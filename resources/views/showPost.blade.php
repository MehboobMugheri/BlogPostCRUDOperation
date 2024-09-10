<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link href='/bootstrap/css/bootstrap.css' rel="stylesheet" >
</head>
<style>
    /* nav .w-5{
        display: none;
    } */
</style>
<body>
    <h1 style="text-align: center; background-color: teal; color:white; border-radius:8px;">Blog Posts</h1>
<h3><a href="{{ route('postPage') }}">Add New Post</a></h3>
<center>
   <div class="main-container">
    <div class="row">
        <div class="col-md-1">
            
        </div>
        <div class="col-lg-10" >
            <table class="border border-2px">
                <tr style="background-color: teal; color:white;">
                    <th>ID</th>
                    <th>POST TITLE</th>
                    <th>POST DESCRIPTION</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>VIEW</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                </tr>
                @foreach ($data as $id => $value )
                    <tr style="background-color:lightcyan;">
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->post_title }}</td>
                        <td>{{ $value->post_desc }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td><a href="{{ route('showSinglePost',$value->id) }}" style="background-color: blue; color:white;  border-radius:4px; padding:5px; ">View</a></td>
                        <td><a href="{{ route('deletePost',$value->id) }}" style="background-color: red;color:white; border-radius:4px; padding:5px; ">Delete</a></td>
                        <td><a href="{{ route('updatePost', $value->id) }}" style="background-color: green;color:white; border-radius:4px; padding:5px;">Update</a></td>
                    </tr>
                @endforeach
            </table>
       
    <div style="margin-top: 25px;">
        {{ $data->links('pagination::bootstrap-5') }}
    </div>

</div>
<div class="col-md-1">
            
</div>
</div>
</div>
    {{-- <div>
        Total Record: {{ $data->total() }}
    </div> --}}
</center>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>

