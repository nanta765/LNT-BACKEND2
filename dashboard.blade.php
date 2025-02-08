 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>
  <!-- Header Navbar -->
  <header>
    <nav>
      <a href="#" class="active">Dashboard</a>
      <a href="#">Profile Admin</a>
    </nav>
  </header>

  <!-- Search Bar -->
  <div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search by name or email...">
  </div>

  <!-- User Table -->
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Photo</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      @foreach ($data_people as $)
    </thead>
    <tbody>
      <tr>
        <td>{{ $data_people->id }}</td>
        <td><img src="https://via.placeholder.com/50" alt="John Doe"></td>
        <td>{{  $data_people-> $full_name }}</td>
        <td>john@example.com</td>
        <td>28</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Add New User Button -->
  <button id="addUserBtn">Add New User</button>

  <!-- Footer -->
  <footer>
    <p>© 2023 Your Company. All rights reserved.</p>
    <div class="social-media">
      <a href="#">Instagram</a> |
      <a href="#">LinkedIn</a> |
      <a href="#">Twitter</a>
    </div>
  </footer>

  <!-- Modal untuk Add/Edit User -->
  <div id="userModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="modalTitle">Add New User</h2>
      <form id="userForm">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" required>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" required>
        <label for="email">Email:</label>
        <input type="email" id="email" required>
        <label for="photo">Photo URL:</label>
        <input type="text" id="photo" required>
        <button type="submit">Save</button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
