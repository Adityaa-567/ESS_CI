<style>
    /* FIX HEADER TEXT ROTATION / VERTICAL STACKING */
    th {
        white-space: nowrap !important;
        /* keep text in one line */
        writing-mode: horizontal-tb !important;
        transform: rotate(0deg) !important;
        text-orientation: mixed !important;
    }

    td {
        white-space: nowrap;
    }

    table {
        table-layout: auto !important;
        /* allow natural width */
    }
</style>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
        <h4 class="mb-2 mb-md-0">Staff Details</h4>

        <a style="margin-left: 80%;" href="<?= base_url('Staff/add'); ?>" class="btn btn-primary mt-2 mt-md-0">
            Add Staff
        </a>
    </div>

    <div class="card-body">

        <!-- Flash Messages -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <!-- RESPONSIVE WRAPPER -->
        <div class="table-responsive">
            <table id="dtbl" class="table table-bordered table-striped align-middle" style="font-size: 14px;">

                <thead class="btn-primary">
                    <tr>
                        <th>Q</th>
                        <th>Staff ID</th>
                        <th>Emp Name</th>
                        <th>NFC CardNo</th>
                        <th>Job Role</th>
                        <th>Join Date</th>
                        <th>Phone NO</th>
                        <th>Birth Date</th>
                        <th>Status</th>
                        <th class="text-center" colspan="3">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($staffs): ?>
                        <?php foreach ($staffs as $count => $staff): ?>
                            <tr>

                                <!-- QR -->
                                <td class="text-center">
                                   <a href="<?= base_url('Staff/emp_list/' . $staff->staff_id) ?>">
    <i class="fas fa-qrcode"></i>
</a>

                                    </a>

                                </td>

                                <td><?= $staff->staff_id ?></td>
                                <td><?= $staff->emp_name ?></td>
                                <td><?= $staff->nfc_card ?></td>
                                <td><?= $staff->desig ?></td>
                                <td><?= $staff->join_dt ?></td>
                                <td><?= $staff->phn_no ?></td>
                                <td><?= $staff->birth_dt ?></td>
                                <td><?= $staff->staff_st ?></td>

                                <!-- VIEW -->
                                <td class="text-center">
                                    <a href="<?= base_url('Staff/view/' . $staff->staff_id); ?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>

                                <!-- EDIT -->
                                <td class="text-center">
                                    <a href="<?= base_url('Staff/edit/' . $staff->staff_id); ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>

                                <!-- DELETE -->
                                <td class="text-center">
                                    <a href="<?= base_url('Staff/delete/' . $staff->staff_id); ?>"
                                        onclick="return confirm('Delete this user?');">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>