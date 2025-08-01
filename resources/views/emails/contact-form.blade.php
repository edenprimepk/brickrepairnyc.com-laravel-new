<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        /* Reset some default styling */
        body,
        h1,
        h2,
        h3,
        p,
        td {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Body background color */
        body {
            background-color: #f8f8f8;
        }

        /* Header styles */
        .header {
            background-color: #F26423;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        /* Job application details section */
        .application-details {
            background-color: #fff;
            margin: 20px auto;
            max-width: 600px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .application-details h2 {
            color: #F26423;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .application-details p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .application-details blockquote {
            margin: 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #000000;
            margin-bottom: 20px;
            font-style: italic;
        }

        /* Form input styles */
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
            transition: border-color 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        /* Submit button styles */
        .submit-btn {
            background-color: #F26423;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .submit-btn:hover {
            background-color: #F26423;
        }

        /* Footer styles */
        .footer {
            background-color: #F26423;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Dear Admin,</h2>
        <p>
            <strong>New Contact Request From Website: 
                <a href="https://thesidewalkrepairnyc.com/">thesidewalkrepairnyc.com</a>
            </strong>
        </p>
    </div>

    <div class="application-details">
        <p><strong>First Name:</strong> {{ $data['first_name'] ?? 'N/A' }}</p>
        <p><strong>Last Name:</strong> {{ $data['last_name'] ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] ?? 'N/A' }}</p>
        <p><strong>ZIP Code:</strong> {{ $data['zip'] ?? 'N/A' }}</p>
        <p><strong>Service Requested:</strong> {{ $data['service'] ?? 'N/A' }}</p>
        <p><strong>Message:</strong> {{ $data['message'] ?? 'No message provided' }}</p>

        @if(!empty($data['agree']))
            <p><strong>Terms Accepted:</strong> Yes</p>
        @endif

        <form method="get" action="/">
            <input type="submit" class="submit-btn" value="Back to Form">
        </form>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} All rights reserved.</p>
    </div>
</body>


</html>
