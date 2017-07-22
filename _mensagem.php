<?php if(isset($_GET['msg'])){ ?>
  <!-- Example Modal 4: Corresponds with Portfolio Carousel Item 4 -->
  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-hidden="true")">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 offset-lg-2">
                              <h2><?php print $_GET['msg']; ?></h2>
                              <hr class="colored">
                          </div>
                          <div class="col-lg-8 offset-lg-2">
                              <ul class="list-inline item-details">
                                  <li><strong>Obrigado por utilizar nossos Serviços!</strong>
                                  </li>
                              </ul>
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
<?php } ?>
