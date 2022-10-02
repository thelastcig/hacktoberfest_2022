<!doctype html>
    <html lang="en">
    <head>
        <title>IoT Parking</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />

        <!-- Semantic UI CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui-calendar/0.0.8/calendar.min.css" />

        <!-- Fotorama CSS -->
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/styles.css">

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-- Semantic UI JS -->
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui-calendar/0.0.8/calendar.min.js"></script>

        <!-- Fotorama JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="ui fixed menu borderless inverted segment">
                <a href="/" class="brand">IoT Parking</a>
          </div>
      </header>
      <!-- End header -->

<!-- End slides -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Main content -->
<main>
<?php
$events=[1,2,3,4];
?>
    <!-- Section events -->
    <div id="section--events" class="section">
        <div class="ui container">
            <div class="section__title">
                <h2>Parking Slots</h2>
            </div>
            <div class="section__content">
                <?php if ($events) { ?>
                    <div class="ui three column center aligned grid">
                        <div class="row">
                            <?php foreach ($events as $event) { ?>
                                <div class="column">
                                    <div class="ui card event">
                                        <div class="content">
                                            <h3>1</h3>
                                        </div>
                                        <div class="image">
                                            <img alt="" />
                                        </div>
                                        <div class="content">
                                            <h4>
                                                <?php echo date('F j, Y', strtotime($event['date'])); ?>
                                                @
                                                <?php echo date('H:i', strtotime($event['start_time'])) . ' - ' . date('H:i', strtotime($event['end_time'])) ?>
                                            </h4>
                                        </div>
                                        <div class="extra content">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <p style="text-align: center">No Parking Slots.</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End section events -->
</main>
<!-- End main content -->

<!-- Global footer -->
  <!-- Footer -->
  <footer class="ui inverted segment">
        <div class="ui grid">
            <div class="six wide column left floated">
                <h3 class="brand">IoT Parking</h3>
                <p>IoT Parking uses modern technology to draw in our clientele from different locations. Customers can choose home delivery or make a booking prior to their visits from the website.</p>
            </div>
            <div class="eight wide column right floated">
                <div class="ui equal width grid">
                    <div class="column">
                        <h3>Quick links</h3>
                        <div class="ui list">
                            <a href="/events" class="item">Events</a>
                            <a href="/team" class="item">Team</a>
                            <a href="/terms-and-conditions" class="item">Terms &amp; Conditions</a>
                            <a href="/privacy-policy" class="item">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="column">
                        <h3>Contact us</h3>
                        <div class="ui list">
                            <span class="item"><i class="fas fa-phone" style="margin-right: .5rem"></i> 000-111-22</span>
                            <span class="item"><i class="fas fa-envelope" style="margin-right: .5rem"></i> info@konoha.com</span>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="item">Follow us</h3>
                        <div class="ui list horizontal">
                            <a href="#" class="item"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="item"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="item"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="item"><i class="fab fa-tripadvisor"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui divider"></div>
        <span>© 2019 Konoha</span>
    </footer>
    <!-- End footer -->

    <!-- Custom JS -->
    <script src="js/konoha.js"></script>
</body>
</html>

