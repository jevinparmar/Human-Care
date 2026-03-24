<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human care</title>
    <link rel="icon" href="photos/hptl-web-icon.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style-abt.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="M-K-P.css">
</head>
<body>


    <?php include 'includes/topbar.php'; ?>
    
      <?php $activePage = 'appointment'; include 'includes/navbar.php'; ?>

      <section class="panal-of-abt-page">
        <div class="for-heading-of-about">
            <div class="home-show-about-page">
                <pre><a href="index.php">Home</a> &#x27BE; Make An Apointment</pre>
            </div>
            <div class="about-us-page-head">
                <p>Make An Apointment</p>
            </div>
        </div>
      </section>

      <div class="main-container-of-apointment">
        <div class="all-information-abt-apointment">

            <div class="text-content">

                <p class="heading">Book an Appointment</p>

                <p class="extra-text">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, primis in orci integer metus mollis faucibus enim. Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium purus feugiat dolor impedit magna purus pretium gravida donec ligula massa gravida donec pretium</p>
            </div>
            
            <div class="all-inputs-for-apointment">

              <form name="submit-to-google-sheet" action="">

                <select class="form-select" name="Department Name" aria-label="Default select example">
                    <option selected>Select Department</option>
                    <option value="Laboratory Services">Laboratory Services</option>
                    <option value="X-Ray Diagnostic Department">X-Ray Diagnostic Department</option>
                    <option value="Neurology Department">Neurology Department</option>
                    <option value="MRI Department">MRI Department</option>
                    <option value="Cardiology Department">Cardiology Department</option>
                    <option value="Other">Other</option>
                  </select>

                  <select class="form-select" name="Doctor Name" aria-label="Default select example">
                    <option selected>Select Doctor</option>
                    <option value="Jonathan Barnes D.M">Jonathan Barnes D.M</option>
                    <option value="Priyanka Chavda D.M">Priyanka Chavda D.M</option>
                    <option value="Megan Coleman D.M">Megan Coleman D.M</option>
                    <option value="Matthew Anderson D.M">Matthew Anderson D.M</option>
                    <option value="other">other</option>
                  </select>

                  <select class="form-select" name="new / Old Patient" aria-label="Default select example">
                    <option selected>Have You Visit Us Before</option>
                    <option value="New Patient">New Patient</option>
                    <option value="Returning Patient">Returning Patient</option>
                    <option value="Other">Other</option>
                  </select>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nme" name="Patient Name" placeholder="name@example.com" required>
                    <label for="floatingInput">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="eml" name="E-mail" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="num" name="Number" placeholder="name@example.com" required>
                    <label for="floatingInput">Mobile Number</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="dte" name="Date" placeholder="name@example.com" required>
                    <label for="floatingInput">Date</label>
                  </div>
                 
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  </div>

                  <button class="request-apointment-btn" type="submit">Request An Apointment</button>

                </form>
                  
            </div>

            <div class="other-extra-lines">
                <p>* Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, primis in orci integer metus mollis faucibus enim. Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium purus</p>
            </div>

        </div>

        <div class="extra-items-of-apt">

           <div class="small-information">
            <p id="hd-smf">The Heart Of Clinic</p>
            <hr>
            <div class="doc-smf-dta">
              <div class="phto-of-doc"></div>
              <p id="nme-doc">Dr. Jonathan Barnes <br><span id="ifo-abt-smf-doc">Chief Medical Officer, Founder</span> <br><span id="ftr-cntnt-clr">1-800-1234-567</p></span>
              

            </div>
            <p>
              An enim nullam tempor sapien at gravida donec pretium ipsum porta justo integer at odiovelna vitae auctor integer congue magna purus
            </p>
            <a href="meet-doc.php"><button>Learn More</button></a>
           </div>
           
           <div class="time-table-of-this-hospital">
  
            <p id="bg-fnt">Opening Hours:</p>
            <p id="heading-extra-lines">Porta semper lacus cursus and feugiat primis ultrice ligula risus auctor tempus feugiat and dolor lacinia cursus</p>
    
            <div class="time-table-routin">
              <pre>Mon-Wed  -  9:00 AM-7:00 PM</pre>
              <hr>
              <pre>Thusday  -  9:00 AM-6:30 PM</pre>
              <hr>
              <pre>Friday  -  9:00 AM-6:00 PM</pre>
              <hr>
              <pre>Sunday  -  Closed</pre>
              <hr>
            </div>
    
            <p id="bg-fnt">Need a personal health plan?</p>
            <p id="heading-extra-lines">Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor</p>
    
          </div>

        </div>

      </div>


      <footer class="last-part-of-abt-us">
        <?php include 'includes/footer.php'; ?>
      </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
          offset: 180,
          duration: 950,
        });
      </script>
      <script src="script.js"></script>
      
      <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwNBuLlHCGti41WDEPbs6KxwHZI0Oc1I27wrMnpZVxH7utPr-69rEEjocHNl3m1Z28g/exec'
        const form = document.forms['submit-to-google-sheet']
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
        })
      </script>
</body>
</html>