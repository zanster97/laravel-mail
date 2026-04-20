<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Contact Form</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .glass-card {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.4);
            color: #fff;
        }

        .form-control {
            background: rgba(255,255,255,0.1);
            border: none;
            border-radius: 10px;
            color: #fff;
        }

        .form-control:focus {
            background: rgba(255,255,255,0.15);
            box-shadow: none;
            border: 1px solid #00c6ff;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-custom {
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            border: none;
            border-radius: 50px;
            padding: 12px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 114, 255, 0.5);
        }

        .title {
            font-weight: 600;
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    <div class="glass-card">
        <h3 class="title">✨ Get in Touch</h3>

        <form action="{{ route('send.mail') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>

            <div class="mb-4">
                <label class="form-label">Message</label>
                <textarea class="form-control" rows="4" placeholder="Write your message..." name="message"></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-custom">Send Message 🚀</button>
            </div>
        </form>
    </div>

</body>
</html>
