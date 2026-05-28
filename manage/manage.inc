<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <div id="form_listall">
        <button type="submit"
                name="command" value="EOI_all">
            List All EOI
        </button>
    </div>
</form>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <div id="form_listbyref">
        <button type="submit"
                name="command" value="EOI_reference">
            List by Job Reference
        </button>
        <label for="search_reference">Reference:</label>
            <input type="text" name="search_reference" required>
    </div>
</form>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <div id="form_listbyname">
        <button type="submit"
                name="command" value="EOI_firstname">
            List by First/Last Name
        </button>
        <label for="search_firstname">First name:</label>
            <input type="text" name="search_firstname">
        <label for="search_lastname">Last name:</label>
            <input type="text" name="search_lastname">
    </div>
</form>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <div id="form_deletebyref">
        <button type="submit"
                name="command" value="EOI_deletebyref">
            Delete all by Job Reference
        </button>
        <label for="delete_reference">Reference:</label>
            <input type="text" name="delete_reference" required>
    </div>
</form>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <div id="form_sort">
        <button type="submit"
                name="command" value="EOI_sortby">
            Sort by
        </button>
        <label for="sort_select">Reference:</label>
		<select name="sort_id" id="dropdown_sort" required>
			<option value="eoi_id" selected="selected">EOI ID</option>
			<option value="job_ref_num">Job Reference</option>
			<option value="last_name">Surname</option>
			<option value="first_name">Given Name</option>
			<option value="date_of_birth">Date of Birth</option>
			<option value="gender">Gender</option>
			<option value="street_address">Street Address</option>
			<option value="suburb">Suburb</option>
			<option value="postcode">Postcode</option>
			<option value="email">Email</option>
			<option value="phone_number">Phone Number</option>
			<option value="skills">Skills</option>
			<option value="other_skills">Other Skills</option>
			<option value="status">Status</option>
		</select>
    </div>
</form>
