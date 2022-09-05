<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">
                <div class="card">
                    <div class="card-header p-3">

                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
                        <form method="post" action="index.php" class="input_form">
                            <?php if (isset($errors)) { ?>
                                <p style="color: red;"><?php echo $errors; ?></p>
                            <?php } ?>
                            <div class="input-group mb-3">
                                <input type="text" name="task" class="form-control task_input" placeholder="Write your task..." aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                <button class="btn btn-info ms-2 add_btn" type="submit" name="submit" id="add_btn">Add Task</button>
                            </div>
                        </form>
                    </div>
                    <div class="card example-1 square scrollbar-cyan bordered-cyan" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                        <table class="table mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Serail No</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // select all tasks if page is visited or refreshed
                                $query = $conn->prepare("SELECT * FROM tasks");
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_ASSOC);

                                $i = 1;
                                foreach ($results as $key => $row) {
                                ?>
                                    <tr class="fw-normal">
                                        <td>
                                            <span class="ms-2"><?php echo $i; ?></span>
                                        </td>

                                        <?php
                                        if ($row['status'] == 1) {
                                        ?>
                                            <td class="align-middle">
                                                <span><del style="color: red;"><?php echo $row['task']; ?></del></span>
                                            </td>
                                        <?php
                                        } else {
                                        ?>
                                            <td class="align-middle">
                                                <span><?php echo $row['task']; ?></span>
                                            </td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if ($row['priority'] == 1) {
                                        ?>
                                            <td class="align-middle">
                                                <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                                            </td>
                                        <?php
                                        } elseif ($row['priority'] == 2) {
                                        ?>
                                            <td class="align-middle">
                                                <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                                            </td>
                                        <?php
                                        } else {
                                        ?>
                                            <td class="align-middle">
                                                <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                                            </td>
                                        <?php
                                        }
                                        ?>

                                        <td class="align-middle">
                                            <?php
                                            if ($row['status'] == 0) {
                                            ?>
                                                <a href="index.php?done_task=<?php echo $row['id'] ?>" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check text-success me-3"></i></a>

                                            <?php
                                            } else {
                                            ?>
                                                <a href="index.php?reopen_task=<?php echo $row['id'] ?>" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-times text-danger me-3"></i></a>

                                            <?php
                                            }
                                            ?>
                                            <a href="index.php?del_task=<?php echo $row['id'] ?>" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt text-danger" onclick="return confirm('Are you sure?')"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>