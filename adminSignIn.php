<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="signInUp.css" />
</head>

<body>

    <div class="auth-container">

        <form id="step1Form" class="d-block">
            <h3 class="text-center mb-4">Admin Sign In</h3>
            <p>Enter your username or email address to receive a confirmation code.</p>
            <div class="mb-3">
                <label for="usernameOrEmail" class="form-label">Username or Email</label>
                <input type="text" id="resetPwEmail" class="form-control" placeholder="Enter username or email" required>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <button type="button" class="btn btn-primary w-100" onclick="toggleForm('step2Form')">Send Confirmation Code</button>
                </div>
            </div>
        </form>

        <form id="step2Form" class="d-none">
            <h3 class="text-center mb-4">Admin Sign In</h3>
            <p>A confirmation code has been sent to your email. Please enter it below : </p>
            <form id="step2Form">
                <div class="mb-3">
                    <label for="confirmationCode" class="form-label">Confirmation Code</label>
                    <input type="text" id="confirmationCode" class="form-control" placeholder="Enter confirmation code" required>
                    <div class="text-end mt-2">
                        <a href="#" class="text-decoration-none">Didn't receive it? Resend the confirmation code</a>
                    </div>
                </div>
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <a type="button" class="btn btn-primary w-100" href="adminDashboard.php">Verify Code</a>
                    </div>
                </div>
                <div class="row g-2 justify-content-end mt-3">
                    <div class="col-6 col-md-auto">
                        <button class="btn btn-secondary w-100" onclick="toggleForm('step1Form')">Back</button>
                    </div>
                    <div class="col-6 col-md-auto">
                        <button class="btn btn-danger w-100" onclick="toggleForm('step1Form')">Cancel</button>
                    </div>
                </div>
            </form>
        </form>
    </div>

    <script>
        toggleForm('step1Form');
        function toggleForm(formToShow) {
            const signInForm = document.getElementById('step1Form');
            const signUpForm = document.getElementById('step2Form');
            if (formToShow === 'step1Form') {
                step1Form.classList.remove('d-none');
                step2Form.classList.add('d-none');
            } else {
                step2Form.classList.remove('d-none');
                step1Form.classList.add('d-none');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>