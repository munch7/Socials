<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Conversations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .conversation-card {
            margin-bottom: 15px;
            border-left: 5px solid #6a11cb;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .debug-section {
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .debug-section h3 {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Facebook Conversations</h1>
        <p>Your conversations at a glance</p>
    </div>

    <div class="container my-5">
        @if(!empty($conversations))
            <h2 class="mb-4">List of Conversations</h2>
            @foreach($conversations as $conversation)
                <div class="card conversation-card">
                    <div class="card-body">
                        <h5 class="card-title">Conversation ID: {{ $conversation['id'] }}</h5>
                        <p class="card-text">
                            <strong>Snippet:</strong> {{ $conversation['snippet'] ?? 'No snippet available' }}
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <h2 class="mb-4 text-danger">No conversations found</h2>
            <p>Please check back later or verify your Facebook API settings.</p>
        @endif

        <div class="debug-section">
            <h3>Debugging Information</h3>
            <p><strong>Raw Data:</strong></p>
            <pre>{{ isset($conversations) ? json_encode($conversations, JSON_PRETTY_PRINT) : 'No data available' }}</pre>
        </div>
    </div>
</body>
</html>
