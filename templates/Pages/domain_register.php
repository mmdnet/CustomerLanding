<?php
$users_table = TableRegistry::getTableLocator()->get('users')->find()->all();
$users = $this->newEmptyEntity($users_table);
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title text-center">Complete Domain Registration</h1>
        </div>
        <div class="card-body">
          <p class="lead">You're about to register the domain:</p>
          <h3 class="text-center" id="selectedDomain"></h3>
          <p id="availabilityStatus" class="text-center"></p>
          <?php echo $this->Form->create('users'); ?>
            <?php echo $this->Form->control('first_name', ['label' => 'First Name', 'placeholder' => 'Joe', 'class' => 'form-control']); ?>
            <?php echo $this->Form->control('last_name', ['label' => 'Last Name', 'placeholder' => 'Shmo', 'class' => 'form-control']); ?>
            <?php echo $this->Form->control('phone', ['label' => 'Phone (optional)', '(xxx)xxx-xxxx', 'class' => 'form-control']); ?>
            <?php echo $this->Form->control('email', ['label' => 'Email Address', 'placeholder' => 'name@email.com', 'class' => 'form-control']); ?>
            <?php echo $this->Form->control('password', ['label' => 'Create Password', 'placeholder' => '******', 'class' => 'form-control']); ?>
            <?php echo $this->Form->control('password_confirm', ['label' => 'Confirm', 'placeholder' => ' ', 'class' => 'form-control']); ?>

            <button type="submit" class="btn btn-success">Register Domain</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const domainName = urlParams.get('domainName');
  const apiUrl = decodeURIComponent(urlParams.get('apiUrl'));

  const selectedDomainElement = document.getElementById('selectedDomain');
  selectedDomainElement.textContent = domainName;

  // Perform API call to check domain availability
  fetch(apiUrl)
    .then(response => response.text())
    .then(data => {
      const parser = new DOMParser();
      const xmlDoc = parser.parseFromString(data, 'text/xml');
      const availability = xmlDoc.getElementsByTagName('RRPCode')[0].textContent;
      const availabilityStatus = document.getElementById('availabilityStatus');
      
      if (availability === '210') {
        availabilityStatus.textContent = `Domain "${domainName}" is available!`;
      } else {
        availabilityStatus.textContent = `Domain "${domainName}" is not available.`;
      }
    });

  const registrationForm = document.getElementById('users');
  registrationForm.addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Perform registration process here (e.g., API calls to enom.com)
    // Upon successful registration, you can redirect the user to a confirmation page.
    window.location.href = 'confirmation.html?domainName=' + domainName;
  });
</script>