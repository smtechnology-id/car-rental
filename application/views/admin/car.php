<div class="card">
    <div class="card-body">
        <h5 class="card-title">Car</h5>
        <a href="<?php echo base_url('admin/carCreate'); ?>" class="btn btn-primary">Create</a>
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Engine</th>
                        <th>Fuel</th>
                        <th>Seat</th>
                        <th>Door</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cars as $car): ?>
                        <tr>
                            <td><img src="<?php echo base_url('assets/car-images/' . $car->photo); ?>" alt="<?php echo $car->name; ?>" style="width: 100px; height: auto;"></td>
                            <td><?php echo $car->name; ?></td>
                            <td>Rp. <?php echo number_format($car->price_rate, 0, ',', '.'); ?></td>
                            <td><?php echo substr($car->description, 0, 30); ?>...</td>
                            <td><?php echo $car->engine; ?></td>
                            <td><?php echo $car->fuel; ?></td>
                            <td><?php echo $car->seat; ?> Person</td>
                            <td><?php echo $car->door; ?> Door</td>
                            <td>
                                <?php if($car->status == 'available'): ?>
                                    <span class="badge badge-success">Available</span>
                                <?php elseif($car->status == 'rented'): ?>
                                    <span class="badge badge-danger">Rented</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('admin/carEdit/' . $car->slug); ?>" class="btn btn-primary"><i class="material-icons">edit</i></a>
                                <a href="<?php echo base_url('admin/carDelete/' . $car->slug); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?');"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
