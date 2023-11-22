

<script src="<?= base_url('assets/')?>/js/core/popper.min.js"></script>
<script src="<?= base_url('assets/')?>/js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/')?>/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/')?>/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="<?=base_url('assets/')?>js/argon-dashboard.min.js?v=2.0.4"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"817faf6479b14041","version":"2023.10.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>
</html>