<h1>Users List</h1>
<table border="1">
    @foreach ($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->password}}</td>
    </tr>
    @endforeach
</table>