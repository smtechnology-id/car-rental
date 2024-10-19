<div class="card">
    <div class="card-body">
        <h5 class="card-title">Create Car</h5>
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url('admin/carUpdate'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Car Name</label>
                <input type="text" class="form-control" id="name" name="name" required value="<?php echo $car->name; ?>">
                <input type="hidden" class="form-control" id="id" name="id_car" required value="<?php echo $car->id_car; ?>">
                <input type="hidden" class="form-control" id="slug" name="slug" required value="<?php echo $car->slug; ?>">
            </div>
            <div class="form-group">
                <label for="description">Car Description</label>
                <textarea class="form-control" id="description" name="description" required><?php echo $car->description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Car Image</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*" value="<?php echo $car->photo; ?>">
                <img src="<?php echo base_url('assets/car-images/' . $car->photo); ?>" alt="<?php echo $car->name; ?>" style="width: 100px; height: auto;">
            </div>
            <div class="form-group">
                <label for="price_rate">Price Rate (Per Day)</label>
                <input type="number" class="form-control" id="price_rate" name="price_rate" required value="<?php echo $car->price_rate; ?>">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seat">Seat</label>
                        <input type="number" class="form-control" id="seat" name="seat" required placeholder="2" value="<?php echo $car->seat; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="door">Door</label>
                        <input type="number" class="form-control" id="door" name="door" required placeholder="2" value="<?php echo $car->door; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="engine">Engine</label>
                        <select class="form-control" id="engine" name="engine" required>
                            <option value="Manual" <?php echo ($car->engine == 'Manual') ? 'selected' : ''; ?>>Manual</option>
                            <option value="Automatic" <?php echo ($car->engine == 'Automatic') ? 'selected' : ''; ?>>Automatic</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <select class="form-control" id="fuel_type" name="fuel_type" required>
                            <option value="Bensin" <?php echo ($car->fuel == 'Bensin') ? 'selected' : ''; ?>>Bensin</option>
                            <option value="Solar" <?php echo ($car->fuel == 'Solar') ? 'selected' : ''; ?>>Solar</option>
                            <option value="Diesel" <?php echo ($car->fuel == 'Diesel') ? 'selected' : ''; ?>>Diesel</option>
                            <option value="Electric" <?php echo ($car->fuel == 'Electric') ? 'selected' : ''; ?>>Electric</option>
                            <option value="Hybrid" <?php echo ($car->fuel == 'Hybrid') ? 'selected' : ''; ?>>Hybrid</option>
                            <option value="Other" <?php echo ($car->fuel == 'Other') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>