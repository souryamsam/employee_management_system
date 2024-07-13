<section class="d-flex justify-content-center align-items-center min-vh-100">
    <form class="border p-4 rounded bg-light custom-form" style="max-width: 600px; width: 100%;" action="<?php echo base_url('Home/update'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phone" value="<?php echo $user['phone']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $user['address']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" value="<?php echo $user['position']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" name="department" value="<?php echo $user['department']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</section>
