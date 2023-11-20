<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>User List</h1>

        <a href="/admin/sanpham/create" class="btn btn-info">Thêm</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Danh muc</th>
                <th>Price</th>
                <th>Img</th>
                <th>Mo ta</th>
            </tr>

            <?php foreach ($sanpham as $san_pham) : ?>
                <tr>
                    <td><?= $san_pham['id'] ?></td>
                    <td><?= $san_pham['name'] ?></td>
                    <td><?= $san_pham['iddm'] ?></td>
                    <td><?= $san_pham['price'] ?></td>
                    <td><?= $san_pham['img'] ?></td>
                    <td><?= $san_pham['mota'] ?></td>
                    <td>
                        <a href="/admin/sanpham/update?id=<?= $san_pham['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                        
                        <form action="/admin/sanpham/delete?id=<?= $san_pham['id'] ?>" method="post">
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>