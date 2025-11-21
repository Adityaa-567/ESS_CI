<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <h4 style="margin-left: -50%;" class="mb-2 mb-md-0">Staff Details</h4>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <!-- FIXED FORM ACTION -->
                        <form method="post" action="<?= base_url('Staff/emp_list/' . $staff->staff_id); ?>" autocomplete="off">

                            <input type="hidden" name="old_staff_id" value="<?= $staff->staff_id ?? '' ?>">

                            <table class="table table-bordered">

                                <!-- STAFF ID -->
                                <tr>
                                    <td colspan="2">
                                        <label class="form-label">Staff ID</label>
                                        <input class="form-control" type="text" name="staff_id"
                                               value="<?= $staff->staff_id ?? '' ?>" readonly>
                                    </td>
                                </tr>

                                <!-- EMP NAME + WORK STATUS -->
                                <tr>
                                    <td>
                                        <label>Employee Name</label>
                                        <input class="form-control" type="text" name="emp_name"
                                               value="<?= $staff->emp_name ?? '' ?>" readonly>
                                    </td>

                                    <td>
                                        <label>Work Status</label>
                                        <select class="form-control" name="staff_st">
                                            <option value="No Punch">No Punch</option>
                                            <option value="WFH">WFH</option>
                                            <option value="On Duty">On Duty</option>
                                            <option value="Leave">Leave</option>
                                            <option value="WFO">WFO</option>
                                        </select>
                                    </td>
                                </tr>

                                <!-- DATE -->
                                <tr>
                                    <td>
                                        <label>Date</label>
                                        <input class="form-control" type="date" name="date"
                                               value="<?= $today ?? date('Y-m-d') ?>">
                                    </td>
                                </tr>

                                <!-- SUBMIT -->
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </td>
                                </tr>

                            </table>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
