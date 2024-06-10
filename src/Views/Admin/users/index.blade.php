<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Users</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <h1>Danh sách users</h1>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">
            {{$_SESSION['msg']}};
        </div>
        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);

        @endphp
    @endif
    <a href="{{ url('admin/users/create') }}" class=" btn btn-primary">
        Thêm mới
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td>
                        <img src="{{ asset($user['avatar']) }}" alt="" width="100px">
                    </td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['updated_at'] ?></td>
                    <td>
                        <a href="{{ url('admin/users/' . $user['id'] . '/show') }}" class=" btn btn-info">
                            Xem
                        </a>
                        <a href="{{ url('admin/users/' . $user['id'] . '/delete') }}" class=" btn btn-danger"
                            onclick="return confirm('Co chac xoa khong')" type="submit">
                            Xóa
                        </a>
                        <a href="{{ url('admin/users/' . $user['id'] . '/edit') }}" class=" btn btn-warning">
                            Sửa
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
