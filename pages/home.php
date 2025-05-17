<!-- Hero Section with Full-Width Background Image -->
<section class="text-white d-flex align-items-center justify-content-center" style="background: url('<?php echo IMAGES; ?>/exterior.webp') center center / cover no-repeat; height: 75vh;">
    <div class="container text-center">
        <h1 class="display-4">Loveless Estates by Priority Homes</h1>
        <p class="lead">Modern townhomes in Nephi, Utah</p>
        <a href="#available-homes" class="btn btn-light btn-lg mt-3">See Available Homes</a>
    </div>
</section>

<!-- Builder Introduction -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="<?php echo IMAGES; ?>/logo.webp" alt="Priority Homes Logo" class="img-fluid mb-3" style="max-height: 100px;">
            </div>
            <div class="col-md-8 mt-3">
                <h2 class="text-start">About Priority Homes</h2>
                <p>Priority Homes is a trusted Central Utah builder committed to delivering high-quality, thoughtfully designed homes that stand the test of time. With a focus on craftsmanship, comfort, and community, we’re proud to build homes for families in Nephi and beyond.</p>
            </div>
        </div>
    </div>
</section>

<!-- Community Highlights -->
<section class="bg-white pb-5">
    <div class="container">
        <h2 class="mb-4">Loveless Estates Highlights</h2>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="<?php echo IMAGES; ?>/living_room.webp" alt="Living Room" class="img-fluid rounded shadow-sm">
                <p class="mt-2">Open Living Areas</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="<?php echo IMAGES; ?>/kitchen.webp" alt="Kitchen" class="img-fluid rounded shadow-sm">
                <p class="mt-2">Modern Kitchens</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="<?php echo IMAGES; ?>/primary_bedroom.webp" alt="Primary Bedroom" class="img-fluid rounded shadow-sm">
                <p class="mt-2">Spacious Primary Suite</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                &nbsp;
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled mb-5">
                    <li>✔️ 3 Bed / 2.5 Bath Townhomes</li>
                    <li>✔️ 2579 sq. ft.</li>
                    <li>✔️ Attached garages</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled mb-5">
                    <li>✔️ Granite countertops, LVP flooring</li>
                    <li>✔️ Energy-efficient construction</li>
                    <li>✔️ Easy access to I-15</li>
                </ul>
            </div>
            <div class="col-md-3">
                &nbsp;
            </div>
        </div>
    </div>
</section>

<!-- Floorplan Section -->
<section id="floorplan" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                &nbsp;
            </div>
            <div class="col-md-2 my-5">
                <img src="<?php echo IMAGES; ?>/floorplan.webp" alt="Loveless Floorplan" style="max-height: 350px" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-8">
                <h2 class="mb-4 text-start">Available Floorplan</h2>
                <h3 class="text-start">The Loveless</h3>
                <p><strong>3 Bed / 2.5 Bath &middot; Approx. 2,600 Sq Ft</strong></p>
                <p>This spacious two-story townhome features an open-concept main level, a modern kitchen, and a luxurious primary suite with a walk-in closet. Built for comfort and designed for modern living.</p>
                <a href="<?php echo IMAGES; ?>/loveless_plans.pdf" class="btn btn-primary mt-2" target="_blank">View Floorplan PDF</a>
            </div>
        </div>
    </div>
</section>

<!-- Availability Section -->
<section id="available-homes" class="bg-white py-5">
    <div class="container">
        <h2 class="mb-4">Available Homes</h2>
        <div class="table-responsive">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th class="text-start">Address</th>
                    <th>Status</th>
                    <th>Est. Completion</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($homeInfo as $home): ?>
                <tr>
                    <td class="text-start">
                    <?php
                        $address = htmlspecialchars($home['Street Address'], ENT_QUOTES);
                        $city    = htmlspecialchars($home['City/State'], ENT_QUOTES);
                    ?>
                    <?php if (!empty($home['MLS'])): ?>
                        <a href="<?php echo htmlspecialchars($home['MLS'], ENT_QUOTES); ?>" target="_blank" rel="noopener">
                        <?php echo $address . ', ' . $city; ?>
                        </a>
                    <?php else: ?>
                        <?php echo $address . ', ' . $city; ?>
                    <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($home['Status'], ENT_QUOTES); ?></td>
                    <td><?php echo htmlspecialchars($home['Est Completion'], ENT_QUOTES); ?></td>
                    <td><?php echo htmlspecialchars($home['Price'], ENT_QUOTES); ?></td>
                </tr>
            <?php endforeach; ?>
            <!-- Add more rows as needed -->
            </tbody>
        </table>
        </div>
    </div>
</section>
