<html lang="en" dir="ltr">
  <head>
    <title>Reservation Form </title>
    <link rel="stylesheet" href="../controller/styleReservation.css">
  </head>
  <body>
    <header>
    <div class="nav">
                <h2 class="logo"><span>S</span>an and <span>To</span>ur</h2>
                <a href="../controller/logoutCheck.php" class="btn">Log out</a>
    </div>
    <div class="center">
      <h1>Reserve</h1>
      <form method="post" action="../controller/reserveCheck.php" enctype="multipart/form-data">
        <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
            <input type="number" name="age" min="1" max="90" required>
            <span></span>
            <label>Age</label>
          </div>
          <div class="txt_field">
            <input type="tel" name="contact_number" required>
            <span></span>
            <label>Contact Number</label>
          </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <span></span>  <label>Check-in-date</label><br> <input type="date" name="check_in_date" required>
           
            
          </div>
          <div class="txt_field">
          <select name="hotel_name" required>
                            <option value="">Choose Hotel</option>
                            <option value="hotel1">Hotel 1</option>
                            <option value="hotel2">Hotel 2</option>
                            <option value="hotel3">Hotel 3</option>
                        </select>
          </div>
          <div class="txt_field">
          <select name="room_type" required>
                            <option value="">Room Type</option>
                            <option value="ac">AC</option>
                            <option value="non_ac">Non AC</option>
                            <option value="luxury">Luxury</option>
                        </select>
          </div>
          <div class="txt_field">
            <input type="number" name="number_of_people" min="1" max="50" required>
            <span></span>
            <label>Number of People</label>
          </div>
          <div class="txt_field">
            <input type="file" name="myfile" >
          </div>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
    </header>
  </body>
</html>
