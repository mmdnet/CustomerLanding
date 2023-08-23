<!DOCTYPE html>
<html>
<head>
  <title>Domain Search and Registration</title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title text-center">Domain Search and Registration</h1>
          </div>
          <div class="card-body">
            <form id="domainSearchForm">
              <div class="mb-3">
                <label for="domainName" class="form-label">Enter a Domain Name:</label>
                <input type="text" class="form-control" id="domainName" name="domainName" required>
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
        
        <div class="card mt-4" id="searchResults" style="display: none;">
          <div class="card-header">
            <h2 class="card-title">Search Results</h2>
          </div>
          <div class="card-body">
            <p id="availabilityStatus"></p>
            <button id="registerButton" class="btn btn-success" style="display: none;">Register</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Your JavaScript code here (same as the previous example)
  </script>
</body>
</html>
