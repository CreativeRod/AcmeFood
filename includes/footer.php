          <div id="footer" class="cf">
            <div class="column three">
              <strong>Phone</strong>
              808.529.3819
            </div> <!-- column three -->
            <div class="column three">
              <strong>Location</strong>
              123 Acme Cafe Rd <br>
              Little Rock, AR 72202
            </div> <!-- column three -->
            <div class="column three last">
              <strong>Hours</strong>
              <em>Tuesday - Thursday</em><br>
              1:00pm - 9:00pm <br><br>

              <em>Friday - Saturday</em><br>
              4:00pm - 11:00pm <br><br>

              <em>Sunday - Monday</em><br>
              Closed <br><br>

              <?php include('includes/store-hours.php'); ?>

            </div> <!-- column three last -->
          </div> <!-- #footer .cf -->

          <small>&copy; <?php echo date('Y'); ?> <?php echo $companyName; ?></small>

        </div> <!-- content -->
    </div> <!-- wrapper -->

    <div class="copyright-info">
      <?php //include('assets/includes/copyright.php');?>
    </div><!--copyright-info-->

  </body>
</html>
