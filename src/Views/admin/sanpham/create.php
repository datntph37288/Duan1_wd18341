<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User create</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Tạo mới sản phẩm</h1>

        <form action="" method="post"  enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">

            <label for="iddm" class="mt-3">Danh muc</label><br>
            <select name = "iddm" id="iddm" class="form-control">
                <?php
                foreach ($categories as $category) :?>
                    
                    <option value="<?=$category['id']?>"><?= $category['name'] ?></option>;
               <?php endforeach ;?>
            </select> <br>

            <label for="price" class="mt-3">Price</label>
            <input type="text" name="price" class="form-control">

            <label for="img" class="mt-3">img</label>
            <input type="file" name="img" class="form-control">

            <label for="mota" class="mt-3">Mô Tả</label>
            <input type="text" name="mota" class="form-control">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/sanpham" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>
