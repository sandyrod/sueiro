<div style="width: 100%; height:160%; position: relative;">
  <div class="shopping__cuerpo">
    <div class="shopping__cuerpomenu">
      <span class="tablinks" onclick="openCity(event, 'Productos')" id="defaultOpen">Mis Productos</span>
      <span class="tablinks1" onclick="openCity(event, 'Entrega')">Entrega</span>
      <span class="tablinks2" onclick="openCity(event, 'Pago')">Pago</span>
      <span class="tablinks3" onclick="openCity(event, 'Confirmación')">Confirmación</span>
    </div>
    <div class="shopping__sudcuerpo">
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
                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td>
                  <img class="shp" src="/img/mallas.png"><br>
                  <span style="margin: 10% 5%">Malla Especial</span>
                </td>
                <td>
                  <select class="shopping__select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
                <td>USD 29,3</td>
                <td>USD 29,3</td>
                <td><i style="color:red;" class="fas fa-trash-alt"></i></td>
              </tr>
              <tr>
                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td>
                  <img class="shp" src="/img/mallas.png"><br>
                  <span style="margin: 10% 5%">Malla Especial</span>
                </td>
                <td>
                  <select class="shopping__select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
                <td>USD 29,3</td>
                <td>USD 29,3</td>
                <td><i style="color:red;" class="fas fa-trash-alt"></i></td>
              </tr>
            </tbody>
            <tr style="height:5%; top:28%; left:80%; position:absolute;">
            <TD>Subtotal</TD>
            <TD style="color:#c1282d;">USD 58,6</TD>
            </tr>
          </table>
          <div class="shp__di">
            <span class="shp__dicon" ><i class="fas fa-comment-alt"></i></span>
            <span class="shp__dititle" >Observaciones</span>
          </div>
          <div class="shp__obse">
            <span class="shp__obsetitle">Orden de compra / Usuario</span>
            <input class="shp__obseimput" type="text" value="" id="flexCheckDefault">
            <br>
            <span class="shp__obsetext">Comentarios</span>
             <textarea class="shp__obsetexttarea" placeholder="Mensaje"></textarea>
          </div>          
          <div class="shp__rsmcom">
            <div class="shp__fontitle">
              <span class="shp__title"> Resumen Compra</span>
            </div>
            <div class="shp__cuerpo">
              <div class="shp__cuerporigth">
                <span class="shp__cuerporigth__title">Total Items</span>
                <span class="shp__cuerporigth__sudtitle">Subtotal</span>
              </div>
              <div class="shp__cuerpoleft">
                <span class="shp__cuerpolefttitle">2</span>
                <span class="shp__cuerpoleftsudtitle">USD 58,6</span>
              </div>
            </div>
            <div class="shp__cuerpo--env">
              <div class="shp__cuerpo--envrigth">
                <span class="shp__cuerpo--envrigthttitle">Envio</span>
                <br>  
                <span class="shp__cuerpo--envrigthtsudtitle" >Bonificaciones</span>
              </div>
              <div class="shp__cuerpo--envleft">
                <span class="shp__cuerpo--envlefttitle">A definir.</span>
                <br>  
                <span class="shp__cuerpo--envlefttitle">A definir.</span>
              </div>
            </div>
            <div class="shp__cuerpoiv" >
              <div class="shp__cuerpo--envrigth">
                <span class="shp__cuerpo--envrigthttitle">IVA(21%)</span>
                <br> 
                <span class="shp__cuerpo--envrigthttitle">Otros impuestos</span>
                <br> 
                <span class="shp__cuerpo--envrigthttitle">Total</span>
                <br> 
                <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
              </div>
              <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                  <span class="shp__cuerpo--envlefttitle">USD 12,2</span>
                  <br>                  
                  <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                  <br>
                  <span class="shp__cuerpo--envlefttitle">USD 70,5</span>
                  <br>
                  <span class="shp__cuerpo--envlefttitle">ARS 7490,6</span>
                </div>
              </div>
              <div style="width:100%; height:15%;">
                <div style="width:50%; height:25%;left:40%; position: absolute;">
                  <button type="button" class="btn btn-danger">Iniciar Compra</button>
                  <br><br>
                  <button type="button" class="btn btn-outline-danger">Vaciar Carrito</button>
                </div>
              </div>
            </div>
          </div>
        <div id="Entrega" class="tabcontent">
          <div class="shp__encont">
            <div class="shp__en">
              <span class="shp__enicon"><i class="fas fa-shipping-fast"></i></span>
              <span class="shp__entitle">Forma de Entrega</span>
            </div>
            <div style="border: solid; width:100%; height:30%;">
              <span style="
              margin-left:5%;
              margin-top:2%;
              position: absolute;
              width: 100%;
              height: 3%;
              color:#c1282d;
              font: normal normal normal 20px/20px Open Sans;
              background: transparent url('img/Seleccione la forma de entrega .png') 0% 0% no-repeat padding-box;
              opacity: 1;">Seleccione la forma de entrega</span>

              <div style="
              margin: 6% 20%;
              width: 211px;
              height: 69px;
              border: 1px solid var(--unnamed-color-c1282d);
              background: #FFFFFF 0% 0% no-repeat padding-box;
              border: 1px solid #C1282D;
              opacity: 1;">
              
              <span style="
              position: absolute;
              margin:2.5% 4%;
              width: 100%;
              height: 3%;
              color:#c1282d;
              font: normal normal normal 20px/20px Open Sans;
              background: transparent 0% 0% no-repeat padding-box;
              opacity: 1;">Retiro en sucursal</span>
              <input style="margin:11% 5%;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            <div style="border: solid; width:100%; height:30%;">
              <div style="border: solid; width:26%; height:100%; margin-left:16%;">
                <span>Sucursal Ciudadela</span><br>
                <span>Bergamini 1127 - Ciudadela</span><br>
                <span>54-11 4488-4649 / 3825</span><br>
                <span>Lu a Vie de 8 a 17 hrs</span>
              </div>
              <div style="border: solid; width:58%; height:100%; margin:-17% 42%;">
                MAPA
              </div>

            </div>
            <div style="border: solid; width:100%; height:30%;">
              <div style="
              margin: 6% 20%;
              width: 211px;
              height: 69px;
              border: 1px solid var(--unnamed-color-c1282d);
              background: #FFFFFF 0% 0% no-repeat padding-box;
              border: 1px solid #C1282D;
              opacity: 1;">
              
              <span style="
              position: absolute;
              margin:2.5% 4%;
              width: 100%;
              height: 3%;
              color:#c1282d;
              font: normal normal normal 20px/20px Open Sans;
              background: transparent 0% 0% no-repeat padding-box;
              opacity: 1;">Envío a domicilio</span>
              <input style="margin:11% 5%;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
            </div>
            
          </div>
          
          <div style="
          border:solid;
          top: 60%;
          left: 0%;
          width: 846px;
          height: 252px;
          background: #FFFFFF 0% 0% no-repeat padding-box;
          box-shadow: 0px 3px 6px #00000012;
          position:absolute;
          opacity: 1;">
          <div style="width:100%; height:400%; position: absolute; top:-140%">
            <div class="shp__di">
              <span class="shp__dicon" ><i class="fas fa-comment-alt"></i></span>
              <span class="shp__dititle" >Observaciones</span>
            </div>
          </div>
          
          </div>
        
        
        
          <div class="shp__rsmcom">
            <div class="shp__fontitle">
              <span class="shp__title"> Resumen Compra</span>
            </div>
            <div class="shp__cuerpo">
              <div class="shp__cuerporigth">
                <span class="shp__cuerporigth__title">Total Items</span>
                <span class="shp__cuerporigth__sudtitle">Subtotal</span>
              </div>
              <div class="shp__cuerpoleft">
                <span class="shp__cuerpolefttitle">2</span>
                <span class="shp__cuerpoleftsudtitle">USD 58,6</span>
              </div>
            </div>
            <div class="shp__cuerpo--env">
              <div class="shp__cuerpo--envrigth">
                <span class="shp__cuerpo--envrigthttitle">Envio</span>
                <br>  
                <span class="shp__cuerpo--envrigthtsudtitle" >Bonificaciones</span>
              </div>
              <div class="shp__cuerpo--envleft">
                <span class="shp__cuerpo--envlefttitle">Sin costo.</span>
                <br>  
                <span class="shp__cuerpo--envlefttitle">A definir.</span>
              </div>
            </div>
            <div class="shp__cuerpoiv" >
              <div class="shp__cuerpo--envrigth">
                <span class="shp__cuerpo--envrigthttitle">IVA(21%)</span>
                <br> 
                <span class="shp__cuerpo--envrigthttitle">Otros impuestos</span>
                <br> 
                <span class="shp__cuerpo--envrigthttitle">Total</span>
                <br> 
                <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
              </div>
              <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                  <span class="shp__cuerpo--envlefttitle">USD 12,2</span>
                  <br>
                  
                  <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                  <br>
                  
                  <span class="shp__cuerpo--envlefttitle">USD 70,5</span>
                  <br>
                  
                  <span class="shp__cuerpo--envlefttitle">ARS 7490,6</span>
                </div>
              </div>
            <div style="width:100%; height:15%;">
              <div style="width:50%; height:25%;left:40%; position: absolute;">
                <button type="button" class="btn btn-danger">Iniciar Compra</button>
                <br><br>
                <button type="button" class="btn btn-outline-danger"><i class="far fa-star"></i> Guardar Carrito</button>
              </div>
            </div>
          </div>
        </div>












        <div id="Pago" class="tabcontent">
          <h3>Coadsnfirmación</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>  
        <div id="Confirmación" class="tabcontent">  
          <h3>Confirmación</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>
      </div>
  </div>
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
      

