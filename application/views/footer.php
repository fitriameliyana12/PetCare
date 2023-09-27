  <!-- <div class="footer mt-5">
    <p>WIP</p>
  </div> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/980b00ecc9.js" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $("#id_menu2").change(function() {
        document.getElementById("harga").value = $(this).find('option:selected').attr('data-price');
      });
      $("#hitung").click(function() {
        var jumlah = document.getElementById("jumlah").value;
        var harga = document.getElementById("harga").value;
        var total = jumlah * harga;
        document.getElementById("total").value = total;
      });
    });
  </script>
  </body>

  </html>