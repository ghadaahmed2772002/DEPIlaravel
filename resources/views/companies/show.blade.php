<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">{{ $company->name }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Details</h5>
            <p class="card-text"><strong>Country:</strong> {{ $company->country }}</p>
            <p class="card-text"><strong>City:</strong> {{ $company->city }}</p>
            <p class="card-text"><strong>Country Size:</strong> {{ $company->country_size }}</p>
            <a href="{{ route('companies.index') }}" class="btn btn-primary">Back to Companies</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
