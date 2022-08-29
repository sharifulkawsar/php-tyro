<?php
include 'conn.php';
$query = $conn->prepare("SELECT * FROM posts");
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $conn->prepare("SELECT * FROM categories");
$query->execute();
$categoriesResults = $query->fetchAll(PDO::FETCH_ASSOC);
?>

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

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">তথ্য</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">লিংক</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ধরণ
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">নিষ্ক্রিয়</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="শিরোনাম দিয়ে খুজুন" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">খুজুন</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end header -->
    <div class="card text-center">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="card-header">
                        <label class="float-start" for=""><b>দেশ ও শহরের তথ্য</b></label>
                        <button class="btn btn-primary float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">নতুন</button>
                    </div>
                    <!-- start data table -->
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">ক্রম</th>
                                <th scope="col">শিরোনাম</th>
                                <th scope="col">শ্রেণী</th>
                                <th scope="col">ছবি</th>
                                <th scope="col">প্রতিনিধি নাম</th>
                                <th scope="col">জারিকৃত তারিখ</th>
                                <th scope="col">কার্যক্রম</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($results as $key => $result) {
                            ?>
                                <tr>
                                    <th><?= $key + 1; ?></th>
                                    <td><?= $result['title']; ?></td>
                                    <td><?= $result['category']; ?></td>
                                    <td>
                                        <img style="height: 50px; width: 50px;" src="<?php echo !empty($result['image_path']) ? $result['image_path'] : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'; ?>" alt="post image">
                                    </td>
                                    <td><?= $result['author_name']; ?></td>
                                    <td><?= $result['published_at']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary view" data-bs-toggle="modal" data-bs-target="#myModal" data-id="<?= $result['id'] ?>">দেখুন</button>
                                        <button class="btn btn-secondary">সংশোধন</button>
                                        <button class="btn btn-danger" onclick="return roomFunction(<?= $result['id']; ?>)">মুছুন</button>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- end data table -->
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">পেছনে</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">১</a></li>
                        <li class="page-item"><a class="page-link" href="#">২</a></li>
                        <li class="page-item"><a class="page-link" href="#">৩</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">পরবর্তি</a>
                        </li>
                    </ul>
                </nav>
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
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>শিরোনাম</td>
                                    <td>
                                        <p id="titles"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>শ্রেণী</td>
                                    <td>
                                        <p id="category"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ছবি</td>
                                    <td><img style="height: 100px; width: 150px;" src="" alt="" id="image_path"></img></th>
                                </tr>
                                <tr>
                                    <td>প্রতিনিধি নাম</td>
                                    <td>
                                        <div id="author_name"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>জারিকৃত তারিখ</td>
                                    <td>
                                        <div id="published_at"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">বন্ধ করুন</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- add modal -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">নতুন তথ্য সংরক্ষণ করুনঃ</h5>
                <button id="offClose" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form id="data" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">শিরোনাম</span>
                        <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">শ্রেণী</label>
                        <select name="category" class="form-select" id="inputGroupSelect01">
                            <option selected>--বাছাই করুন--</option>
                            <?php foreach ($categoriesResults as $categoriesResult) : ?>
                                <option value="<?= $categoriesResult['name']; ?>"><?= $categoriesResult['name']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">ছবি</label>
                        <input type="file" name="image_path" class="form-control" id="inputGroupFile01">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">প্রতিনিধি নাম</span>
                        <input type="text" name="author_name" aria-label="Full Name" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">তারিখ</span>
                        <input type="date" name="published_at" class="form-control" aria-label="Date" id="datepicker">
                    </div>
                    <div class="col-auto float-end">
                        <button type="" class="btn btn-danger mb-3">রিসেট</button>
                        <button type="submit" class="btn btn-success mb-3">সংরক্ষন</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end add modal -->
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© <?php echo date('Y') ?> Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.min.js" integrity="sha512-gCB2+0sWe4La5U90EqaPP2t58EczKkQE9UoCpnkG2EDSOOihgX/6MiT3MC4jYVEX03pv6Ydk1xybLG/AtN+3KQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.all.js" integrity="sha512-W5SwJPyOiXXyfvtnUlX/T1s6PLgKSuUcSD++cdbY0zOPi4/Ymu4dCzBHnlH5OPxKPRp6XyBp+3jvmxuMyCsoaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.all.min.js" integrity="sha512-cgolxBUBvc5yorfBxXYQCvGEaTbZDdRMDjGrMw8h4G01gm/BfHlN8CO3amP68GbNbw8LY5uj/CFW4qpY9lHyPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.js" integrity="sha512-7d55UBuf00ZDx2Vq6ixYFfC6teVZx85aVXHXg7pafFcrj6yD3HqkiASCsYpZW7wqkT1oyes3lItPXrokMr2pKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script>
        // start view data
        $(document).ready(function() {
            $('button.view').click(function(e) {
                let id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: 'details.php',
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        $.each(data, function(key, val) {
                            $('#titles').text(val.title);
                            $('#category').text(val.category);
                            $('#image_path').attr("src", val.image_path ? val.image_path : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png');
                            $('#author_name').text(val.author_name);
                            $('#published_at').text(val.published_at);
                        })
                    }
                });
                return false;
            });
        });
        // end view data 

        // start add data 
        $("form#data").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: 'add.php',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#offClose').click();
                    if (data) {
                        Swal.fire(
                            'ধন্যবাদ!',
                            'সফলভাবে সংরক্ষণ করা হয়েছে।',
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'দুঃখিত!',
                            'সংরক্ষণ সম্ভব হয়নি।',
                            'error'
                        )
                    }
                }
            });
        });
        // end add data 

        // start delete data 
        function roomFunction(id) {
            Swal.fire({
                title: 'আপনি কি মুছে ফেলতে চান?',
                text: "আপনি চাইলে ফাইলটি ফিরিয়ে আনতে পারবেন না!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'হ্যাঁ, মুছে ফেলুন!',
                cancelButtonText: 'না'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'delete.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if (data) {
                                Swal.fire(
                                    'মুছে ফেলা হয়েছে!',
                                    'আপনার ফাইলটি মুছে ফেলা হয়েছে।',
                                    'success'
                                )
                            } else {
                                Swal.fire(
                                    'দুঃখিত!',
                                    'পুনরায় চেষ্টা করুন।',
                                    'error'
                                )
                            }
                        }
                    });
                }
            })
            return false;
        }
        // start delete data 
    </script>
</body>

</html>