<?php
session_start();
if (!isset($_SESSION['email'], $_SESSION['role'])) {
  header("Location: ./index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <nav class="navbar">
    <a href="index.php" class="navbar-logo">EDU <span>TUR</span></a>
    <div class="navbar-nav">
      <a href="profile.php" id="profile">PROFILE</a>

      <?php
      // Cek apakah pengguna sudah login dan memiliki role "admin"
      if (isset($_SESSION['user_id'])) {
        // Ganti "admin" dengan nilai role yang menandakan admin
        if ($_SESSION['role'] === "admin") {
          echo '<a href="dashboard.php">DASHBOARD</a>';
        }
      }
      ?>

      <a href="about.php">ABOUT</a>
      <a href="help.php">HELP</a>
    </div>
    <?php
    // Cek apakah pengguna sudah login dan memiliki role "admin"
    if (isset($_SESSION['user_id'])) {
      echo '<a href="profile.php"><i class="fa-solid fa-user"></i></a>';
    } else {
      echo '<a href="masuk.html"><i class="fa-solid fa-user"></i></a>';
    }
    ?>
    <div class="navbar-extra">
      <a href="#" id="menu"><i class="fa-solid fa-bars"></i></a>
    </div>
  </nav>


  <?php
  include "php/koneksi.php"; // Include koneksi database

  // Inisialisasi nilai-nilai pengguna
  $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
  $password = isset($_SESSION['password']) ? $_SESSION['password'] : '';

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username']; // Jika ini tidak perlu diubah, Anda mungkin ingin menyimpannya dalam hidden field.

    $query = "UPDATE users SET username = :username, password = :password WHERE email = :email";
    $stmt = $pdo->prepare($query);

    try {
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':password', $password, PDO::PARAM_STR);
      $stmt->bindParam(':username', $username, PDO::PARAM_STR);
      $stmt->execute();
    } catch (PDOException $e) {
      echo "Terjadi kesalahan: " . $e->getMessage();
    }
  }
  ?>

  <main>
    <section class="profile">
      <div class="box">
        <form action="" method="POST">
          <div class="Photo">
            <img src="./img/borobudur.jpg" alt="photo-profile" />
          </div>
          <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" class="input-control" value="<?php echo $username; ?>" required />
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="name@example.com" class="input-control" value="<?php echo $email; ?>" required readonly />
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" class="input-control" value="<?php echo $password; ?>" required />
            <button type="submit" name="submit" value="submit" class="btn btn-save" onclick="confirmUpdate()" required> Save </button>
            <button class="btn btn-logout" id="logout">Logout</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <script>
    document.getElementById("logout").addEventListener("click", function() {
      var shouldUpdate = confirm("Are you sure you want to logout?");
      if (shouldUpdate) {
        // Redirect to the PHP script that handles delete
        window.location.href = "php/logout.php";
      }
    });

    function confirmUpdate() {
      var shouldUpdate = confirm("Are you sure you want to update data account?");
      if (shouldUpdate) {
        // Redirect to the PHP script that handles delete
        window.location.href = "./profile.php";
      }
    }
  </script>
</body>

</html>