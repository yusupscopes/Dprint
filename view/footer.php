<footer class="page-footer teal">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Dprint</h5>
        <p class="grey-text text-lighten-4">Dprint mempermudah kamu dan percetakan dalam melakukan kegiatan digital printing. Kami akan terus meningkatkan pelayanan demi kenyamanan bersama</p>


      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Menu</h5>
        <ul>
          <li>
            <a class="white-text" href="lokasi.php">Lokasi</a>
          </li>
          <li>
            <a class="white-text" href="about.php">About</a>
          </li>
          <li>
            <a class="white-text" href="login.php">Login</a>
          </li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Kontak</h5>
        <ul>
          <li><i class="fa fa-facebook-square fa-fw" style="font-size:20px"></i>
            <a class="white-text" href="#!">Facebook</a>
          </li>
          <li><i class="fa fa-twitter-square fa-fw" style="font-size:20px"></i>
            <a class="white-text" href="#!">Twitter</a>
          </li>
          <li><i class="fa fa-instagram fa-fw" style="font-size:20px"></i>
            <a class="white-text" href="#!">Instagram</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l4">
          &copy; Copyright <a class="brown-text text-lighten-3" href="#!">Dprint</a> 2016 - 2017
        </div>

        <div class="col s12 m6 offset-l4 l4">
          Made with <i class="material-icons" style="font-size:14px">favorite</i> from Depok
        </div>

      </div>

    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/materialize.min.js"></script>
<script src="assets/js/init.js"></script>
<script>
  var customLabel = {
    restaurant: {
      label: 'R'
    },
    bar: {
      label: 'B'
    }
  };

    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(-6.36790004, 106.83756173),
      zoom: 12
    });
    var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP or XML file
      downloadUrl('phpsqlajax_genxml.php', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {
          var name = markerElem.getAttribute('name');
          var address = markerElem.getAttribute('address');
          // var type = markerElem.getAttribute('type');
          var point = new google.maps.LatLng(
              parseFloat(markerElem.getAttribute('lat')),
              parseFloat(markerElem.getAttribute('lng')));

          var infowincontent = document.createElement('div');
          var strong = document.createElement('strong');
          strong.textContent = name
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement('br'));

          var text = document.createElement('text');
          text.textContent = address
          infowincontent.appendChild(text);
          var icon = customLabel || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: icon.label
          });
          marker.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
          });
        });
      });
    }



  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };

    request.open('GET', url, true);
    request.send(null);
  }

  function doNothing() {}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoKXrgzM2O45fHjz25HT423RoGTMMZMPw&callback=initMap">
</script>
</body>
</html>
