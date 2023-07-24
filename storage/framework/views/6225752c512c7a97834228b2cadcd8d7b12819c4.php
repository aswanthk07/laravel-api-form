<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
	<h1>Form Validation & Submission</h1>
    <form id="formSubmissionForm">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required><br>
        
        <button type="submit">Submit</button>
    </form>

    <div id="responseMessage"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#formSubmissionForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '/api/form',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#responseMessage').text(response.message);
                },
                error: function(response) {
                    $('#responseMessage').text(response.responseJSON.message);
                }
            });
        });
    </script>
</body>
</html>

<?php /**PATH /home/aswanth/laravel_form_api/resources/views/form.blade.php ENDPATH**/ ?>