<div class="card">
    <div class="card-body">
        <h5 class="card-title">Create Car</h5>
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url('admin/carStore'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Car Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Car Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Car Image</label>
                <input type="file" class="form-control" id="photo" name="photo" required accept="image/*">
            </div>
            <div class="form-group">
                <label for="price_rate">Price Rate (Per Day)</label>
                <input type="number" class="form-control" id="price_rate" name="price_rate" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seat">Seat</label>
                        <input type="number" class="form-control" id="seat" name="seat" required placeholder="2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="door">Door</label>
                        <input type="number" class="form-control" id="door" name="door" required placeholder="2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="engine">Engine</label>
                        <select class="form-control" id="engine" name="engine" required>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <select class="form-control" id="fuel_type" name="fuel_type" required>
                            <option value="Bensin">Bensin</option>
                            <option value="Solar">Solar</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>