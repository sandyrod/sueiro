<div style="position: absolute;  width:100%; height:72%; background: #FFF; top:23%; ">
    <div style="top: 3%;
    left: 4%;
    width: 88%;
    height: 14%;
    background: #F9F9F9 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000021;
    opacity: 1;
    position: absolute;">
       
            <span class="tablinks" onclick="openCity(event, 'Productos')" id="defaultOpen">Mis Productos</span>
            <span class="tablinks1" onclick="openCity(event, 'Entrega')">Entrega</span>
            <span class="tablinks2" onclick="openCity(event, 'Pago')">Pago</span>
            <span class="tablinks3" onclick="openCity(event, 'Confirmación')">Confirmación</span>
       
    </div>
    <div style=" top: 18%;
    left: 0%;
    width: 100%;
    height: 81%;
    background: #fff 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000021;
    opacity: 1;
    position: absolute;">
          
          <div id="Productos" class="tabcontent">
            <table class="table">
                <thead style="background:#33333370;color:#FFFFFF;text-align:center;">
                <tr>
                    <th scope="col"><i class="fas fa-cart-plus"></i></th>
                    <th scope="col">Producto </th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Unidad</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody style="text-align:center;">
                <tr>
                    <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </td>
                    <td>20/02/2020</td>
                    <td>20/04/2020</td>
                    <td>$4.765</td>
                    <td><button class="orders__btn">DESCARGAR REMITO <i class="fas fa-download"></i></button></td>
                </tr>
                <tr>
                    <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </td>
                    <td>15/07/2019</td>
                    <td>15/12/2019</td>
                    <td>$8.569</td>
                    <td><button class="orders__btn">DESCARGAR REMITO <i class="fas fa-download"></i></button></td>
                </tr>
                <tr>
                    <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </td>
                    <td>15/04/2019</td>
                    <td>15/06/2019</td>
                    <td>$8.569</td>
                    <td><button class="orders__btn">DESCARGAR REMITO <i class="fas fa-download"></i></button></td>
                </tr>
                </tbody>
            </table>
          </div>
          
          <div id="Entrega" class="tabcontent">
            
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p> 
          </div>
          
          <div id="Pago" class="tabcontent">
            
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div>

          <div id="Confirmación" class="tabcontent">  
            <h3>Confirmación</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div>
          
          <script>
          function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
          }
          
          // Get the element with id="defaultOpen" and click on it
          document.getElementById("defaultOpen").click();
          </script>
    </div>
    
</div>
