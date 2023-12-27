<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ISP | Admin</title>
        <link rel="shortcut icon" href="{{ asset('custom/logos/63ad6513910c700fe5b28d45_istockphoto-1317904450-612x612.jpg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('custom/css/style.css') }}">
    </head>
    <body style="background-image: url('{{ asset('custom/logos/360_F_535372345_mxLLLeGz1RIzclVFvoyLs2xvLFMPC9xX.jpg') }}')">

        <div id="login-options">
            <button class="login-btn" onclick="redirectToLogin('admin')">Login as Admin</button>
            <button class="login-btn" onclick="redirectToLogin('seller')">Login as Seller</button>
            <button class="login-btn" onclick="redirectToLogin('customer')">Login as Customer</button>
        </div>

        <script>
            function redirectToLogin(type) {
                switch (type) {
                    case 'admin':
                        // Redirect to admin login page or handle accordingly
                        window.location.href = '{{ url('/admin/login') }}';
                        break;
                    case 'seller':
                        // Redirect to seller login page or handle accordingly
                        window.location.href = '{{ url('/seller/login') }}';
                        break;
                    case 'customer':
                        // Redirect to customer login page or handle accordingly
                        window.location.href = '{{ url('/customer/login') }}';
                        break;
                    default:
                        alert('Invalid option');
                        break;
                }
            }
        </script>

    </body>
</html>
