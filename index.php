<?php 
  require_once 'controllers/authController.php'; 
  if(!isset($_SESSION['id'])){
    header('location: login.php');
    exit();
  }
?>

<div class="container">
  <div class="row">

    <div class="col-md-4 offset-md-4 form-div login index">

      <?php if(isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['alert-class']; ?>">
          <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
          ?>
        </div>
      <?php endif; ?>
      <h3>Welcome,<?php echo $_SESSION['username']; ?> </h3>
    
      <a href="index.php?logout=1" class="logout">logout</a>
    
      <?php if(!$_SESSION['verified']): ?>
        <div class="alert alert-warning">
          You need to verify your account.Sign into your email account and click on the verification link we just sentyou at <strong><?php echo $_SESSION['email']; ?></strong>
        </div>
      <?php endif;?>

      <?php if($_SESSION['verified']): ?>
        <button class="btn btn-block btn-lg btn-primary">I'm verified</button>
      <?php endif; ?> 
    </div>
    
  </div>
</div>
