<center>
    <h1 style="text-align: center;background-color: teal; color:white; border-radius:8px;">New User Form</h1>
    <fieldset style="width: 400px;"> 
        <legend><span style="color:red;">User Form</span></legend>
        <form action="{{ route('addPost') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>Post Title : </th>
                    <td><input type="text" name="post_title"></td>
                </tr>
                <tr>
                    <th>Post Description : </th>
                    {{-- <td><input type="text" name="post_desc"></td> --}}
                    <td><textarea name="post_desc" id="" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submitBtn" value="Submit" style="background-color: green; color:white; border-radius:7px; border:none; padding:9px;"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</center>