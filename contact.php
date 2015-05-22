<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Sean A. Fischer</title>
    <meta name="description" content="The personal webpage of Sean A. Fischer.">
    <meta name="author" content="Sean A. Fischer">
    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </head>
  <body>
    <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include('topmatter.php'); ?>
    <div class="contact">
      <div class="container">
        <div class="row">
          <div class="u-full-width">
            <h1>Contact</h1>
          </div>
        </div>
        <div class="row">
          <div class="u-full-width">
            <form>
              <div class="row">
                <div class="six columns">
                  <label for="exampleEmailInput">Your email</label>
                  <input class="u-full-width" type="email" placeholder="example@mailbox.com" id="exampleEmailInput">
                </div>
                <div class="six columns">
                  <label for="exampleRecipientInput">Reason for contacting</label>
                  <select class="u-full-width" id="exampleRecipientInput">
                    <option value="Option 1">Interogative</option>
                    <option value="Option 2">Declarative</option>
                    <option value="Option 3">Imperative</option>
                  </select>
                </div>
              </div>
              <label for="exampleMessage">Message</label>
              <textarea class="u-full-width" placeholder="Hi Sean..." id="exampleMessage"></textarea>
              <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Send a copy to yourself</span>
              </label>
              <input class="button-primary" type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>