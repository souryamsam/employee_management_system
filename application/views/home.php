<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Employee List</h2>
        <a class="btn btn-primary" href="<?php echo base_url('Home/addempfrom') ?>">Add Employee</a>
    </div>
    <form method="post" action="<?php echo base_url('Home/searchEmp') ?>">
        <div class="input-group mb-4">
            <input type="text" name="emp_id" class="form-control" id="search" placeholder="Search for employees by ID...">
            <button type="submit" class="btn btn-outline-secondary">Search</button>
        </div>
    </form>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Position</th>
                <th scope="col">Department</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($user_data)): ?>
                <tr>
                    <td colspan="8" class="text-center">No employees found.</td>
                </tr>
                <tr>
                    <td colspan="8" class="text-center">
                        <a class="btn btn-primary" href="<?php echo base_url('Home/home') ?>">Home</a>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($user_data as $user): ?>
                    <tr>
                        <th scope="row"><?php echo $user['id']; ?></th>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['position']; ?></td>
                        <td><?php echo $user['department']; ?></td>
                        <td>
                            <a href="<?php echo base_url("Home/editEmp/{$user['id']}") ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo base_url("Home/delete/{$user['id']}") ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="8" class="text-center">
                        <a class="btn btn-primary" href="<?php echo base_url('Home/home') ?>">Back</a>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>
