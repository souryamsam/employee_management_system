 <section class="d-flex justify-content-center align-items-center min-vh-100" >
        <form class="border p-4 rounded bg-light custom-form" style="max-width: 600px; width: 100%;"  method="post" action="<?php echo base_url('Home/addemp') ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control"  name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control"  name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" name="position" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </section>
