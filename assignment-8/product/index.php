<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
    <script rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<?php
include 'conn.php';
$query = $conn->prepare("SELECT * FROM posts");
$query->execute();
$results = $query->fetchAll(\PDO::FETCH_ASSOC);
?>

<body>
    <div class="card text-center">
        <!-- start header -->
        <div class="card-header">
            Data Table
        </div>
        <!-- end header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <!-- start data table -->
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">Sl No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Author Name</th>
                                <th scope="col">Publish Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($results as $key => $result) {
                            ?>
                                <tr>
                                    <th><?= $result['id']; ?></th>
                                    <td><?= $result['title']; ?></td>
                                    <td><?= $result['category']; ?></td>
                                    <td><?= !empty($result['image_path']) ? $result['image_path'] : 'Image Not Found!' ?></td>
                                    <td><?= $result['author_name']; ?></td>
                                    <td><?= $result['published_at']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary view" data-bs-toggle="modal" data-bs-target="#myModal" data-id="<?= $result['id'] ?>">View</button>
                                        <button class="btn btn-secondary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- end data table -->
                </div>
            </div>
        </div>
        <!-- start view modal -->
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="title"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="category">Category: </label>
                        <div id="category"></div>
                        <br>
                        <label for="image_path">Image: </label>
                        <div id="image_path"></div>
                        <br>
                        <label for="author_name">Author Name: </label>
                        <div id="author_name"></div>
                        <br><label for="published_at">Publish Date: </label>
                        <div id="published_at"></div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- end view modal -->
        <div class="card-footer text-muted">
            <?= date('Y') ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('button.view').click(function(e) {
                let id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: '/details.php',
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        $.each(data, function(key, val) {
                            $('#title').text(val.title);
                            $('#category').text(val.category);
                            $('#image_path').text(val.image_path);
                            $('#author_name').text(val.author_name);
                            $('#published_at').text(val.published_at);
                        })
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>