<?php 
  include_once("./templates/header.php"); 
  include_once("./process/orders.php"); 
?>
 <div id="main-conatainer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Gerenciar pedidos</h2>
        </div>
        <div class="col-md-12 table-container">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"><span>Pedido</span> #</th>
                <th scope="col"><span>Borda</span> #</th>
                <th scope="col"><span>Massa</span> #</th>
                <th scope="col"><span>Sabores</span> #</th>
                <th scope="col"><span>Status</span> #</th>
                <th scope="col"><span>Ações</span> #</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1</td>
                <td>Cheddar</td>
                <td>Catupiry</td>
                <td>4 Queijos</td>
                <td>
                  <form action="./process/order.php" method="POST" class="form-group update-form">
                    <input type="hidden" name="type" value="update">
                    <input type="hidden" name="id" value="1">
                    <select name="status" class="form-control status-input">
                      <option value="">Entrega</option>
                    </select>
                    <button type="submit" class="update-btn">
                        <i class="fas fa-sync-alt"></i>
                    </button>     
                  </form>
                </td>
                <td>
                  <form action="./process/order.php" method="POST">
                    <input type="hidden" name="type" value="delete">
                    <input type="hidden" name="id" value="1">
                    <button type="submit" class="delete-btn">
                        <i class="fas fa-times"></i>
                    </button>     
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
 </div>
 <!-- <i class="fa-solid fa-arrows-rotate"></i> -->

<?php 
  include_once("./templates/footer.php"); 
?>