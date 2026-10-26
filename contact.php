<?php include 'includes/header.php'; ?>

<div class="container py-5">

    <h2>Contact Us</h2>

    <form action="send-contact.php" method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input
                type="text"
                name="name"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Company</label>
            <input
                type="text"
                name="company"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input
                type="text"
                name="phone"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea
                name="message"
                class="form-control"
                rows="5"></textarea>
        </div>

        <button class="btn btn-primary">
            Submit
        </button>

    </form>

</div>

<?php include 'includes/footer.php'; ?>