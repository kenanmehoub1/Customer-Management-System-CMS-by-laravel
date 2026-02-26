<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 450px;
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #3498db 0%, #1a56db 100%);
            color: white;
            padding: 30px 25px;
            text-align: center;
        }
        
        .header h1 {
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 8px;
        }
        
        .header p {
            opacity: 0.9;
        }
        
        .form-container {
            padding: 30px 25px;
        }
        
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .input-group input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s;
        }
        
        .input-group input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 42px;
            color: #7f8c8d;
            cursor: pointer;
        }
        
        .strength-meter {
            height: 5px;
            border-radius: 3px;
            margin-top: 8px;
            background: #eee;
            overflow: hidden;
        }
        
        .strength-fill {
            height: 100%;
            width: 0%;
            transition: width 0.3s, background 0.3s;
        }
        
        .requirements {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            font-size: 13px;
        }
        
        .requirements p {
            margin-bottom: 10px;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .requirements ul {
            list-style: none;
            padding-left: 5px;
        }
        
        .requirements li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            color: #7f8c8d;
        }
        
        .requirements li.valid {
            color: #27ae60;
        }
        
        .requirements li i {
            margin-right: 8px;
            font-size: 12px;
        }
        
        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #3498db 0%, #1a56db 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }
        
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #7f8c8d;
            font-size: 13px;
        }
        
        .hidden {
            display: none;
        }
        
        @media (max-width: 480px) {
            .card {
                border-radius: 12px;
            }
            
            .header {
                padding: 25px 20px;
            }
            
            .form-container {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h1>Reset Your Password</h1>
                <p>Create a new secure password</p>
            </div>
            
            <div class="form-container">
        

                <form  action="{{ route('change',['id'=>$admin->id])}}"  method="POST">
                    @csrf
                   @method('put')
                    <input type="hidden" name="admin_id" id="adminId">
                    
                    <div class="input-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" id="newPassword" name="password" required>
                        <span class="toggle-password" id="toggleNewPassword">
                            <i class="far fa-eye"></i>
                        </span>
                        <div class="strength-meter">
                            <div class="strength-fill" id="strengthFill"></div>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="password_confirmation" required>
                        <span class="toggle-password" id="toggleConfirmPassword">
                            <i class="far fa-eye"></i>
                        </span>
                    </div>
                    
                    <div class="requirements">
                        <p>Password must meet the following requirements:</p>
                        <ul>
                            <li id="lengthReq"><i class="fas fa-circle"></i> At least 8 characters</li>
                            <li id="uppercaseReq"><i class="fas fa-circle"></i> One uppercase letter</li>
                            <li id="lowercaseReq"><i class="fas fa-circle"></i> One lowercase letter</li>
                            <li id="numberReq"><i class="fas fa-circle"></i> One number</li>
                            <li id="specialReq"><i class="fas fa-circle"></i> One special character</li>
                        </ul>
                    </div>
                    
                    <button type="submit" id="submitBtn">Reset Password</button>
                </form>
                
                <div class="footer">
                    <p>Make sure you're on a secure connection before submitting</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get URL parameters to extract admin ID
            const urlParams = new URLSearchParams(window.location.search);
            const adminId = urlParams.get('admin_id');
            
            // Set the admin ID in the hidden field
            if (adminId) {
                document.getElementById('adminId').value = adminId;
            } else {
                alert('Admin ID not found in URL. Please use the correct reset link.');
            }
            
            // Password toggle functionality
            const toggleNewPassword = document.getElementById('toggleNewPassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const newPasswordInput = document.getElementById('newPassword');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            
            toggleNewPassword.addEventListener('click', function() {
                const type = newPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                newPasswordInput.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
            
            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPasswordInput.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
            
            // Password strength meter
            newPasswordInput.addEventListener('input', function() {
                checkPasswordStrength(this.value);
                validatePassword(this.value);
                checkPasswordMatch();
            });
            
            confirmPasswordInput.addEventListener('input', checkPasswordMatch);
            
            function checkPasswordStrength(password) {
                let strength = 0;
                
                // Length requirement
                if (password.length >= 8) strength += 20;
                
                // Uppercase requirement
                if (/[A-Z]/.test(password)) strength += 20;
                
                // Lowercase requirement
                if (/[a-z]/.test(password)) strength += 20;
                
                // Number requirement
                if (/[0-9]/.test(password)) strength += 20;
                
                // Special character requirement
                if (/[^A-Za-z0-9]/.test(password)) strength += 20;
                
                document.getElementById('strengthFill').style.width = strength + '%';
                
                // Change color based on strength
                if (strength < 40) {
                    document.getElementById('strengthFill').style.background = '#e74c3c';
                } else if (strength < 80) {
                    document.getElementById('strengthFill').style.background = '#f39c12';
                } else {
                    document.getElementById('strengthFill').style.background = '#27ae60';
                }
            }
            
            function validatePassword(password) {
                // Check each requirement and update UI
                document.getElementById('lengthReq').className = password.length >= 8 ? 'valid' : '';
                document.getElementById('uppercaseReq').className = /[A-Z]/.test(password) ? 'valid' : '';
                document.getElementById('lowercaseReq').className = /[a-z]/.test(password) ? 'valid' : '';
                document.getElementById('numberReq').className = /[0-9]/.test(password) ? 'valid' : '';
                document.getElementById('specialReq').className = /[^A-Za-z0-9]/.test(password) ? 'valid' : '';
            }
            
            function checkPasswordMatch() {
                const newPassword = newPasswordInput.value;
                const confirmPassword = confirmPasswordInput.value;
                
                if (confirmPassword && newPassword !== confirmPassword) {
                    confirmPasswordInput.style.borderColor = '#e74c3c';
                } else if (confirmPassword) {
                    confirmPasswordInput.style.borderColor = '#27ae60';
                } else {
                    confirmPasswordInput.style.borderColor = '#ddd';
                }
            }
            
            // Form submission validation
            document.getElementById('passwordResetForm').addEventListener('submit', function(e) {
                const newPassword = newPasswordInput.value;
                const confirmPassword = confirmPasswordInput.value;
                
                if (newPassword !== confirmPassword) {
                    e.preventDefault();
                    alert('Passwords do not match. Please make sure both passwords are identical.');
                    return;
                }
                
                // Check if password meets all requirements
                if (newPassword.length < 8 || 
                    !/[A-Z]/.test(newPassword) || 
                    !/[a-z]/.test(newPassword) || 
                    !/[0-9]/.test(newPassword) || 
                    !/[^A-Za-z0-9]/.test(newPassword)) {
                    e.preventDefault();
                    alert('Please make sure your password meets all the requirements.');
                    return;
                }
                
                // If everything is valid, show a success message (in a real scenario, the form would submit)
                alert('Password reset successfully!');
                // In a real application, the form would submit to the server at this point
            });
        });
    </script>
</body>
</html>